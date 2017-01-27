<?php

namespace App\Http\Controllers;

use App\Entities\Evaluation;
use App\Entities\Year;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class YearController extends Controller
{
    public function getGestiones()
    {
        $usuario = Auth::user();
        $gestiones = Year::all();

        return view('gestiones.gestiones', compact('usuario', 'gestiones'));
    }

    public function getAgregarGestion()
    {
        $usuario = Auth::user();

        return view('gestiones.agregarGestion', compact('usuario'));
    }

    public function postAgregarGestion(Request $request)
    {
        $rules = [
            'year' => 'required|numeric|min:1990|unique:years,year'
        ];

        $this->validate($request, $rules);

        $gestion = new Year;
        $gestion->year = $request->year;
        $gestion->save();

        $anio_ev = $gestion->id;

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1121';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1122';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1131';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1141';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1151';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1152';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1161';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1211';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1212';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1221';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1231';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1311';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1321';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2121';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2122';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2123';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2124';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2125';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2211';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2212';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2213';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2221';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2222';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2223';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2224';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2231';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2232';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2233';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2234';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2235';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2236';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '23111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '23112';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2321';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2331';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2332';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2411';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2412';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2413';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2414';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2415';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2421';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2422';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2423';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2431';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2432';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3121';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3122';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3131';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3132';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3133';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3134';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3135';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3136';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3141';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3142';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3143';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3211';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3212';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '33111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '33112';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '33113';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3312';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3313';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3314';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3315';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3321';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3322';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3323';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3324';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3325';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3326';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3327';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3328';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3411';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3412';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3421';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3422';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3423';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3431';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4121';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4122';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4123';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4211';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4212';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4213';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4221';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4311';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4312';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4313';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4321';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4331';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4341';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '111';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '112';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '113';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '114';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '115';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '116';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '121';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '122';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '123';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '131';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '132';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '211';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '212';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '221';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '222';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '223';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '231';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '232';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '233';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '241';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '242';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '243';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '311';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '312';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '313';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '314';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '321';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '331';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '332';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '341';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '342';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '343';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '411';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '412';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '421';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '422';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '431';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '432';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '433';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '434';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '11';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '12';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '13';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '21';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '22';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '23';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '24';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '31';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '32';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '33';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '34';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '41';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '42';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '43';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '1';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '2';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '3';
        $evaluacion->nota = 3;
        $evaluacion->save();

        $evaluacion = new Evaluation;
        $evaluacion->year_id = $anio_ev;
        $evaluacion->punto = '4';
        $evaluacion->nota = 3;
        $evaluacion->save();

        Alert::message('Gestión: ' . $gestion->year . ' creado exitósamente', 'success');

        return redirect()->route('getGestiones');
    }
}
