<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\Models\products;
use App\Models\Role;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    /*public function show()
    {
        $data = ['name'=>'furqan'];
        $data['users'] = User::all();
        return view('users.users', $data);
    }*/
public function index()
    {
        //
        $products = products::all();
        return view('products', $products);
    }

    public function create(User $user)
    {
        $user['roles'] = Role::all();
        $user['user'] = User::all();
        $user['statuses'] = ['InActive', 'Active'];
        return view('users.create', $user);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'role_id' => 'required'
        ]);
        $data = $request->all();
        $data['role_id'] = $request['role_id'];
        $data['is_active'] = $request['status'];
        $data['password'] = $request['password'];
        User::create($data);

        return redirect()->route('users')
            ->with('success','User created successfully.');
    }


    public function show(User $user)
    {
        $user['users'] = User::all();
//        return view('users.show',compact('user'));
        return view('users.users', $user);
    }

    public function edit(int $id)
    {
        $user['user'] = User::find($id);
        $user['roles'] = Role::all();
        $user['statuses'] = ['InActive', 'Active'];
        return view('users.edit', $user);
    }

    public function view(int $id)
    {
        $user['user'] = User::find($id);
        $user['roles'] = Role::all();
        $user['statuses'] = ['InActive', 'Active'];
        return view('users.view', $user);
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'role_id' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_active = $request->status;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users')
            ->with('success','User updated successfully');
    }


    public function destroy(User $user, int $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')
            ->with('success','User deleted successfully');
    }


}
