@extends('layouts.app')

@section('script_cabecera')
<link href="{{ asset('css/high.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Porcentaje de clientes por Sexo
                </div>

                <div class="card-body">
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                        {{--<p class="highcharts-description">
                            This pie chart shows how the chart legend can be used to provide
                            information about the individual slices.
                        </p>--}}
                    </figure>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script_pie')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    // A $( document ).ready() block.
$(document).ready(function() {
    // Build the chart
    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Sexo sobre Porcentaje de clientes'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Masculino',
            y: {{$porcentajeM}},
            sliced: true,
            selected: true
        }, 
        {
            name: 'Femenino',
            y: {{$porcentajeF}},
            sliced: true,
            selected: true
        }
        ]
    }]
    });

});
</script>
@endsection
