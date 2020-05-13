<x-master>
    <section class="px-10 py-2">
        <main class="container mx-auto">
            <div class="md:flex md:justify-between">
                @if(auth()->check())
                <div class="md:w-1/7">
                    @include('sidebar-links')
                </div>
                @endif
                <div class="flex-1 soshalbox">
                    {{ $slot }}
                </div>
                @if(auth()->check())
                <div class="md:w-1/6">
                    @include('friend-list')
                </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
