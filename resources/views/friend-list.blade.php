<h3 class="font-bold text-sm mb-1 uppercase mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
    <li>
        <div class="flex items-center text-sm mb-2">
            <a href="{{ route('profile', $user) }}"><img src="{{ $user->avatar }}" class="rounded-full mr-2 border-white border-2 avatar-40" alt=""></a>
            <a href="{{ route('profile', $user) }}">{{ $user->name }}</a>
        </div>
    </li>
    @endforeach
</ul>
{{-- https://robohash.org/YZ6.png?set=set1 --}}
