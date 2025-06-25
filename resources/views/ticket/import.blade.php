@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>TICKET DATA IMPORT</h2>
                <form action="{{ config("app.url") }}/ticket/store_import" method="post" enctype="multipart/form-data">
                @csrf
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
                            <a href="{{ config("app.url") }}/ticket/">TICKET LIST</a>
                        </div>
                    </div>
                </div>
                </form>
                [<a href="{{ config("app.url") }}/ticket/">INDEX</a>]
            </main>
@endsection
