@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Gestión de Autoevaluación: {{ $anio_ev }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-title">
                    <h2>1. Contexto Institucional</h2>
                </div>
                <div class="ibox-content" style="display: block">
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">COMPONENTE</th>
                            <th style="text-align: center; vertical-align: middle">PROM (COMP)</th>
                            <th style="text-align: center; vertical-align: middle">CRITERIO</th>
                            <th style="text-align: center; vertical-align: middle">PROM (CRIT)</th>
                            <th style="text-align: center; vertical-align: middle">INDICADORES</th>
                            <th style="text-align: center; vertical-align: middle">VALOR</th>
                            <th style="text-align: center; vertical-align: middle">ESTÁNDARES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="8" style="text-align: justify; vertical-align: middle">1.1 Características del programa y su inserción institucional</td>
                            <td rowspan="8" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['11'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.1 Reconocimiento de la Unidad Académica, según la legislación boliviana (E)</td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['111'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.1.1 Evidencia del reconocimiento (E)</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.1.1 Reconocimiento Oficial</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">1.1.2. Desarrollo del programa en un contexto académico(un ambiente de creacion intelectual que instrumenta docencia, investigación y extensión) (C) </td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['112'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.2.1 Evidencias del ambiente académico general y de la instrumentación de docencia, investigación y extensión universitaria </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1121'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.2.1 El programa esta inserto  en un contexto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.1.2.2 Evidencias del apoyo institucional que recibe el programa(C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1122'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.2.2 El programa recibe apoyo institucional</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.1.3 Existencia de un plan u orientaciones estratégicas académicas en desarrollo  (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['113'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.3.1 Evidencia de la existencia de un plan u orientaciones estratégicas académicas (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1131'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.3.1 Existen orientaciones estratégicas académicas no necesariamente enmarcadas en un plan estratégico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.1.4 Coherencia de la misión, propósitos y objetivos institucionales con los del programa  (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['114'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.4.1 Evidencia de coherencia de la misión, propósito y objetivo institucionales con los del programa  (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1141'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.4.1 Existe coherencia de la misión, propósitos y objetivos institucionales con los del programa</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">1.1.5. Coherencia del comando o División, gestión, administración y de la estructura organizacional de la institución con la del programa  (C)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['115'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.5.1, Evidencia de coherencia entre los estatutos y reglamentos institucionales con los del programa  (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1151'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.5.1 Existe coherencia entre los estatutos y reglamentos institucionales con los del programa</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.1.5.2 Evidencia de coherencia entre los planes operativos anuales institucionales con los del programa (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1152'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.5.2 Existe coherencia entre los planes operativos anuales institucionales con los del programa</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.1.6 Existencia de mecanismos de participación de la comunidad educativa en la reinterpretación y desarrollo del plan o de las orientaciones estratégicas (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['116'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.6.1 Evidencia de la existencia y funcionamiento de mecanismos de participación de la comunidad educativa en la reinterpretación y desarrollo del plan o de las orientaciones estratégicas  (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1161'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.1.6.1 Existe participación de la comunidad educativa en la reinterpretación y desarrollo de las orientaciones estratégicas.</td>
                        </tr>
                        <tr>
                            <td rowspan="4" style="text-align: justify; vertical-align: middle">1.2 Organización, Gobierno, Gestión y Administración del Programa</td>
                            <td rowspan="4" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['12'], 2, '.', ',') }}</td>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">1.2.1 Coherencia entre la organización del Comando o Dirección, gestión y administración del programa con el logro del proyecto académico (E)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['121'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.1.1 Evidencia de coherencia entre los estatutos y reglamentos del programa con el logro del proyecto académico   (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1211'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.1.1 Existe coherencia entre los estatutos o reglamentos del programa con el logro del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.2.1.2 Evidencia de coherencia entre los planes operativos anuales del programa con el logro del proyecto académico  (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1212'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.1.2 Existe disponibilidad de recursos para atender las necesidades operativas del programa.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.2.2 Existencia de Cuerpo reglamentario completo (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['122'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.2.1 Evidencia de cumplimiento del cuerpo reglamentario  (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1221'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.2.1 Se cumple la reglamentación</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.2.3 Coherencia del perfil académico del coordinador del programa (Jefe de la DIAC), con el proyecto académico (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['123'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.3.1 Evidencia del grado de coherencia del perfil del coordinador del programa con el proyecto académico  (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1231'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.2.3.1 Perfil del coordinador del programa (Jefe de la DIAC.) es coherente con el proyecto</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">1.3 Políticas y Programas de bienestar institucional</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['13'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.3.1 Existencia de programas y sistemas de promoción de la cultura en sus diversas expresiones (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['131'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.3.1.1 Evidencia de existencia y funcionamiento de programas y sistemas de promoción de la cultura en sus diversas expresiones (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1311'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.3.1.1 Existen y funcionan programas y sistemas de promoción de la cultura en sus diversas expresiones</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">1.3.2 Existencia de programas y sistemas de bienestar de la comunidad educativa (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['132'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.3.2.1 Evidencia de existencia y funcionamiento de programas y sistemas de bienestar de la comunidad educativa (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['1321'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">1.3.2.1 Existen y funcionan, programas y sistemas de bienestar de la comunidad educativa</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-title">
                    <h2>2. Proyecto Académico</h2>
                </div>
                <div class="ibox-content" style="display: block">
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">COMPONENTE</th>
                            <th style="text-align: center; vertical-align: middle">PROM (COMP)</th>
                            <th style="text-align: center; vertical-align: middle">CRITERIO</th>
                            <th style="text-align: center; vertical-align: middle">PROM (CRIT)</th>
                            <th style="text-align: center; vertical-align: middle">INDICADORES</th>
                            <th style="text-align: center; vertical-align: middle">VALOR</th>
                            <th style="text-align: center; vertical-align: middle">ESTÁNDARES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="6" style="text-align: justify; vertical-align: middle">2.1 Plan de Estudios</td>
                            <td rowspan="6" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['21'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.1 Existencia de un perfil de egreso coherente con el Programa (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['211'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.1.1 Evidencia de la existencia de un perfil de egreso (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.1.1 Existe un perfil de egreso coherente con el programa</td>
                        </tr>
                        <tr>
                            <td rowspan="5" style="text-align: justify; vertical-align: middle">2.1.2 coherencia de la estructura curricular con el logro del perfil de egreso propuesto (E)</td>
                            <td rowspan="5" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['212'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.1 Evidencia que se cubren las principales áreas de estudio de la Ciencia y Arte Militar (o que corresponda) que permiten el logro del perfil de egreso propuesto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2121'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.1 Se cubren las áreas de estudio de la Ciencia y Arte Militar (o que corresponda) que permiten el logro del perfil de egreso propuesto</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.2 Evidencia que la secuencia de las disciplinas, asignaturas o módulos, permiten el logro del perfil de egreso propuesto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2122'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.2 La secuencia de las disciplinas, asignaturas o módulos, permiten el logro del perfil de egreso propuesto.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.3 Evidencia del grado de adecuación entre objetivos, metodologías, contenidos y bibliografía (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2123'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.3 Existe adecuación entre objetivos, metodologías, contenidos y bibliografías, contenidos y bibliografías de las asignaturas</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.4 Evidencia de flexibilidad curricular (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2124'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.4 Existe flexibilidad curricular</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.5 Evidencia de adecuación de la carga horaria del programa con el logro del perfil de egreso propuesto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2125'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.1.2.5 Existe adecuación de la carga horaria de la carrera con el logro del perfil de egreso propuesto. Adecuación corresponde a un mínimo de 3600 horas aula Tec. Superior. 4800 horas aula para licenciatura, 240 horas para Diplomados, 600 horas para Especialidad, 800 horas presenciales para Maestría Académica y 240 para elaboración de tesis</td>
                        </tr>
                        <tr>
                            <td rowspan="13" style="text-align: justify; vertical-align: middle">2.2 Proceso Educativo</td>
                            <td rowspan="13" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['22'], 2, '.', ',') }}</td>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">2.2.1 Coherencia de las metodologías de enseñanza y aprendizaje con el logro (del perfil de egreso propuesto E)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['221'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.1  Evidencia de utilización de herramientas pedagógicas y de tecnologías educativas adecuadas (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2211'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.1 Se utilizan herramientas pedagógicas y tecnológicas educativas adecuadas</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.2 Evidencias de trabajo cooperativo entre docentes y estudiantes (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2212'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.2 Existe trabajo cooperativo entre docentes y estudiantes</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.3 Evidencia de satisfacción de los estudiantes con las metodologías de enseñanza implementadas en el programa (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2213'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.1.3 Las metodologías de enseñanza implementadas en el programa cumplen con las expectativas de los estudiantes</td>
                        </tr>
                        <tr>
                            <td rowspan="4" style="text-align: justify; vertical-align: middle">2.2.2 Coherencia de las actividades educativas con el logro del perfil de egreso propuesto (E)</td>
                            <td rowspan="4" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['222'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.1 Realización de las actividades educativas obligatorias en los últimos cinco años coherentes con el logro del perfil de egreso propuesto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2221'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.1 Se cumple con las actividades educativas obligatorias</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.2 Realización de las actividades educativas complementarias en los últimos cinco años coherentes con el logro del perfil de egreso propuesto (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2222'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.2 Se cumple con las actividades educativas complementarias</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.3 Realización de las actividades educativas multidisciplinarias y/o integradoras tanto horizontal como verticalmente en los cinco años coherentes con el logro del perfil de egreso propuesto (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2223'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.3 se cumple con las actividades educativas  multidisciplinarias y/o integradoras tanto horizontal como verticalmente</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.4 Realización de las actividades educativas en coordinación con el sector de desarrollo en los últimos cinco años coherentes con el logro del perfil de egreso propuesto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2224'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.2.4 Se cumple con las actividades educativas en coordinación con el sector de desarrollo</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="text-align: justify; vertical-align: middle">2.2.3 Sistemas de evaluación (E)</td>
                            <td rowspan="6" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['223'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.1 Evidencia de implementación de sistema de aseguran la realización periódica de autoevaluación del proyecto académico (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2231'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.1. Existencia e implementación de los sistemas de autoevaluación periódica</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.2 Evidencia de implementación de sistema de evaluación de verificación y evaluaciones externas del  proyecto académico (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2232'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.2 Existencia e implementación de sistemas de evaluación de verificación y evaluación externa del proyecto académico.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.3 Evidencia de implementación de sistema de evaluación de las actividades de los docentes (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2233'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.3 Existencia e implementación de los sistemas de evaluación de las actividades de los docentes</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.4 Evidencia de participación  de los docentes en los procesos de evaluación de sus actividades (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2234'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.4. Participación de los docentes en los procesos de evaluación de sus actividades</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.5 Evidencia de implementación de sistemas de evaluación realizados por los estudiantes (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2235'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.5. Existencia e implementación de sistemas de evaluación realizado por los estudiantes</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.6 Evidencia de participación de los estudiantes en los procesos de evaluación (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2236'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.2.3.6. Participación de los estudiantes en los procesos de evaluación</td>
                        </tr>
                        <tr>
                            <td rowspan="5" style="text-align: justify; vertical-align: middle">2.3 Investigación y Producción de Doctrina</td>
                            <td rowspan="5" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['23'], 2, '.', ',') }}</td>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">2.3.1 Coherencia de las actividades de investigación con el proceso de enseñanza y aprendizaje (E)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['231'], 2, '.', ',') }}</td>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">2.3.1.1 Evidencia de la relevancia de los proyectos de investigación con el proceso de enseñanza y aprendizaje: Participación de estudiantes en procesos de investigación. Análisis del impacto de cada proyecto (E)</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['23111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.1.1.1. Los estudiantes participan en proyectos de investigación</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['23112'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.1.1.2 Existe análisis del impacto interno</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.3.2 Coherencia de las actividades de investigación con las necesidades del medio (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['232'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.2.1 Evidencias de la relevancia de los proyectos de investigación para el medio, durante los últimos 5 años - Proyectos de investigación difundidos y/o transferidos-aportes del medio a la doctrina, recursos físicos, financieros, intelectuales o de gestión-Participación de actores externos en los proyectos- concordancia del proyecto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2321'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.2.1 Existe pertenencia de los proyectos de investigación realizados</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">2.3.3 Relevancia de las actividades de investigación: para la seguridad, Defensa, Desarrollo (EAEN) y para el desarrollo de la ciencia y arte Militar y la producción de doctrina (otras UU.AA.) (E)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['233'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.3.1 Evidencia de participación de académicos en proyectos de investigación e implementación de los mismos (en últimos 5 años) (E)  </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2331'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.3.1 Se cumple con la participación de académicos en proyectos de investigación e implementación de los mismos (en los últimos 5 años)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.3.3.2 Evidencias de las participaciones de académicos en la producción de doctrina (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2332'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.3.3.2 Los académicos participan  en la prod. De doctrina</td>
                        </tr>
                        <tr>
                            <td rowspan="10" style="text-align: justify; vertical-align: middle">2.4 Extensión, vinculación y Cooperación</td>
                            <td rowspan="10" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['24'], 2, '.', ',') }}</td>
                            <td rowspan="5" style="text-align: justify; vertical-align: middle">2.4.1 Coherencia de la extensión con el proyecto académico y las necesidades del medio (E)</td>
                            <td rowspan="5" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['241'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.1 Evidencias de proyectos y actividades realizados en los últimos cinco años (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2411'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.1 Existen proyectos  y actividades de extensión desarrollados en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.2 Evidencias de resultados de los principales convenios y actividades de extensión en los últimos cinco años- Concordancia del proyecto-población beneficiada (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2412'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.2. Son relevantes los proyectos y actividades de extensión realizados durante los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.3 Evidencia de participación de estudiantes en proyectos de extensión (número de participantes y modo de participación ) (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2413'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.3 Existe participación de estudiantes en proyectos de extensión</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.4 Evidencia de participación de actores externos en los proyectos de extensión (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2414'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.4. Existe participación de actores externos en los proyectos de extensión </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.5 Otros servicios a la comunidad (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2415'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.1.5 Existe prestación de otros servicios a la comunidad</td>
                        </tr>
                        <tr>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">2.4.2  Coherencia de las actividades de intercambio con el proyecto académico (C)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['242'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.1 Para pregrado: Evidencia de pasantías para docentes y estudiantes en los últimos 5 años (C)                            Para postgrado:  Evidencia de actividades extracurriculares para docentes y estudiantes en los últimos cinco años</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2421'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.1 Existen y funcionan programas de pasantías para docentes y estudiantes en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.2 Evidencias de Actividades realizadas en los últimos cinco años (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2422'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.2 Existen y funcionan actividades de intercambio realizadas en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.3. Evidencia de Convenios para intercambio de recursos humanos, instalaciones y equipos (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2423'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.2.3. Existen y funcionan convenios que han permitido el intercambio de recursos humanos y/o la utilización de instalaciones y equipos en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">2.4.3 Coherencia de las actividades de educación continua con el proyecto académico (C)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['243'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.3.1 Evidencia de Actividades de capacitación y actualización en los últimos 5 años (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2431'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.3.1. Existe oferta continua de actividades de capacitación y actualización en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">2.4.3.2 Evidencias de programas educativos ofrecidos o compartidos con otras instituciones en los últimos 5 años: Número e identificación de los programas acreditados- Relación proporcional docente equivalente / estudiantes-porcentaje de profesores con postgrado- Número de estudiantes incorporados a la investigación y/o extensión - Número de tesis aprobadas- Número de  estudiantes (C)</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['2432'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">2.4.3.2 Existe una oferta permanente programas educativos propios o compartidos con otras instituciones en los últimos 5 años </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-title">
                    <h2>3. Recursos Humanos</h2>
                </div>
                <div class="ibox-content" style="display: block">
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">COMPONENTE</th>
                            <th style="text-align: center; vertical-align: middle">PROM (COMP)</th>
                            <th style="text-align: center; vertical-align: middle">CRITERIO</th>
                            <th style="text-align: center; vertical-align: middle">PROM (CRIT)</th>
                            <th style="text-align: center; vertical-align: middle">INDICADORES</th>
                            <th style="text-align: center; vertical-align: middle">VALOR</th>
                            <th style="text-align: center; vertical-align: middle">ESTÁNDARES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="12" style="text-align: justify; vertical-align: middle">3.1 Estudiantes</td>
                            <td rowspan="12" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['31'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.1 Coherencia de los criterios de ingreso y admisión con el proyecto académico (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['311'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.1.1 Evidencia de criterios de ingreso y admisión (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.1.1 Existen criterios de ingreso y admisión coherentes con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">3.1.2 Coherencia del número total de estudiantes con el proyecto académico (C)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['312'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.2.1 Relación proporcional equivalente docente - estudiante (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3121'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.2.1. La relación se ubica en un rango entre 1/8 y 1/20</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.2.2 Número de estudiantes inscritos por curso -año (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3122'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.2.2 El número de inscritos es coherente con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="text-align: justify; vertical-align: middle">3.1.3 Coherencia entre el desempeño de los estudiantes con el proyecto académico (C)</td>
                            <td rowspan="6" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['313'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.1 Índice de aprovechamiento de los cursos (porcentaje de aprobados) (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3131'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.1 Índice de aprovechamiento de los cursos (porcentaje de aprobados B- MB- E) (C) </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.2 Número de graduados por año (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3132'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.2 Registro de número de graduados por año (C) </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.3 Relación proporcional graduados-inscritos (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3133'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.3 Evidencia de relación proporcional graduados- inscritos (C) </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.4 Índice de reprobados (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3134'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.4 Evidencia de índice de reprobados (C) </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.5 Tiempo de permanencia de los estudiantes en el programa (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3135'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.5 Se considera suficiente  un tiempo  de titulación menor o igual a 1,6 la relación  entre la duración real y duración nominal medida por la moda o mediana</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.6 Índice de asistencia a los cursos (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3136'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.3.6. Evidencia del índice de asistencia a los cursos (C) </td>
                        </tr>
                        <tr>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">3.1.4 Coherencia de la oferta de actividades extracurriculares con el proyecto académico (C)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['314'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.1 Número de estudiantes incorporados a la investigación y/o extensión con relación al número total de estudiantes  (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3141'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.1 La relación entre el número de estudiantes incorporados a la investigación y/o a la extensión y el número total de estudiantes es coherente con el proyecto académico (no debe ser menor del 70%)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.2 Número de viajes de estudio excluyendo clases prácticas y salidas al terreno (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3142'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.2 El número de viajes  de estudio, excluyendo clases practicas y salidas al terreno es coherente con el proyecto académico.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.3 Participación de los estudiantes en los órganos  colegiados (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3143'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.1.4.3 Los estudiantes participan en los órganos colegiados?</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">3.2 Egresados o Graduados</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['32'], 2, '.', ',') }}</td>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">3.2.1 Existencia de sistemas de seguimiento de los egresados o graduados (E)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['321'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.2.1.1  Mecanismos de seguimiento de los egresados o graduados (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3211'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.2.1.1 Existe y funcionan mecanismos de seguimiento de los egresados o graduados</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.2.1.2 Formas de incorporación de la opinión de los egresados o graduados en el proyecto académico (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3212'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.2.1.2 Formas de incorporación de la opinión de los egresados o graduados en el proyecto académico (C) </td>
                        </tr>
                        <tr>
                            <td rowspan="15" style="text-align: justify; vertical-align: middle">3.3 Docentes</td>
                            <td rowspan="15" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['33'], 2, '.', ',') }}</td>
                            <td rowspan="7" style="text-align: justify; vertical-align: middle">3.3.1 Coherencia cuantitativa y cualitativa del cuerpo docente con el proyecto académico (E)</td>
                            <td rowspan="7" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['331'], 2, '.', ',') }}</td>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">3.3.1.1 Números de docentes según capacitación - Científica- Tecnológica-Pedagógica (E)</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['33111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.1.1 Se cumple el número mínimo de 20% del cuerpo docente con maestría y/o doctorado para pregrado y mínimo de 80% para postgrado</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['33112'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.1.2 Existe un número mínimo de docentes con formación tecnológica coherente con el proyecto</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['33113'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.1.3 Existe un número mínimo de docentes can capacitación pedagógica coherente con el proyecto académico (mínimo un 66,6%)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.2 Número de docentes según dedicación, indicando horas semanales/actividad y tiempo de permanencia en el instituto (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3312'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.2 Evidencia que existe un número mínimo de 30% de los docentes con jornada de 40 horas/semana</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.3 Evidencia de sistemas de  concurso de méritos para ingreso promoción y criterios de permanencia (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3313'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.3 Existen sistemas de concurso de méritos para ingreso, promoción y criterios permanencia</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.4 Sistema de categorización- requisitos y funciones de cada categoría (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3314'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.4 Existen sistemas de categorización docente</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.5 Evidencia de adecuación de la formación académica del programa con las disciplinas que  dicta cada docente (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3315'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.1.5 Existe adecuación de la formación académica del programa con las disciplinas de cada docente</td>
                        </tr>
                        <tr>
                            <td rowspan="8" style="text-align: justify; vertical-align: middle">3.3.2 Pertinencia de la producción académica con el proyecto académico en los últimos 5 años (E)</td>
                            <td rowspan="8" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['332'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.1 Número de docentes por  cursos del programa, registro en los últimos 5 años (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3321'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.1 Existe un número de docentes por cursos del programa. Equivalencia coherente con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.2 Participación en tutorías en los últimos 5 años:- número de tutorías por docente por año (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3322'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.2. Existe una participación por parte de los docentes en tutorías en los últimos 5 años coherente con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.3 Publicaciones académicas y de doctrina en los últimos 5 años - Número de publicaciones en revistas indexadas - Número de trabajos y comunicaciones en los últimos 5 años (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3323'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.3 Existe un número promedio mínimo de un publicación anual por docente en sus tres categorías superiores en los últimos 5 años (científica y/o comunicación a congresos)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.4 Número de publicaciones didácticas en los últimos 5 años (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3324'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.4 Existen publicaciones didácticas actualizadas en los últimos 5 años coherentes con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.5 Número de publicaciones técnicas en los últimos 5 años (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3325'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.5 Existen publicaciones técnicas en los últimos 5 años coherentes con el proyectos académicos</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.6 Números de libros y capítulos de libros en los últimos 5 años (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3326'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.6. Existe libros y capítulos de libros publicados en los últimos  5 años</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.7 Número de trabajo de grado y/o tesis concluido y aprobado en los últimos 5años (grado y postgrado) (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3327'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.7 Existen trabajos de grado y/o tesis concluidos y aprobados en los últimos 5 años (C) </td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.8 Evidencias de participaciones en actividades de desarrollo curricular e innovaciones educativas en los últimos 5 años (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3328'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.3.2.8 Existe participación en actividades de desarrollo curricular e innovaciones educativas en los últimos 5 años</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="text-align: justify; vertical-align: middle">3.4 Personal de Apoyo</td>
                            <td rowspan="6" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['34'], 2, '.', ',') }}</td>
                            <td rowspan="2" style="text-align: justify; vertical-align: middle">3.4.1 Coherencia de la cantidad de personal no docente con el proyecto académico (E)</td>
                            <td rowspan="2" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['341'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.1.1 Evidencia de la cantidad de personal no-docente (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3411'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.1.1 La cantidad y distribución del personal no-docente es suficiente para atender las necesidades del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.4.1.2 Sistemas de incorporación (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3412'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.1.2 Existe y funciona un sistema de incorporación </td>
                        </tr>
                        <tr>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">3.4.2 Coherencia de las habilidades del personal no-docente con el proyecto académico (E)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['342'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.1 Evidencias de las habilidades y nivel de formación del personal no-docente (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3421'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.1 Las habilidades y nivel de formación del personal no - docente son  suficientes para atender las necesidades del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.2 Sistema de evaluación y promoción (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3422'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.2 Existe y funciona un sistema de entrenamiento y/o capacitación del personal no-docente</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.3 sistema de entrenamiento y/o capacitación (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3423'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.2.3 Existe y funciona un sistema de entrenamiento y/o capacitación del personal no-docente</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">3.4.3 Coherencia de la distribución del personal no-docente  con el proyecto académico (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['343'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.3.1 Evidencias de la distribución del personal no-docente en las diferentes actividades de la carrera (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['3431'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">3.4.3.1 La distribución del personal no docente en las diferentes actividades de la carrera es coherente con el proyecto académico</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-title">
                    <h2>4. Infraestructura</h2>
                </div>
                <div class="ibox-content" style="display: block">
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">COMPONENTE</th>
                            <th style="text-align: center; vertical-align: middle">PROM (COMP)</th>
                            <th style="text-align: center; vertical-align: middle">CRITERIO</th>
                            <th style="text-align: center; vertical-align: middle">PROM (CRIT)</th>
                            <th style="text-align: center; vertical-align: middle">INDICADORES</th>
                            <th style="text-align: center; vertical-align: middle">VALOR</th>
                            <th style="text-align: center; vertical-align: middle">ESTÁNDARES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="4" style="text-align: justify; vertical-align: middle">4.1 infraestructura física y logística</td>
                            <td rowspan="4" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['41'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.1 Coherencia de las características de las construcciones con el proyecto académico (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['411'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.1.1 Evidencias de la disponibilidad física de -Aulas-Lab. O aulas tácticas-Biblioteca-Sala de formación académica-Oficinas y espacios de trabajo para docentes-TIC´s -Oficinas y espacios de trabajo para adm. (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4111'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.1.1 La disponibilidad, acceso, funcionalidad y seguridad de las construcciones necesarias en el proyecto académico (Aulas, Laboratorios, Aulas tácticas, Biblioteca, Salas para informática y educación a distancia, TIC´s, Oficinas y espacios de trabajo para docentes Oficinas espacios de trabajo para administrativos) es coherente con el proyecto académico</td>
                        </tr>
                        <tr>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">4.1.2 Coherencia de las características de las construcciones con el bienestar (C)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['412'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.1 Evidencias de la accesibilidad y seguridad de: Aulas, laboratorios, bibliotecas, sala para informática, RIC´s aula táctica, oficinas y espacios de trabajo (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4121'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.1 Existe disponibilidad física, accesibilidad y funcionalidad de las construcciones</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.2 Evidencias de las disponibilidad física de construcciones para recreación, deportes y bienestar (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4122'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.2. Existe disponibilidad física y funcionalidad de las construcciones para recreación, deportes y bienestar</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.3Existencia de áreas de servicios gastronómicas y servicios generales (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4123'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.1.2.3. Existen áreas de servicios gastronómicos y servicios generales</td>
                        </tr>
                        </tbody>
                        <tr>
                            <td rowspan="4" style="text-align: justify; vertical-align: middle">4.2 Bibliotecas</td>
                            <td rowspan="4" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['42'], 2, '.', ',') }}</td>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">4.2.1  Coherencia del acervo bibliográfico con el proyecto académico (E)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['421'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.1 Evidencias de la pertinencia del acervo bibliográfico que permita determinar - Lista de las principales revistas periódicas recibidas durante la totalidad de los últimos 5 años- tipo y cantidad total de materiales disponibles (libros, trabajos de grado, tesis, revistas)- Disponibilidad de la bibliografía recomendada en las asignaturas de la carrera-porcentaje de la superficie de las Biblioteca destinada a usuarios</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4211'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.1. Existe disponibilidad y pertinencia del acervo bibliográfico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.2 Recursos asignados a Biblioteca (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4212'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.2 Existen recurso asignados a biblioteca para garantizar la actualidad del acervo</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.3 Evidencias de los mecanismos de selección y actualización del acervo (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4213'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.1.3 Existen mecanismos de selección y actualización del acervo</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.2.2 Coherencia de los servicios informatizados con el proyecto académico (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['422'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.2.1 Evidencias de la disponibilidad, calidad y funcionamiento de los servicios informatizados (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4221'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.2.2.1 Existe disponibilidad, calidad y funcionamiento de los serv. Informatiza</td>
                        </tr>
                        <tr>
                            <td rowspan="6" style="text-align: justify; vertical-align: middle">4.3 Instalaciones especiales</td>
                            <td rowspan="6" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['43'], 2, '.', ',') }}</td>
                            <td rowspan="3" style="text-align: justify; vertical-align: middle">4.3.1 Coherencia del equipamiento académico y de laboratorios con el proyecto académico:-Aulas-Lab.-aula Táctica-Anfiteatros-Lab. Inf.-Salas de estudios (E)</td>
                            <td rowspan="3" style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['431'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.1 Evidencias de las características, cantidad y funcionalidad de los equipos académicos (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4311'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.1 Las características, cantidad y funcionalidad de los equipos académicos son suficientes para atender las necesidades del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.2 Evidencias de las características, cantidad y funcionalidad de los equipos de laboratorios y aulas tácticas (E)</td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4312'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.2 Las características cantidad y funcionalidad de los equipos de laboratorios y aulas tácticas son suficientes para atender las necesidades del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.3 Evidencias de las características, cantidad y funcionalidad de los equipos de laboratorios de informática (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4313'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.1.3 Las características, cantidad y funcionalidad de los equipos de laboratorios de informática son suficientes para atender las necesidades del proyecto académico</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.3.2 Coherencia de los medios de comunicación con el proyecto académico (TIC´s) (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['432'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.2.1 Evidencias de la cantidad, funcionalidad y características de los medios de comunicación (TIC´s) (C) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4321'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.2.1. La cantidad, funcionalidad y características de los medios de comunicación (TIC´s) son suficientes para atender las necesidades del proyecto</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.3.3 Coherencia de la disponibilidad y acceso a medios de transporte con el proyecto académico (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['433'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.3.1 Evidencias de la cantidad, funcionalidad y características de los medios de transporte (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4331'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.3.1 Los servicios de transporte existen en cantidad, funcionalidad y características suficientes para atender las necesidades del proyecto</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; vertical-align: middle">4.3.4 Coherencia de los centros y áreas de capacitación o instrucción con el proyecto académico y el número potencial de usuarios (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ number_format($evaluaciones['434'], 2, '.', ',') }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.4.1 Existencias de centros y áreas de capacitación o instrucción; Áreas- Equipamiento-Instalaciones-Funcionamiento y accesibilidad (E) </td>
                            <td style="text-align: center; vertical-align: middle">{{ $evaluaciones['4341'] }}</td>
                            <td style="text-align: justify; vertical-align: middle">4.3.4.1 La cantidad, funcionalidad y características de los centros de capacitación o instrucción son suficientes para atender las necesidades del proyecto y el número potencial de usuarios</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection