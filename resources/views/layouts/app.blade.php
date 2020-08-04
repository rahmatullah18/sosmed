@extends('layouts.base')

@section('body')
    @include('layouts.partials.navbar')
    <div class="py-6">
        @yield('content')
    </div>
@endsection
