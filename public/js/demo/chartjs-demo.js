$(function () {

    var radarData = {
        labels: [
            '1.1 Características de la carrera o programa y su inserción institucional',
            '1.2 Organización, Gobierno, Gestión y Administración de la carrera',
            '1.3 Políticas y programas  de bienestar institucional',
            '2.1 Plan de estudio',
            '2.2 Proceso Educativo (PEA)',
            '2.3 Investigación y desarrollo Tecnológico',
            '2.4 Extensión, Vinculación u Cooperación',
            '3.1 Estudiantes',
            '3.2 Graduados',
            '3.3 Docente',
            '3.4 Personal de Apoyo',
            '4.1 Infraestructura física y logística',
            '4.2 Bibliotecas',
            '4.3 Laboratorios e instalaciones especiales'
        ],
        datasets: [
            {
                label: "Roseta de Calidad por Componentes",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [e11, e12, e13, e21, e22, e23, e24, e31, e32, e33, e34, e41, e42, e43]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

    var radarData2 = {
        labels: [
            '1. CONTEXTO INSTITUCIONAL',
            '2. PROYECTO ACADÉMICO',
            '3. RECURSOS HUMANOS',
            '4. INFRAESTRUCTURA'
        ],
        datasets: [
            {
                label: "Roseta de Calidad por dimensiones",
                fillColor: "rgba(210, 44, 23, 0.2)",
                strokeColor: "rgba(255, 0, 0, 0.2)",
                pointColor: "rgba(255, 60, 64, 0.2)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [
                    e1,
                    e2,
                    e3,
                    e4
                ]
            }
        ]
    };

    var radarOptions2 = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx2 = document.getElementById("radarChart2").getContext("2d");
    var myNewChart2 = new Chart(ctx2).Radar(radarData2, radarOptions2);

});