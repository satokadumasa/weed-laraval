<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Pref;
use App\Services\TicketService;
use App\Services\CommontService;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        \Log::debug("TicketController::index() START");
        $params = $request->all();
        $tickets = null;

        $statuses = Status::all();
        $prefs = Pref::all();

        $query = Ticket::with('status','pref');
        foreach($params AS $key => $value) {
            if(!isset($value) || empty($value)) continue;
            if($key == 'page') continue;
            if(in_array($key, ['first_name', 'family_name', 'address', 'building_name', 'badge_name'])) {
                $query = $query->where($key, 'LIKE', "%{$value}%");
            } else {
                $query = $query->where($key, '=', $value);
            }
        }
        $tickets = $query->orderBy('id')->paginate(20)->fragment('tickets');

        return view('ticket.index', compact('tickets', 'statuses', 'prefs', 'params'));
    }

    public function create()
    {
        \Log::debug("TicketController::create() START");
        $statuses = Status::all();
        $prefs = Pref::all();
        return view('ticket.create', compact( 'statuses', 'prefs'));
    }

    public function store(Request $request)
    {
        \Log::debug("TicketController::store() START");
        $params = $request->all();

        $ticket_code = Ticket::where('id', '>', 0 )->max('ticket_code');
        $ticket_code_prefix = substr($ticket_code, 0, 2);
        $ticket_code_num = substr($ticket_code, 2, 5);
        $ticket_code_num++;
        $ticket_code = sprintf('%s%05d', $ticket_code_prefix, $ticket_code_num);

        $hash = CommontService::createHash(32);
        \Log::debug("TicketController::store() hash[{$hash}]");

        DB::beginTransaction();
        try {
            $ticket = Ticket::create([
                'hash'           => $hash,
                'ticket_code'    => $ticket_code,
                'badge_name'     => $params['badge_name'],
                'first_name'     => $params['first_name'],
                'family_name'    => $params['family_name'],
                'status_id'      => $params['status_id'],
                'age'            => $params['age'],
                'gender'         => $params['gender'],
                'email'          => $params['email'],
                'post_code'      => $params['post_code'],
                'pref_id'        => $params['pref_id'],
                'address'        => $params['address'],
                'building_name'  => $params['building_name'],
                'room_number'    => $params['room_number'],
                'phone_number'   => $params['phone_number'],
                'mobile_number'  => $params['mobile_number'],
                'description'    => isset($params['description']) ? $params['description'] : '',
            ]);
            $ticket->save();
            DB::commit(); 
            return redirect()->route('ticket.index');
        } catch (\Throwable $th) {
            \Log::debug("TicketController::store() Error:" . $th->getMessage());
            DB::rollBack(); 
            return redirect()->route('exceprion_error');
        }
    }
    public function show(string $hash)
    {
        \Log::debug("TicketController::show() ");
        $ticket = Ticket::with(['status', 'pref'])->Where('hash', '=', $hash)->first();
        $statuses = Status::all();
        $url = config("app.url") . "/ticket/show/{$ticket->hash}";
        return view('ticket.show', compact('ticket', 'statuses','url'));
    }

    public function update(Request $request)
    {
        \Log::debug("TicketController::update() START");
        DB::beginTransaction();
        try {
            $params = $request->all();
            \Log::debug("TicketController::update() params:" . print_r($params, true));
            $ticket = Ticket::Where('hash', $params['hash'])->first();
            $ticket->status_id = $params['status_id'];
            $ticket->save();
            DB::commit(); 

            return response()->json([
                'data' => [
                    'message' => 'success',
                    'status' => 200
                ]]);
        } catch (\Throwable $th) {
            DB::rollBack(); 
            return response()->json([
                'data' => [
                    'message' => 'false',
                    'status' => 200
                ]]);
        }
    }

    public function import(Request $request)
    {
        \Log::debug("TicketController::import() START");
        $params = $request->all();
        return view('ticket.import');
    }

    public function store_import(Request $request)
    {
        \Log::debug("TicketController::store() START");
        TicketService::importTicketData($request);
        return redirect()->route('ticket.index');
    }

    public function qr_read()
    {
        return view('ticket.qr_read');
    }
}
