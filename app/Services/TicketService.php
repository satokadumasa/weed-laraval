<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TicketService
{
    public static function importTicketData(Request $request)
    {
        $params = $request->all();
        if ($request->hasFile('csv_file')) {
            //拡張子がCSVであるかの確認
            if ($request->file('csv_file')->getClientOriginalExtension() !== "csv") {
                return false;
            }
            //ファイルの保存
            $newCsvFileName = $request->csv_file->getClientOriginalName();
            $path = $request->file('csv_file')->storeAs('storage', $newCsvFileName);
        } else {
            return false;
        }
        //保存したCSVファイルの取得
        $csv = Storage::disk('local')->get("storage/{$newCsvFileName}");
        // OS間やファイルで違う改行コードをexplode統一
        $csv = str_replace(array("\r\n", "\r"), "\n", $csv);
        // $csvを元に行単位のコレクション作成。explodeで改行ごとに分解
        $uploadedData = collect(explode("\n", $csv));
        $ticket_code = '';
        foreach($uploadedData AS $uploadedDatum) {
            \Log::debug("TicketService::importTicketData()  [{$uploadedDatum
            
            
            }]");
            $data = explode(',', $uploadedDatum);
            if(count($data) == 0 || !isset($data[1])) continue;
            $ticket = Ticket::where('hash', '=', $data[0])->first();
            if($ticket) {
                \Log::debug("TicketService::importTicketData() ticket exist [{$ticket->hash}]");
                continue;
            }
            Ticket::create([
                'hash'          => $data[0],
                'ticket_code'   => $data[1],
                'badge_name'    => $data[2],
                'first_name'    => $data[3],
                'family_name'   => $data[4],
                'status_id'     => 1, 
                'age'           => $data[5],
                'gender'        => $data[6],
                'email'         => $data[7],
                'post_code'     => $data[8],
                'pref_id'       => $data[9],
                'address'       => $data[10],
                'building_name' => $data[11],
                'room_number'   => $data[12],
                'phone_number'  => $data[13],
                'mobile_number' => $data[14],
                'description'   => $data[15],
            ]);
            \Log::debug("TicketService::importTicketData() NEXT");
        }
    }
}