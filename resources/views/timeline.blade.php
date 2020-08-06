@extends('layouts.app', ['title' => 'your timeline'])

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2">
            <livewire:status.create>
            <livewire:status.index>
        </div>
    </div>
</div>
@endsection
