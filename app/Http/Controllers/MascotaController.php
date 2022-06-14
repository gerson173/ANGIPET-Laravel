<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{

    public function index()
    {
        $id = Auth::id();
     

        $mascotas = Mascota::where('dueño', 'LIKE', $id)->get();
        
        return view('mascota.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascota.create');
    } 

    public function store(Request $request)
    {
        Mascota::create($request->only('name', 'tipo', 'raza', 'color', 'age')
            + [
                'dueño' => auth()->user()->id,
            ]);
        return redirect()->back()->with('success', 'Mascota registrada');
    }

    public function show(Mascota $mascota)
    {
        //$mascota = Mascota::findOrFail($id);
        //dd($mascota);
        return view('mascota.show', compact('mascota'));
    }
}
