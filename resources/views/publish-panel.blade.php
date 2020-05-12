<div class="border-4 border-dashed border-white rounded-lg p-2 md:mx-5 mb-5">
    <form action="/soshals" method="post">
        <div class="mb-2 rounded-md w-full bg-black bg-opacity-50 border-white rounded-md border-2 p-1 flex items-center">
            <div class="mr-2">
                <img src="{{ auth()->user()->avatar }}" class="rounded-full mr-2 border-white border-2 avatar-40" alt="{{ auth()->user()->name }}">
            </div>
            <div class="">
                <h3 class="font-bold uppercase"> Make a Soshalcall</h3>
            </div>

        </div>

        @error('body')
        <div class="mb-2 rounded-md sosha-bgcolor w-full rounded-lg mb-1 text-center font-bold text-xs">
            {{ $message }}
        </div>
        @enderror

        <textarea name="body" rows="5" class="w-full bg-transparent border-white rounded-md border-2 mb-1" placeholder="Type a message"></textarea>

        @csrf
        <button type="submit" name="button" class="sosha-bgcolor rounded-md w-full uppercase font-bold py-1">Soshalize</button>
    </form>
</div>
