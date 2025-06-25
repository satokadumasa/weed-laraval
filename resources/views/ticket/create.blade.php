@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET INFOMATION</h2>
                <form action="{{ config("app.url") }}/ticket/store" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 430px; background-color: whitesmoke; padding: 1px;">
                        <div class="container">
                            <div style="height: 366px; background-color: white;text-align: center;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 430px; background-color: whitesmoke; padding: 1px;">
                        <b>参加者情報</b>
                        <div style="height: 366px; margin: 1px; padding: 5px; background-color: white;">
                            @csrf
                            <div class="container" style="background-color: whitesmoke;">
                                <div class="row" style="background-color: whitesmoke;">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        バッジネーム
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="badge_name" id="badge_name" value="" size="24" placeholder="バッジネーム">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 60px; background-color: white; padding: 1px; border: 1px solid;">
                                        本名
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 60px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="family_name" id="family_name" value="" size="10" placeholder="氏"><br>
                                        <input type="text" name="first_name" id="first_name" value="" size="10" placeholder="名">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        ステータス
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <select name="status_id" id="status_id">
                                            @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}" id="status_id_{{ $status->id }}">{{ $status->status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        年齢
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="age" id="age" value="" size="3" placeholder="00">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        性別
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <select name="gender" id="gender">
                                            <option value="1">男性</option>
                                            <option value="2">女性</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 120px; background-color: white; padding: 1px; border: 1px solid;">
                                        住所
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 120px; background-color: white; padding: 1px; border: 1px solid;">
                                        〒<input type="text" name="post_code" id="post_code" value="" size="10" placeholder="郵便番号"><br>
                                        <select name="pref_id" id="pref_id">
                                            @foreach ($prefs as $pref)
                                            <option value="{{ $pref->id }}" id="pref_id_{{ $status->id }}">{{ $pref->pref }}</option>
                                            @endforeach
                                        </select>
                                        <input type="text" name="address" id="address" value="" size="16" placeholder="市区町村・町域">
                                        <input type="text" name="building_name" id="building_name" value="" size="16" placeholder="建物名">
                                        <input type="text" name="room_number" id="room_number" value="" size="5" placeholder="部屋番号">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        メールアドレス
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="email" id="email" value="" size="24" placeholder="メールアドレス">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        電話番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="phone_number" id="phone_number" value="" size="24" placeholder="電話番号">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        携帯番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 30px; background-color: white; padding: 1px; border: 1px solid;">
                                        <input type="text" name="mobile_number" id="mobile_number" value="" size="24" placeholder="携帯電話">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 430px; background-color: whitesmoke; padding: 1px;">
                        <b>連絡事項</b><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="height: 366px; background-color: white; padding: 1px;">
                                    <div style="height: 362px; margin: 1px; padding: 5px; background-color: white;text-align: center;">
                                        <textarea name="description" cols="40" rows="10" placeholder="連絡事項"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 25px; background-color: whitesmoke; padding: 1px;">
                        <input type="submit" value="Submit">
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 25px; background-color: whitesmoke; padding: 1px;">
                        [<a href="{{ config("app.url") }}/ticket/">INDEX</a>]
                    </div>
                </div>
                </form>
            </main>
@endsection
