<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["bar"],
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Votação", "Azul", "Vermelho", "Amarelo"],
                ['valor', 1, 2, 3],
                ['valor', 1, 2, 3],
                ['valor', 1, 2, 3]
            ]);

            var options = {
                chart: {
                    title: "Este gráfico traz dados de cores:",
                    subtitle: "Qual a sua?",
                },
            };

            var chart = new google.charts.Bar(
                document.getElementById("columnchart_material")
            );

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <a href="form.php">Adicionar Dados</a>
    </div>
    <section class="grafico center">
        <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
    </section>
</body>

</html>