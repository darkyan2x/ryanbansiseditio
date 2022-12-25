<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /* Get user roles */
    public function roles($id) {
        $users = User::find($id)->get();
        $roles = array();
        foreach($users as $user) {
            $roles = $user->roles;
        }

        return response()->json([
            'status' => true,
            'roles' => $roles,
         ]);
    }

    /* Get user facilities */
    public function facilities($id) {
        $users = User::find($id)->get();
        $facilities = array();
        foreach($users as $user) {
            $facilities = $user->facilities;
        }

        return response()->json([
            'status' => true,
            'facilities' => $facilities,
         ]);
    }
}
