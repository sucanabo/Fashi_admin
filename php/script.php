<script src="<?php echo $level.js_path ?>jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="<?php echo $level.js_path ?>moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="<?php echo $level.js_path ?>Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="<?php echo $level.js_path ?>bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="<?php echo $level.js_path ?>tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>