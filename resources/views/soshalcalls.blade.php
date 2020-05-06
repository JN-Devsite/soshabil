@php
$strCnt = 255;
$strBody = strlen($soshalCall->body) > $strCnt ? substr($soshalCall->body, 0, $strCnt) . "..." : $soshalCall->body;
@endphp
<div class="flex">
    <div class="mr-1 flex-shrink-0">
        <img src="{{ $soshalCall->user->avatar}}" class="rounded-full mr-2 border-white border-2" alt="">
    </div>
    <div class="">
        <h4 class="font-bold">{{ $soshalCall->user->name}}</h4>
        <p class="text-sm">
            {{ $strBody }}
        </p>
    </div>
</div>
<hr class="my-2 border-dashed border-1">
