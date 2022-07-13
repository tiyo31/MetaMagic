@extends('theme::layouts.app')

@section('content')

<div class="py-20">
    <div class="sm:mx-auto sm:w-full sm:max-w-5xl">

        <h1 class="max-w-md text-4xl font-extrabold text-gray-900 sm:mx-auto lg:max-w-none lg:text-5xl sm:text-center">Paket Harga</h1>
        <p class="max-w-md mx-auto mt-5 text-lg text-gray-500 lg:max-w-none lg:text-xl sm:text-center">Pilih paket berlangganan robot trading yang sesuai dengan jenis akun trading dan strategi yang kamu inginkan.</p>

    </div>

    @include('theme::partials.plans')
</div>


@endsection