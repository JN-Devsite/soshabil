@php
$strCnt = 255;
$strBody = strlen($soshalCall->body) > $strCnt ? substr($soshalCall->body, 0, $strCnt) . "..." : $soshalCall->body;
@endphp
<div class="flex">
    <div class="mr-1 flex-shrink-0">
        <a href="{{ route('profile', $soshalCall->user) }}"><img src="{{ $soshalCall->user->avatar}}" class="rounded-full mr-2 border-white border-2 avatar-60" alt=""></a>
    </div>
    <div class="">
        <h4 class="font-bold"><a href="{{ route('profile', $soshalCall->user) }}">{{ $soshalCall->user->name}}</a></h4>
        <p class="text-sm">
            {{ $strBody }}
        </p>
    </div>
</div>
<hr class=" {{ $loop->last ? 'border-0' : 'my-2 border-dashed border-1' }}">
