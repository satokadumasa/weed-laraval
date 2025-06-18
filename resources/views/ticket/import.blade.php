@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET INFOMATION LIST</h2>
                <form action="{{ config("app.url") }}/ticket/import" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            CSVファイル
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <input type="file" name="csv_file" id="csv_file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <input type="submit" value="Regist">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        </div>
                    </div>
                </div>
                </form>

                <hr>
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            本名
                        </div>
                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            バッジネーム
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            ステータス
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            住所
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            電話番号
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 40px; background-color: whitesmoke; padding: 1px;">
                        <div style="margin: 1px; padding: 5px; background-color: white;">
                            携帯電話
                        </div>
                    </div>
                </div>
                @foreach($tickets AS $ticket)
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px;">
                            <a href="{{ config("app.url") . "/ticket/show/{$ticket->hash}" }}">
                                {{ $ticket->family_name }} {{ $ticket->first_name }}<br>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px">
                            <a href="{{ config("app.url") . "/ticket/show/{$ticket->hash}" }}">
                                {{ $ticket->badge_name }}<br>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px">
                            {{ $ticket->status[0]->status }}
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px">
                            〒{{ $ticket->post_code }}<br>
                            {{ $ticket->pref[0]->pref }}{{ $ticket->address }} {{ $ticket->building_name }} {{ $ticket->room_number }}<br>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px">
                            {{ $ticket->phone_number }}<br>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2" style="height: 60px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 56px; margin: 1px; padding: 5px; background-color: white;font-size: 12px">
                            {{ $ticket->mobile_number }}<br>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $tickets->appends(request()->query())->links() }}
            </main>
@endsection
