<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        return view('admin.user.create', compact('user'));
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());

        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
}
