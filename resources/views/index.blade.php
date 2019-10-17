@extends('layouts.app')

@section('content')
    <div class="tw-font-heading">
        {{-- <div class="tw-hidden xl:tw-block"> --}}
            @include('pages.ed.desktop')
        {{-- </div> --}}
        {{-- <div class="xl:tw-hidden">
            @include('pages.ed.mobile')
        </div> --}}
    </div>


@endsection
{{-- @include('partials.who-we-are') --}}