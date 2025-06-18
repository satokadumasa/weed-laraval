<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Pref;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        \Log::debug("TicketController::index() params:" . print_r($params, true));
        $tickets = null;

        $statuses = Status::all();
        $prefs = Pref::all();

        $query = Ticket::with('status','pref');
        foreach($params AS $key => $value) {
            if(!isset($value) || empty($value)) continue;
            if($key == 'page') continue;
            if(in_array($key, ['address', 'building_name', 'badge_name'])) {
                $query = $query->where($key, 'LIKE', "%{$value}%");
            } else {
                $query = $query->where($key, '=', $value);
            }
        }
        $tickets = $query->orderBy('id')->paginate(5)->fragment('tickets');

        return view('ticket.index', compact('tickets', 'statuses', 'prefs', 'params'));
    }

    public function show(string $hash)
    {
        \Log::debug("TicketController::show() ");
        $ticket = Ticket::with(['status', 'pref'])->Where('hash', $hash)->first();
        $statuses = Status::all();
        \Log::debug("TicketController::show() statuses:" . print_r($statuses, true));
        $url = config("app.url") . "/ticket/show/{$hash}";
        return view('ticket.show', compact('ticket', 'statuses','url'));
    }

    public function update(Request $request)
    {
        $params = $request->all();
        \Log::debug("TicketController::update() params:" . print_r($params, true));
        $ticket = Ticket::Where('hash', $params['hash'])->first();
        \Log::debug("TicketController::update() ticket:" . print_r($ticket, true));
        $ticket->status_id = $params['status_id'];
        $ticket->save();

        return response()->json([
            'data' => [
                'message' => 'success',
                'status' => 200
            ]]);
    }

    public function import(Request $request)
    {
        $params = $request->all();
        \Log::debug("TicketController::store() params:" . print_r($params, true));
        return view('ticket.import');
    }

    public function store(Request $request)
    {
        $params = $request->all();
        \Log::debug("TicketController::store() params:" . print_r($params, true));
        if ($request->hasFile('csv_file')) {
            //拡張子がCSVであるかの確認
            if ($request->file('csv_file')->getClientOriginalExtension() !== "csv") {
                throw new Exception('不適切な拡張子です。');
            }
            //ファイルの保存
            $newCsvFileName = $request->csv_file->getClientOriginalName();
            \Log::debug("TicketController::store() newCsvFileName[{$newCsvFileName}]");
            $request->file('csv_file')->storeAs('storage/', $newCsvFileName);
        } else {
            throw new Exception('CSVファイルの取得に失敗しました。');
        }
        // return redirect()->action('TicketController::import');
        return redirect()->route('ticket.import');
    }
}
