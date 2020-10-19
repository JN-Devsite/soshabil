@unless(current_user()->is($user))
<form class="inline-block" action="/profiles/{{ $user->name }}/follow" method="post">
    @csrf
    <button type="submit" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1">{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
</form>
@endunless
