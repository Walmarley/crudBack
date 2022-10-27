<?php

namespace App\Http\Controllers;

use App\Models\userList;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function listagem(Request $request)
    {
        $ListUser = userList::all();

        return response()->json($ListUser);
    }

    public function adicionar(Request $request)
    {
        $newuser = new userList();

        $newuser->name = $request->name;
        $newuser->email = $request->email;
        $newuser->save();

        return response()->json('success');
    }

    public function editar(userList $user, Request $request)
    {
        return response()->json($user);
    }

    public function update(userList $user, Request $request)
    {

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json('success');
    }

    public function delete(userList $user, Request $request)
    {
        $user->delete();
        return response()->json('success');
    }

}
