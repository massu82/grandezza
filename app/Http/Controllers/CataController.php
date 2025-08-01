<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Cata;
use App\Mail\ConfirmacionRegistroCata;
use App\Mail\NotificarAdminCata;
use Illuminate\Support\Facades\DB;

class CataController extends Controller
{
    public function index()
    {
        $catas = Cata::withCount('registros')->get();
        return view('catas.index', compact('catas'));
    }

    public function fest()
    {
        return view('fest-test');
    }

    public function gracias()
    {
        return view('pages.gracias');
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

    // Obtén todos los registros agrupados por fecha_hora y salón
    public function registrosAgrupados()
    {
        $registros = DB::table('registro_catas')
            ->join('catas', 'registro_catas.cata_id', '=', 'catas.id')
            ->select('registro_catas.*', 'catas.fecha_hora', 'catas.salon', 'catas.titulo', 'catas.expositor', 'catas.capacidad')
            ->orderBy('catas.fecha_hora')
            ->orderBy('catas.salon')
            ->get()
            ->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->fecha_hora)->format('H:i') . ' horas, salón: ' . $item->salon . ', expone ' . $item->expositor . ', Capacidad; ' . $item->capacidad . ' personas';
            });

        return view('catas.salon', compact('registros'));
    }
    public function registrosAgrupadosAdmin()
    {
        $registros = DB::table('registro_catas')
            ->join('catas', 'registro_catas.cata_id', '=', 'catas.id')
            ->select('registro_catas.*', 'catas.fecha_hora', 'catas.salon', 'catas.titulo', 'catas.expositor', 'catas.capacidad')
            ->orderBy('catas.fecha_hora')
            ->orderBy('catas.salon')
            ->get()
            ->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->fecha_hora)->format('H:i') . ' horas, salón: ' . $item->salon . ', expone ' . $item->expositor . ', Capacidad; ' . $item->capacidad . ' personas';
            });

        return view('catas.admin', compact('registros'));
    }

    public function destroy($id)
    {
        $registro = DB::table('registro_catas')->where('id', $id)->first();
        if ($registro) {
            DB::table('registro_catas')->where('id', $id)->delete();
            return back()->with('success', 'Registro eliminado correctamente.');
        }
        return back()->with('error', 'Registro no encontrado.');
    }

}
