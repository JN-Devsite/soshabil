<div class="mb-2 rounded-md bg-black bg-opacity-25 border-white rounded-lg p-2 md:mx-5 mb-2">
    <div class="mb-2 rounded-md w-full bg-black bg-opacity-50 p-1">
        <h3 class="uppercase font-bold">Soshalcalls</h3>
    </div>
    @foreach($soshalCalls as $soshalCall)
        @include('soshalcalls')
    @endforeach
</div>
