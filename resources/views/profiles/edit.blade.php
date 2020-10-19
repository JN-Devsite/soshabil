<x-app>
    <form method="post" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-2 rounded-md w-full bg-black bg-opacity-50 border-white rounded-md border-2">
            <div class="w-full p-1 flex items-center">
                <label for="name" class="font-bold uppercase mx-1 w-48 text-sm">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1" required>
            </div>
            <div class="w-full p-1 flex items-center">
                <label for="username" class="font-bold uppercase mx-1 w-48 text-sm">User Name</label>
                <input type="text" name="username" id="username" value="{{ $user->username }}" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1" required>
            </div>
            <div class="w-full p-1 flex items-center">
                <label for="avatar" class="font-bold uppercase mx-1 w-48 text-sm">Avatar</label>
                <input type="file" name="avatar" id="avatar" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1">
            </div>
            <div class="w-full p-1 flex items-center">
                <label for="email" class="font-bold uppercase mx-1 w-48 text-sm">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1" required>
            </div>
            <div class="w-full p-1 flex items-center">
                <label for="password" class="font-bold uppercase mx-1 w-48 text-sm">Password</label>
                <input type="password" name="password" id="password" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1">
            </div>
            <div class="w-full p-1 flex items-center">
                <label for="password_confirmation" class="font-bold uppercase mx-1 w-48 text-sm">Retype Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="bg-transparent border-white rounded-md border-2 mx-1 w-full px-1">
            </div>

            <div class="w-full p-1 flex items-center">
            <button type="submit" name="button" class="sosha-bgcolor rounded-md w-full uppercase font-bold py-1 m-1">Submit</button>
            </div>
                

            
        </div>
    </form>
</x-app>
