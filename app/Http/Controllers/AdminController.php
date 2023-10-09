<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MasterData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        $users = User::all();
        // $users = User::where('role', 'user')->get(); // Mengambil semua data table user dengan peran 'user'
        $event_log = MasterData::all(); // Mengambil semua data pengguna dari tabel event_log

        return view('admin.dashboardadmin', [
            'users' => $users,
            'event_log' => $event_log,
    ]);
    }
   
}
