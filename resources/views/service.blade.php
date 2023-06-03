@extends('layouts.guest')

@section('guest-content')

    @if (Route::is('service.datas'))
        @include('parties.service_details')
    @else
        @include('parties.services')
    @endif

@endsection
