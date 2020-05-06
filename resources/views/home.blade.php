@extends('layouts.app')

@section('content')
<div class="md:flex md:justify-between">
    <div class="md:w-1/7">
        @include('sidebar-links')
    </div>
    <div class="flex-1 soshalbox">
        @include('publish-panel')

        <div class="mb-2 rounded-md bg-black bg-opacity-25 border-white rounded-lg p-2 md:mx-5">
            <div class="mb-2 rounded-md w-full bg-black bg-opacity-50 p-1">
                <h3 class="uppercase font-bold">Soshalcalls</h3>
            </div>
            @foreach($soshalCalls as $soshalCall)
                @include('soshalcalls')
            @endforeach
        </div>
    </div>
    <div class="md:w-1/6">
        @include('friend-list')
    </div>
</div>
@endsection
