<?php

namespace App\Http\Controllers;

use App\Models\MasterData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $event_log = MasterData::all(); // Mengambil semua data pengguna dari tabel event_log

        return view('user.dashboarduser', [
            'event_log' => $event_log,
    ]);
    }
}
