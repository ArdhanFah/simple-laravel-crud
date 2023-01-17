<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Mahasiswa::where('names','LIKE','%' . $request->search . '%')->paginate(5);
        }else{
            $data = Mahasiswa::paginate(5);
        }
            return view('Mahasiswa.home',compact('data'));
    }

    public function create(){
        return view('Mahasiswa.create');
    }

    public function store(Request $request){
        $data = Mahasiswa::create($request->all());
        return redirect()->route('Mahasiswa.index');
    }

    public function show($id){
        $data = Mahasiswa::find($id);
        return view('Mahasiswa.detail',compact('data'));
    }

    public function edit($id){
        $data = Mahasiswa::find($id);
        return view('Mahasiswa.update',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('Mahasiswa.index');
    }

    public function destroy($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('Mahasiswa.index');
    }
}
