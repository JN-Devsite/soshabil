<h3 class="font-bold text-sm mb-1 uppercase mb-4">Friends</h3>
<ul>
    @foreach(range(1, 8) as $index)
    <li>
        <div class="flex items-center text-sm mb-2">
            <img src="https://i.pravatar.cc/40" class="rounded-full mr-2 border-white border-2" alt="">
            Steve Rogers
        </div>
    </li>
    @endforeach
</ul>
{{-- https://robohash.org/YZ6.png?set=set1 --}}
