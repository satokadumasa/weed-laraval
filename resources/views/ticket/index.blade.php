@extends('layouts.app')
@section('content')
            <script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js">
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET INFOMATION LIST</h2>
                <form action="{{ config("app.url") }}/ticket/" method="get">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            本名
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <input type="text" name="family_name" id="family_name" value="{{ isset($params['family_name']) ? $params['family_name'] : '' }}"> <input type="text" name="first_name" id="first_name" value="{{ isset($params['first_name']) ? $params['first_name'] : '' }}">
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            バッジベーム
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <input type="text" name="badge_name" id="badge_name" value="{{ isset($params['badge_name']) ? $params['badge_name'] : '' }}">
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            ステータス
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <select name="status_id">
                                <option value="" id="status_id_0">-</option>
                                @foreach ($statuses as $status)
                                    @if(isset($params['status_id']) && $status->id == $params['status_id'])
                                    <option value="{{ $status->id }}" id="status_id_{{ $status->id }}" selected>{{ $status->status }}</option>
                                    @else
                                    <option value="{{ $status->id }}" id="status_id_{{ $status->id }}">{{ $status->status }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            住所
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        都道府県
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <select name="pref_id">
                                            <option value="" id="pref_id_0">-</option>
                                            @foreach ($prefs as $pref)
                                                @if(isset($params['pref_id']) && $pref->id == $params['pref_id'])
                                                <option value="{{ $pref->id }}" id="pref_id_{{ $pref->id }}" selected>{{ $pref->pref }}</option>
                                                @else
                                                <option value="{{ $pref->id }}" id="pref_id_{{ $pref->id }}">{{ $pref->pref }}</option>
                                                @endif
                                            @endforeach
                                        </select><br>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        郵便番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <input type="text" name="post_code" id="post_code" value="{{ isset($params['post_code']) ? $params['post_code'] : '' }}"><br>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        市区町村・町域
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <input type="text" name="address" id="address" value="{{ isset($params['address']) ? $params['address'] : '' }}"><br>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        建物名
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <input type="text" name="building_name" id="building_name" value="{{ isset($params['building_name']) ? $params['building_name'] : '' }}"><br>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        部屋番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <input type="text" name="room_number" id="room_number" value="{{ isset($params['room_number']) ? $params['room_number'] : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            電話番号
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <input type="text" name="phone_number" id="phone_number" value="{{ isset($params['phone_number']) ? $params['phone_number'] : '' }}">
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            携帯電話
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <input type="text" name="badge_name" id="badge_name" value="{{ isset($params['badge_name']) ? $params['badge_name'] : '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <input type="submit" value="Search">
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <a href="{{ config("app.url") }}/ticket/import">IMPORT</a>
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
