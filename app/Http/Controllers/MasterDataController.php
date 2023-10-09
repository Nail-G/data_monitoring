<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MasterData;
use Illuminate\Http\Request;
use App\Models\UserManagement;
use App\Exports\Event_LogExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserManagementExport;

class MasterDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $searchTerm = $request->input('search');
    $query = MasterData::query();

    if ($searchTerm) {
        $query->where('id_satuan_kerja', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('kode_cabang', 'LIKE', '%' . $searchTerm . '%');
    }

    $masterData = $query->get();

    return view('admin.eventlog', ['masterData' => $masterData, 'request' => $request]);
}

    
    

    public function indexusertbl(Request $request)//ini index table usermanagement di admin
    {

        if($request->has('cari')){
            $usertbl = User::where(function($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->cari . '%')
                      ->orWhere('email', 'LIKE', '%' . $request->cari . '%');
            })->get();
        }else{
            $usertbl = User::all();

            // $usertbl = User::onlyTrashed()->get(); //hanya menampilkan data yang di hapus soft delets

            // $usertbl = User::withTrashed()->get(); //untuk nampilin kembali semua data yang sudah di hapus soft deletes
            
            // $usertbl = User::where('role', 'user')->get(); // Mengambil semua data table user dengan peran 'user'
        }

        
        return view('admin.usermanagement', ['usertbl' => $usertbl, 'request' => $request]);
    }

    public function indec(Request $request)//ini index table event_log di user
    {

        if($request->has('carii')){
            $masterData = MasterData::where(function($query) use ($request) {
                $query->where('id_satuan_kerja', 'LIKE', '%' . $request->carii . '%')
                      ->orWhere('kode_cabang', 'LIKE', '%' . $request->carii . '%');
            })->get(); // Menambahkan metode get() untuk mengeksekusi query
        }else{
            $masterData = MasterData::all(); // Mengambil semua data table event_log
        }

        return view('user.eventlog', ['masterData' => $masterData, 'request' => $request]);
    }

    public function indexdash() //ini untuk menampilkan statistik data di admin
    {
        $users = User::all();
        // $users = User::where('role', 'user')->get(); // Mengambil semua data table user dengan peran 'user'
        $event_log = MasterData::all(); // Mengambil semua data pengguna dari tabel event_log

        return view('admin.dashboardadmin', [
            'users' => $users,
            'event_log' => $event_log,
    ]);
    }

    public function indexdashu()//ini untuk menampilkan statistik data di user
    {
        $event_log = MasterData::all(); // Mengambil semua data pengguna dari tabel event_log

        return view('user.dashboarduser', [
            'event_log' => $event_log,
    ]);
    }

    public function eventlogexport()
{
    $currentDateTime = now()->format('Y-m-d');
    $fileName = 'data_event_Log_ ' . $currentDateTime . '.xlsx';

    return Excel::download(new Event_LogExport(), $fileName);
}

public function usermanagementexport()
{
    $currentDateTime = now()->format('Y-m-d');
    $fileName = 'data_user ' . $currentDateTime . '.xlsx';

    return Excel::download(new UserManagementExport(), $fileName);
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()//buat akun user di admin
    {
        $usertbl = User::all();
        return view('admin.createuser'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//untuk memvalidasi data user yg dibuat oleh admin
    {
        $validatedData = $request->validate([
            'name' => 'required', 
            'email'  => 'required',
            'password'  => 'required',
            'role' => 'required',
        ]);
    
        User::create($validatedData);
    
        return redirect('/usermanagement')->with('success', 'Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edituser(string $id) //edit usermanagement di admin
    {
        $usertbl = User::findOrFail($id);

        return view('admin.editusermanagement', ['usertbl' => $usertbl]);

    }

    public function changepassword(Request $request)
    {
        return view('user.changepassword',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function updateuser(Request $request, string $id)//update usermanagement di admin
    {
        $request->validate([
            'name' => 'required', 
            'email'  => 'required',
            'password'  => 'required',
            'role'  => 'required',
        ]);


        $usertbl = User::findOrFail($id);
        $input = $request->all();
        $usertbl->update($input);
    
        return redirect('/usermanagement')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function updatepassword(Request $request)
    {
        // Validasi data yang dikirimkan melalui formulir
        $request->validate([
            'password' => 'required',
        ]);
    
        // Ambil pengguna yang sedang masuk
        $user = $request->user();
        $input = $request->all();
        $user->update([
            'password' => bcrypt($input['password']),
        ]);
    
        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect('/dashboarduser')->with('success', 'Kata sandi berhasil diperbarui');
    }
    
    
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroyuser(string $id)//delete usermanagement di admin
    {
        $usertbl = User::findOrFail($id);
        $usertbl->delete();

        return redirect('/usermanagement')
      ->with('toast_success','user data deleted successfully');
    }
}