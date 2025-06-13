<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Status;

class TicketController extends Controller
{
    public function index()
    {
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
        $prams = $request->all();
        \Log::debug("TicketController::update() params:" . print_r($prams, true));
        $ticket = Ticket::Where('hash', $prams['hash'])->first();
        \Log::debug("TicketController::update() ticket:" . print_r($ticket, true));
        $ticket->status_id = $prams['status_id'];
        $ticket->save();

        return response()->json([
            'data' => [
                'message' => 'success',
                'status' => 200
            ]]);
    }
}
