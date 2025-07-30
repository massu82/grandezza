<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Cata;
use App\Mail\ConfirmacionRegistroCata;
use App\Mail\NotificarAdminCata;

class CataController extends Controller
{
    public function index()
    {
        $catas = Cata::withCount('registros')->get();
        return view('catas.index', compact('catas'));
    }

    public function form(Cata $cata)
    {
        $registroCount = $cata->registros()->count();
        if ($registroCount >= $cata->capacidad) {
            return redirect()->route('catas')->with('error', 'Esta cata ya está llena.');
        }
        return view('catas.form', compact('cata'));
    }

    public function registrar(Request $request, Cata $cata)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:' . $cata->registros()->getModel()->getTable() . ',correo',
            'telefono' => 'nullable'
        ]);

        $registroCount = $cata->registros()->count();
        if ($registroCount >= $cata->capacidad) {
            return back()->with('error', 'Esta cata ya está llena.');
        }

        $registro = $cata->registros()->create($request->only('nombre', 'correo', 'telefono'));

        if (!empty($registro->correo)) {
            Mail::to($registro->correo)->send(new ConfirmacionRegistroCata($cata, $registro));
        }
        $adminEmail = config('app.admin_email');
        if (!empty($adminEmail)) {
            Mail::to($adminEmail)->send(new NotificarAdminCata($cata, $registro));
        }

        return redirect()->route('catas')->with('success', 'Registro exitoso. Revisa tu correo.');
    }
}
