<?php
require_once './db.php';

// 
$stmt = $pdo->prepare("SELECT
g.id AS grupo_id,
g.grupo,
v.id AS valor_id,
v.valor_1,
v.valor_2,
v.valor_3
FROM
grupos g
JOIN
valores v ON g.id = v.id_grupo;");
$results = $stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 
?>
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
                <?php for ($i = 0; $i < count($results); $i++) {
                    echo "['" . $results[$i]['grupo'] . "'," . $results[$i]['valor_1'] . "," . $results[$i]['valor_2'] . "," . $results[$i]['valor_3'] . "],";
                } ?>
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