{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')
@section('content')
            <main style="padding: 56px 0px 36px;">
                <h2>Home</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2" style="height: 200px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 196px; margin: 1px; padding: 5px; background-color: white;">
                            [写真]
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10 col-xxl-10" style="height: 200px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 196px; margin: 1px; padding: 5px; background-color: white;">
                            [ハンドルネーム]<br>
                            [ハンドルネーム]<br>
                            [ハンドルネーム]<br>
                            [ハンドルネーム]<br>
                            [ハンドルネーム]<br>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0003
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0002
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-lg-4 col-xl-4 col-xxl-4" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0004
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-lg-4 col-xl-4 col-xxl-4" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0005
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-lg-4 col-xl-4 col-xxl-4" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0006
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-lg-4 col-xl-4 col-xxl-4" style="height: 300px; background-color: whitesmoke; padding: 1px;">
                        <div style="height: 296px; margin: 1px; padding: 5px; background-color: white;">
                            0007
                        </div>
                    </div>
                </div>
            </main>
@endsection
