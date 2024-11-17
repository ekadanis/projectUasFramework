<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
class soalController extends Controller
{
    public function index(){
        $soals = Soal::all();
        return view('soal.index', compact('soals'));
    }

    public function create(){
        return view('soal.index');
    }

    public function store(Request $request){
        $request->validate([
            'soal'=> 'required|string',
            'id_ujian' => 'required|exist:ujian,id',
        ]);

        soal::create($request->all());
        
        if($request){
            return redirect()->route('soal.index')->with('true', 'soal berhasil ditambahkan');
        }return redirect()->route('soal.index')->with('false', 'soal gagal ditambahkan');
    }

    public function show(Soal $soal){
        return view('soal.show', compact('soal'));
    }

    public function edit(Soal $soal){
        return view('soal.edit', compact('soal'));
    }

    public function update(Request $request, Soal $soal){
        $request->validate([
            'soal'=> 'sometimes|string',
            'id_ujian' => 'sometimes|exist:ujian,id',
        ]);

        soal::create($request->all());
        
        if($request){
            return redirect()->route('soal.index')->with('true', 'soal berhasil diupdate');
        }return redirect()->route('soal.index')->with('false', 'soal gagal diupdate');
    }

    public function destroy(Soal $soal)
    {
        // Menghapus soal dari database
        $soal->delete();

        // Redirect ke halaman daftar soal setelah berhasil
        return redirect()->route('soal.index')->with('success', 'Soal berhasil dihapus');
    }
}
