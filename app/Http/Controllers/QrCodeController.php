<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class QrCodeController extends Controller
{
    public function index()
    {

    }
    public function show(string $hash)
    {
        \Log::debug("QrCodeController::show() hash[{$hash}]");
        $ticket = Ticket::with(['status', 'pref'])->Where('hash', $hash)->first();
        $url = config("app.url") . "/ticket/show/{$hash}";
        return view('qr-code.show', compact('ticket','url'));
    }
}
