<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $result = DB::table('users')->get();
        $data['result'] = $result;
        $data['no'] = 1;
        return view('users.index', $data);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        if ($input) {
            return redirect('users');
        } else {
            return redirect('users/create');
        }
    }
    public function edit($id){
        $data['users'] = DB::table('users')->where('id',$id)->first();
        return view('users.edit',$data);
    }

    public function update(Request $request,$id)
    {
        if($request->password == Null ){
            $update = DB::table('users')->where('id',$id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
            ]);
        }else{
            $update = DB::table('users')->where('id',$id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
        }
        if($update){
            return redirect('users');
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $delete = User::where('id',$id)->delete();
        return redirect('users');
    }
}
