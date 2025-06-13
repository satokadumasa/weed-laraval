@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <div class="container">
                            <div style="height: 316px;  background-color: white;text-align: center;">
                                <b>QR CODE</b><br>
                                {!! QrCode::size(250)->generate($url) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 316px; margin: 1px; padding: 5px; background-color: white;">
                            <b>参加者情報</b><br>
                            チケットコード：{{ $ticket->ticket_code }}<br>
                            バッジネーム：{{ $ticket->badge_name }}<br>
                            本名：{{ $ticket->family_name }} {{ $ticket->first_name }}<br>
                            ステータス：{{ $ticket->status[0]->status }}<br>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <b>連絡事項</b><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                                    <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;text-align: center;">
                                        連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection
