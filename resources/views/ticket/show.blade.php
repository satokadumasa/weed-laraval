@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET INFOMATION</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 316px; margin: 1px; padding: 5px; background-color: white;">
                            <b>参加者情報</b><br>
                            チケットコード：{{ $ticket->ticket_code }}<br>
                            バッジネーム：{{ $ticket->badge_name }}<br>
                            本名：{{ $ticket->family_name }} {{ $ticket->first_name }}<br>
                            ステータス：
                                <select name="status_id" id="status_id" onchange="update_status('{{ $ticket->hash }}')">
                                    @foreach ($statuses as $status)
                                    @if($status->id == $ticket->status_id)
                                    <option value="{{ $status->id }}" id="status_id_{{ $status->id }}" selected>{{ $status->status }}</option>
                                    @else
                                    <option value="{{ $status->id }}" id="status_id_{{ $status->id }}">{{ $status->status }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <br>
                            住所：〒{{ $ticket->post_code }}<br>
                            　　　{{ $ticket->pref[0]->pref }}{{ $ticket->address }}{{ $ticket->building_name }}{{ $ticket->room_number }}<br>
                            電話番号：{{ $ticket->phone_number }}<br>
                            携帯番号：{{ $ticket->mpbile_number }}<br>
                            @csrf
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4" style="height: 320px; background-color: whitesmoke; padding: 1px;">
                        <b>連絡事項</b><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="height: 160px; background-color: whitesmoke; padding: 1px;">
                                    <div style="height: 156px; margin: 1px; padding: 5px; background-color: white;text-align: center;">
                                        連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項連絡事項
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
