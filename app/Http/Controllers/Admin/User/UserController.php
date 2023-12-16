<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = User::all();
         return view('Admin.Pages.User.index' ,compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Pages.User.add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user_data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storePubliclyAs('public', $imageName);
            $user_data['image'] = $imageName;
        }
        $users =  User::create($user_data);
        return redirect()->route('users.index',compact('users'))->with('message','User Added  Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('Admin.Pages.User.show' ,compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('Admin.Pages.User.edit_user' ,compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user_data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storePubliclyAs('public', $imageName);
            $user_data['image'] = $imageName;
        }
        $user->update($user_data);
        return redirect()->route('users.index')->with('message','User Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('delete','User deleted Successfully');;
    }
}
