<?php

namespace App\Http\Controllers;

use App\Entities\Evaluation;
use App\Entities\Year;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class AutoevaluacionController extends Controller
{
    public function getAutoevaluar()
    {
        $usuario = Auth::user();

        return view('autoevaluacion.autoevaluar', compact('usuario'));
    }

    public function getAutoevaluacion($id)
    {
        $usuario = Auth::user();

        $anio_ev = Year::findOrFail($id);
        $anio_ev = $anio_ev->year;

        $evaluaciones = Evaluation::where('year_id', $id)
            ->lists('nota', 'punto');

        return view('autoevaluacion.autoevaluaciones', compact('usuario', 'anio_ev', 'evaluaciones'));
    }

    public function getEditarEvaluacion($id)
    {
        $usuario = Auth::user();

        $anio_ev = Year::findOrFail($id);
        $anio_ev = $anio_ev->year;

        $notas = [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
        ];

        $evaluaciones = Evaluation::where('year_id', $id)
            ->lists('nota', 'punto');

        return view('autoevaluacion.editarAutoevaluacion', compact(
            'usuario', 'anio_ev', 'evaluaciones', 'notas'
        ));
    }

    public function postEditarEvaluacion(Request $request)
    {
        $pruebas = $request->all();

        $e111 = $pruebas['1111'];
        $e112 = ($pruebas['1121'] + $pruebas['1122'])/2;
        $e113 = $pruebas['1131'];
        $e114 = $pruebas['1141'];
        $e115 = ($pruebas['1151'] + $pruebas['1152'])/2;
        $e116 = $pruebas['1161'];
        $e11 = ($e111 + $e112 + $e113 + $e114 + $e115 + $e116)/6;

        $e121 = ($pruebas['1211'] + $pruebas['1212'])/2;
        $e122 = $pruebas['1221'];
        $e123 = $pruebas['1231'];
        $e12 = ($e121 + $e122 + $e123)/3;

        $e131 = $pruebas['1311'];
        $e132 = $pruebas['1321'];
        $e13 = ($e131 + $e132)/2;

        $e1 = ($e11 + $e12 + $e13)/3;

        $e211 = $pruebas['2111'];
        $e212 = ($pruebas['2121'] + $pruebas['2122'] + $pruebas['2123'] + $pruebas['2124'] + $pruebas['2125'])/5;
        $e21 = ($e211 + $e212)/2;

        $e221 = ($pruebas['2211'] + $pruebas['2212'] + $pruebas['2213'])/3;
        $e222 = ($pruebas['2221'] + $pruebas['2222'] + $pruebas['2223'] + $pruebas['2224'])/4;
        $e223 = ($pruebas['2231'] + $pruebas['2232'] + $pruebas['2233'] + $pruebas['2234'] + $pruebas['2235'] + $pruebas['2236'])/6;
        $e22 = ($e221 + $e222 + $e223)/3;

        $e231 = ($pruebas['23111'] + $pruebas['23112'])/2;
        $e232 = $pruebas['2321'];
        $e233 = ($pruebas['2331'] + $pruebas['2332'])/2;
        $e23 = ($e231 + $e232 + $e233)/3;

        $e241 = ($pruebas['2411'] + $pruebas['2412'] + $pruebas['2413'] + $pruebas['2414'] + $pruebas['2415'])/5;
        $e242 = ($pruebas['2421'] + $pruebas['2422'] + $pruebas['2423'])/3;
        $e243 = ($pruebas['2431'] + $pruebas['2432'])/2;
        $e24 = ($e241 + $e242 + $e243)/3;

        $e2 = ($e21 + $e22 + $e23 + $e24)/4;

        $e311 = $pruebas['3111'];
        $e312 = ($pruebas['3121'] + $pruebas['3122'])/2;
        $e313 = ($pruebas['3131'] + $pruebas['3132'] + $pruebas['3133'] + $pruebas['3134'] + $pruebas['3135'])/5;
        $e314 = ($pruebas['3141'] + $pruebas['3142'] + $pruebas['3143'])/3;
        $e31 = ($e311 + $e312 + $e313 + $e314)/4;

        $e321 = ($pruebas['3211'] + $pruebas['3212'])/2;
        $e32 = $e321;

        $e331 = ((($pruebas['33111'] + $pruebas['33112'] + $pruebas['33113'])/3) + $pruebas['3312'] + $pruebas['3313'] + $pruebas['3314'] + $pruebas['3315'])/5;
        $e332 = ($pruebas['3321'] + $pruebas['3322'] + $pruebas['3323'] + $pruebas['3324'] + $pruebas['3325'] + $pruebas['3326'] + $pruebas['3327'] + $pruebas['3328'])/8;
        $e33 = ($e331 + $e332)/2;

        $e341 = ($pruebas['3411'] + $pruebas['3412'])/2;
        $e342 = ($pruebas['3421'] + $pruebas['3422'] + $pruebas['3423'])/3;
        $e343 = $pruebas['3431'];
        $e34 = ($e341 + $e342 + $e343)/3;

        $e3 = ($e31 + $e32 + $e33 + $e34)/4;

        $e411 = $pruebas['4111'];
        $e412 = ($pruebas['4121'] + $pruebas['4122'] + $pruebas['4123'])/3;
        $e41 = ($e411 + $e412)/2;

        $e421 = ($pruebas['4211'] + $pruebas['4212'] + $pruebas['4213'])/3;
        $e422 = $pruebas['4221'];
        $e42 = ($e421 + $e422)/2;

        $e431 = ($pruebas['4311'] + $pruebas['4312'] + $pruebas['4313'])/3;
        $e432 = $pruebas['4321'];
        $e433 = $pruebas['4331'];
        $e434 = $pruebas['4341'];
        $e43 = ($e431 + $e432 + $e433 + $e434)/4;

        $e4 = ($e41 + $e42 + $e43)/3;

        $anio_ev = Year::where('year', $pruebas['anio_ev'])->first();
        $anio_ev = $anio_ev->id;

        //e1
        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1')
            ->update(['nota' => $e1]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2')
            ->update(['nota' => $e2]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3')
            ->update(['nota' => $e3]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4')
            ->update(['nota' => $e4]);


        //e11
        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '11')
            ->update(['nota' => $e11]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '12')
            ->update(['nota' => $e12]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '13')
            ->update(['nota' => $e13]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '21')
            ->update(['nota' => $e21]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '22')
            ->update(['nota' => $e22]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '23')
            ->update(['nota' => $e23]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '24')
            ->update(['nota' => $e24]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '31')
            ->update(['nota' => $e31]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '32')
            ->update(['nota' => $e32]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '33')
            ->update(['nota' => $e33]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '34')
            ->update(['nota' => $e34]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '41')
            ->update(['nota' => $e41]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '42')
            ->update(['nota' => $e42]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '43')
            ->update(['nota' => $e43]);


        //e111
        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '111')
            ->update(['nota' => $e111]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '112')
            ->update(['nota' => $e112]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '113')
            ->update(['nota' => $e113]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '114')
            ->update(['nota' => $e114]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '115')
            ->update(['nota' => $e115]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '116')
            ->update(['nota' => $e116]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '121')
            ->update(['nota' => $e121]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '122')
            ->update(['nota' => $e121]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '123')
            ->update(['nota' => $e123]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '131')
            ->update(['nota' => $e131]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '132')
            ->update(['nota' => $e132]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '211')
            ->update(['nota' => $e211]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '212')
            ->update(['nota' => $e212]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '221')
            ->update(['nota' => $e221]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '222')
            ->update(['nota' => $e222]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '223')
            ->update(['nota' => $e223]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '231')
            ->update(['nota' => $e231]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '232')
            ->update(['nota' => $e232]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '233')
            ->update(['nota' => $e233]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '241')
            ->update(['nota' => $e241]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '242')
            ->update(['nota' => $e242]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '243')
            ->update(['nota' => $e243]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '311')
            ->update(['nota' => $e311]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '312')
            ->update(['nota' => $e312]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '313')
            ->update(['nota' => $e313]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '314')
            ->update(['nota' => $e314]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '321')
            ->update(['nota' => $e321]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '331')
            ->update(['nota' => $e331]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '332')
            ->update(['nota' => $e332]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '341')
            ->update(['nota' => $e341]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '342')
            ->update(['nota' => $e342]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '343')
            ->update(['nota' => $e343]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '411')
            ->update(['nota' => $e411]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '412')
            ->update(['nota' => $e412]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '421')
            ->update(['nota' => $e421]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '422')
            ->update(['nota' => $e422]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '431')
            ->update(['nota' => $e431]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '432')
            ->update(['nota' => $e432]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '433')
            ->update(['nota' => $e433]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '434')
            ->update(['nota' => $e434]);

        //e1111
        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1111')
            ->update(['nota' => $pruebas['1111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1121')
            ->update(['nota' => $pruebas['1121']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1122')
            ->update(['nota' => $pruebas['1122']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1131')
            ->update(['nota' => $pruebas['1131']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1141')
            ->update(['nota' => $pruebas['1141']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1151')
            ->update(['nota' => $pruebas['1151']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1152')
            ->update(['nota' => $pruebas['1152']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1161')
            ->update(['nota' => $pruebas['1161']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1211')
            ->update(['nota' => $pruebas['1211']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1212')
            ->update(['nota' => $pruebas['1212']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1221')
            ->update(['nota' => $pruebas['1221']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1231')
            ->update(['nota' => $pruebas['1231']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1311')
            ->update(['nota' => $pruebas['1311']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '1321')
            ->update(['nota' => $pruebas['1321']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2111')
            ->update(['nota' => $pruebas['2111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2121')
            ->update(['nota' => $pruebas['2121']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2122')
            ->update(['nota' => $pruebas['2122']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2123')
            ->update(['nota' => $pruebas['2123']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2124')
            ->update(['nota' => $pruebas['2124']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2125')
            ->update(['nota' => $pruebas['2125']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2211')
            ->update(['nota' => $pruebas['2211']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2212')
            ->update(['nota' => $pruebas['2212']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2213')
            ->update(['nota' => $pruebas['2213']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2221')
            ->update(['nota' => $pruebas['2221']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2222')
            ->update(['nota' => $pruebas['2222']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2223')
            ->update(['nota' => $pruebas['2223']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2224')
            ->update(['nota' => $pruebas['2224']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2231')
            ->update(['nota' => $pruebas['2231']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2232')
            ->update(['nota' => $pruebas['2232']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2233')
            ->update(['nota' => $pruebas['2233']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2234')
            ->update(['nota' => $pruebas['2234']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2235')
            ->update(['nota' => $pruebas['2235']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2236')
            ->update(['nota' => $pruebas['2236']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '23111')
            ->update(['nota' => $pruebas['23111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '23112')
            ->update(['nota' => $pruebas['23112']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2321')
            ->update(['nota' => $pruebas['2321']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2331')
            ->update(['nota' => $pruebas['2331']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2332')
            ->update(['nota' => $pruebas['2332']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2411')
            ->update(['nota' => $pruebas['2411']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2412')
            ->update(['nota' => $pruebas['2412']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2413')
            ->update(['nota' => $pruebas['2413']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2414')
            ->update(['nota' => $pruebas['2414']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2415')
            ->update(['nota' => $pruebas['2415']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2421')
            ->update(['nota' => $pruebas['2421']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2422')
            ->update(['nota' => $pruebas['2422']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2423')
            ->update(['nota' => $pruebas['2423']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2431')
            ->update(['nota' => $pruebas['2431']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '2432')
            ->update(['nota' => $pruebas['2432']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3111')
            ->update(['nota' => $pruebas['3111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3121')
            ->update(['nota' => $pruebas['3121']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3122')
            ->update(['nota' => $pruebas['3122']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3131')
            ->update(['nota' => $pruebas['3131']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3132')
            ->update(['nota' => $pruebas['3132']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3133')
            ->update(['nota' => $pruebas['3133']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3134')
            ->update(['nota' => $pruebas['3134']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3135')
            ->update(['nota' => $pruebas['3135']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3136')
            ->update(['nota' => $pruebas['3136']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3141')
            ->update(['nota' => $pruebas['3141']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3142')
            ->update(['nota' => $pruebas['3142']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3143')
            ->update(['nota' => $pruebas['3142']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3211')
            ->update(['nota' => $pruebas['3211']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3212')
            ->update(['nota' => $pruebas['3212']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '33111')
            ->update(['nota' => $pruebas['33111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '33112')
            ->update(['nota' => $pruebas['33112']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '33113')
            ->update(['nota' => $pruebas['33113']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3312')
            ->update(['nota' => $pruebas['3312']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3313')
            ->update(['nota' => $pruebas['3313']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3314')
            ->update(['nota' => $pruebas['3314']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3315')
            ->update(['nota' => $pruebas['3315']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3321')
            ->update(['nota' => $pruebas['3321']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3322')
            ->update(['nota' => $pruebas['3322']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3323')
            ->update(['nota' => $pruebas['3323']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3324')
            ->update(['nota' => $pruebas['3324']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3325')
            ->update(['nota' => $pruebas['3325']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3326')
            ->update(['nota' => $pruebas['3326']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3327')
            ->update(['nota' => $pruebas['3327']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3328')
            ->update(['nota' => $pruebas['3328']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3411')
            ->update(['nota' => $pruebas['3411']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3412')
            ->update(['nota' => $pruebas['3412']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3421')
            ->update(['nota' => $pruebas['3421']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3422')
            ->update(['nota' => $pruebas['3422']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3423')
            ->update(['nota' => $pruebas['3423']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '3431')
            ->update(['nota' => $pruebas['3431']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4111')
            ->update(['nota' => $pruebas['4111']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4121')
            ->update(['nota' => $pruebas['4121']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4122')
            ->update(['nota' => $pruebas['4122']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4123')
            ->update(['nota' => $pruebas['4123']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4211')
            ->update(['nota' => $pruebas['4211']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4212')
            ->update(['nota' => $pruebas['4212']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4213')
            ->update(['nota' => $pruebas['4213']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4221')
            ->update(['nota' => $pruebas['4221']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4311')
            ->update(['nota' => $pruebas['4311']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4312')
            ->update(['nota' => $pruebas['4312']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4313')
            ->update(['nota' => $pruebas['4313']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4321')
            ->update(['nota' => $pruebas['4321']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4331')
            ->update(['nota' => $pruebas['4331']]);

        Evaluation::where('year_id', $anio_ev)
            ->where('punto', '4341')
            ->update(['nota' => $pruebas['4341']]);

        Alert::message('Autoevaluación actualizada exitósamente', 'success');

        return redirect()->route('getGestiones');
    }

    public function getGrafico($id)
    {
        $usuario = Auth::user();

        $anio_ev = Year::findOrFail($id);
        $anio_ev = $anio_ev->year;

        $notas = Evaluation::where('year_id', $id)
            ->lists('nota', 'punto');

        return view('autoevaluacion.grafico', compact('usuario', 'anio_ev', 'notas'));
    }
}
