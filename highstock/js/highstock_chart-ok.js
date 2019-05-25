/**
 * @file
 */

(function ($) {

    Drupal.behaviors.highstockchart = {
        attach: function (context, settings) {
            var base = window.location.origin;
            // Call API to fetch the detail.
            $.getJSON(base + '/rest/float?_format=json', function (data) {
                // Create the chart
                if (data) {
                    Highcharts.stockChart('container', {
                        //time: {
                        //    useUTC: false
                        //},

                        rangeSelector: {
                            selected: 1
                        },
                        title: {
                            text: 'Data from sensor'
                        },
                        // Customize chart color.
                        fillColor: '#93d7ea',
                        color: '#12b9e8',
                        // xAxis and yAxis Customization.
                        xAxis: {
                            lineColor: 'red',
                            type: 'datetime',
                            tickPixelInterval: 150
                        },
                        yAxis: {
                            alternateGridColor: '#FDFFD5',
                            title: {
                                text: 'Temperature'
                            },
                        },
                        tooltip: {
                            //headerFormat: '<b>{series.name}</b><br/>',
                            pointFormat: '<b>{series.name}</b><br/>{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
                        },
                        series: [{
                            name: 'Temp',
                            data: data,
                            tooltip: {
                                valueDecimals: 2
                            },
                            type: 'spline'
                        }]
                    });

                }
            });
        }
    };
})(jQuery);