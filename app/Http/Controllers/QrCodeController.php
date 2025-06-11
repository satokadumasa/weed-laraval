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
        \Log::debug("QrCodeController::show() ");
        $ticket = Ticket::Where('hash', $hash)->first();
        \Log::debug("QrCodeController::show() ticket:" . print_r($ticket, true));
        $data = [

        ];
    }
}
