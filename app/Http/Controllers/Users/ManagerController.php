<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function settingsIndex()
    {
        $user = auth()->user();

        return view('users.settings.settings', compact('user'));
    }

    public function showCredentials()
    {
        $user = auth()->user();

        return view('users.settings.credentials', compact('user'));
    }
}
