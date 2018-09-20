<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
    
    Highcharts.chart('container', {
    title: {
        text: 'Zone with dash style'
    },
    subtitle: {
        text: 'Dotted line typically signifies prognosis'
    },
    xAxis: {
            categories: [
               @foreach ($data_tgl as $element)
                   {{ $element->mon }}+'-'+{{ $element->yr }},
               @endforeach
            ]
    },
    series: [{
            name: 'total',
            data: [
               @foreach ($data_tgl as $element)
                   {{ $element->pax }},
               @endforeach
            ],
            zoneAxis: 'x',
            zones: [{
                value: 8
            }, {
                dashStyle: 'dot'
            }]
        }
        ]
    });


</script>