<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()), 404); //current_user - helper function
        // $this->authorize('edit', $user);     // 'edit' - UserPolicy policy

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => [
                'string', 
                'required', 
                'max:255'
            ], 
            'username' => [
                'string', 
                'required', 
                'alpha_dash', 
                'max:255', 
                Rule::unique('users')->ignore($user)
            ], 
            'email' => [
                'string', 
                'required', 
                'email', 
                'max:255', 
                Rule::unique('users')->ignore($user)
            ], 
            'password' => [
                'string', 
                'min:8', 
                'max:255', 
                'confirmed']
        ]);

        $user->update($attributes);

        return redirect($user->path());
    }
}
