<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($role, Request $request, User $userModel)
    {
        $users = $userModel->search($role, $request);
        return ['results' => $users];
    }
}
