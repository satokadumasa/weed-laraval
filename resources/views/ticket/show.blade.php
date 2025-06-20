@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET INFOMATION</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <div class="container">
                            <div style="height: 316px; background-color: white;text-align: center;">
                                <b>QR CODE</b><br>
                                {!! QrCode::size(250)->generate($url) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 316px; margin: 1px; padding: 5px; background-color: white;">
                            @csrf
                            <div class="container">
                                <div class="row" style="background-color: whitesmoke;">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        <b>参加者情報</b>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        チケットコード
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        {{ $ticket->ticket_code }}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        バッジネーム
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        {{ $ticket->badge_name }}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        本名
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        {{ $ticket->family_name }} {{ $ticket->first_name }}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        ステータス
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        <select name="status_id" id="status_id" onchange="update_status('{{ $ticket->hash }}')">
                                            @foreach ($statuses as $status)
                                            @if($status->id == $ticket->status_id)
                                            <option value="{{ $status->id }}" id="status_id_{{ $status->id }}" selected>{{ $status->status }}</option>
                                            @else
                                            <option value="{{ $status->id }}" id="status_id_{{ $status->id }}">{{ $status->status }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        住所
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        〒{{ $ticket->post_code }}<br>
                                        　　　{{ $ticket->pref[0]->pref }}{{ $ticket->address }}{{ $ticket->building_name }}{{ $ticket->room_number }}<br>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        電話番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        {{ $ticket->phone_number }}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        携帯番号
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 col-xxl-8" style="height: 20px; background-color: whitesmoke; padding: 1px;">
                                        {{ $ticket->mpbile_number }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <b>連絡事項</b><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                                    <div style="height: 290px; margin: 1px; padding: 5px; background-color: white;text-align: center;">
                                        連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                [<a href="{{ config("app.url") }}/ticket/">INDEX</a>]
            </main>
            <script>
                function update_status(hash) {
                    var org_status_id = {{ $ticket->status_id }};
                    var status_id = $('#status_id').val();
                    var token = $('input[name="_token"]').val();
                    $.ajax({
                        url:'/ticket/update',
                        headers: {
                            'X-CSRF-TOKEN': token,
                        },
                        type:'POST',
                        data:{
                            'hash': hash,
                            'status_id': status_id,
                        }
                    })
                    // Ajax通信が成功したら発動
                    .done( (data) => {
                        $('status_id').val(status_id);
                        alert('ステータスが更新されました。。');
                    })
                    // Ajax通信が失敗したら発動
                    .fail( (jqXHR, textStatus, errorThrown) => {
                        alert('ステータスが更新されませんでした。');
                    });
                }
            </script>
@endsection
