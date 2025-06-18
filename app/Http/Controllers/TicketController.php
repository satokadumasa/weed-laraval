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
        $tickets = null;

        $statuses = Status::all();
        $prefs = Pref::all();

        $query = Ticket::with('status','pref');
        foreach($params AS $key => $value) {
            $query = $query->where($key, '=', $value);
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
}
