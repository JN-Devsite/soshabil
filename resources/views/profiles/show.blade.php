<x-app>
    <div>
        <header class="mb-2">
            <div class="rounded-lg md:mx-5 overflow-hidden relative inline-block">
                <div class="md:flex items-center md:justify-between bg-black bg-opacity-50 z-20 absolute w-full">
                    <div class="m-1">
                        <h3 class="font-bold uppercase">{{ $user->name }}</h3>
                        <p class="text-xs mb-2">Joined: {{ $user->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="m-2">
                        <a href="" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1">Edit Profile</a>
                        <a href="" class="sosha-bgcolor rounded-md uppercase font-bold text-sm p-2 mb-1">Follow</a>
                    </div>
                </div>

                <img src="{{ $user->avatar }}" class="rounded-full mr-2 border-white border-2 z-30 absolute profile-avatar" alt="{{ $user->name }}">

                <img src="/gfx/profile.jpg" alt="{{ $user->name }}" class="w-full z-10">

                <div class="text-sm bg-black p-3 text-center">
                    Fusce lacinia finibus sapien, ac fringilla tortor cursus id. Suspendisse fringilla nisl id libero pellentesque pulvinar. Vestibulum turpis eros, tincidunt non ultricies a, vulputate vel enim. Quisque fermentum aliquet vestibulum. In hac habitasse platea dictumst. Suspendisse eros est, aliquam id sapien id, maximus placerat lectus. Nulla vitae suscipit nulla. Integer aliquet, orci sit amet luctus vestibulum, lorem enim congue ipsum, non lobortis massa magna nec nisi.
                </div>
            </div>
        </header>

        @include('timeline', ['soshalCalls' => $user->soshals])
    </div>
</x-app>
