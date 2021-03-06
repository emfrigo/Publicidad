/*
 *  Document   : widgetsStats.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Statistic Widgets page
 */

var WidgetsStats = function() {

    return {
        init: function() {
            /*
             * Flot 0.8.2 Jquery plugin is used for charts
             *
             * For more examples or getting extra plugins you can check http://www.flotcharts.org/
             * Plugins included in this template: pie, resize, stack, time
             */

            // Get the elements where we will attach the charts
            var chartWidget1 = $('#chart-widget1');
            var chartWidget2 = $('#chart-widget2');

            // Random data for the charts
            var dataEarnings = [[1, 1560], [2, 1650], [3, 1320], [4, 1950], [5, 1800], [6, 2400], [7, 2100], [8, 2550], [9, 3300], [10, 3900], [11, 4200], [12, 4500]];
            var dataSales = [[1, 500], [2, 420], [3, 480], [4, 350], [5, 600], [6, 850], [7, 1100], [8, 950], [9, 1220], [10, 1300], [11, 1500], [12, 1700]];

            // Array with month labels used in both charts
            var chartMonths = [[1, 'January'], [2, 'February'], [3, 'March'], [4, 'April'], [5, 'May'], [6, 'June'], [7, 'July'], [8, 'August'], [9, 'September'], [10, 'October'], [11, 'November'], [12, 'December']];

            console.log('Hola vine a saludar');

            // Widget 1 Chart
            $.plot(chartWidget1,
                [
                    {
                        data: dataEarnings,
                        lines: {show: true, fill: false},
                        points: {show: true, radius: 6, fillColor: '#cccccc'}
                    },
                    {
                        data: dataSales,
                        lines: {show: true, fill: false},
                        points: {show: true, radius: 6, fillColor: '#ffffff'}
                    }
                ],
                {
                    colors: ['#ffffff', '#353535'],
                    legend: {show: false},
                    grid: {borderWidth: 0, hoverable: true, clickable: true},
                    yaxis: {show: false},
                    xaxis: {show: false, ticks: chartMonths}
                }
            );

            // Widget 2 Chart
            $.plot(chartWidget2,
                [
                    {
                        data: dataEarnings,
                        lines: {show: true, fill: false},
                        points: {show: true, radius: 6, fillColor: '#000000'}
                    },
                    {
                        data: dataSales,
                        lines: {show: true, fill: false},
                        points: {show: true, radius: 6, fillColor: '#ffffff'}
                    }
                ],
                {
                    colors: ['#ffffff', '#000000'],
                    legend: {show: false},
                    grid: {borderWidth: 0, hoverable: true, clickable: true},
                    yaxis: {show: false},
                    xaxis: {show: false, ticks: chartMonths}
                }
            );

            // Creating and attaching a tooltip to both charts
            var previousPoint = null, ttlabel = null;
            chartWidget1.add(chartWidget2).bind('plothover', function(event, pos, item) {

                if (item) {
                    if (previousPoint !== item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $('#chart-tooltip').remove();
                        var x = item.datapoint[0], y = item.datapoint[1];

                        // Get xaxis label
                        var monthLabel = item.series.xaxis.options.ticks[item.dataIndex][1];

                        if (item.seriesIndex === 1) {
                            ttlabel = '<strong>' + y + '</strong> sales in <strong>' + monthLabel + '</strong>';
                        } else {
                            ttlabel = '$ <strong>' + y + '</strong> in <strong>' + monthLabel + '</strong>';
                        }

                        $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                            .css({top: item.pageY - 50, left: item.pageX - 50}).appendTo("body").show();
                    }
                }
                else {
                    $('#chart-tooltip').remove();
                    previousPoint = null;
                }
            });
        }
    };
}();
