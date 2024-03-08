<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\AssignOp\Mod;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index')->with('user', User::all());
    }

    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',

        ]);

        $model = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'password' => bcrypt($request->password)
        ]);
        return redirect()
        ->route('user.index');
    }

    public function edit(string $id)
    {
        $model = User::findOrFail($id);
        return view('user.edit')->with('user', $model);
    }

    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'role' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'password' => 'nullable',
        ]);
        $model = User::findOrFail($id);
        if ($requestData['password'] == ""){
            unset($requestData['password']);
        }else{
            $requestData['password'] = Hash::make($requestData['password']);
        }
        $model->fill($requestData);
        $model->save();
        return redirect()
            ->route('user.index');
    }
    public function show()
    {
        //
    }

    public function destroy(string $id)
    {
        $model = User::findOrFail($id);
        $model->delete();
        return redirect()->back();
    }
}
