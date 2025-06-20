<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Pref;
use App\Services\TicketService;

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
        $tickets = $query->orderBy('id')->paginate(5)->fragment('tickets');

        return view('ticket.index', compact('tickets', 'statuses', 'prefs', 'params'));
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

    public function store(Request $request)
    {
        \Log::debug("TicketController::store() START");
        TicketService::importTicketData($request);
        return redirect()->route('ticket.index');
    }
}
