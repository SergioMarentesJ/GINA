<?php
require_once "_db.php";
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?php
        $SQL = "SELECT * FROM productos";
        $consulta = mysqli_query($conexion, $SQL);
        while($resultado = mysqli_fetch_assoc($consulta)){
            echo "['" .$resultado['nom']."', " .$resultado['exi']."],";
        }
?>
        ]);

        var options = {
          title: 'Existencias de ropa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
        $SQL = "SELECT * FROM productos";
        $consulta = mysqli_query($conexion, $SQL);
        while($resultado = mysqli_fetch_assoc($consulta)){
            echo "['" .$resultado['nom']."', " .$resultado['pre']."],";
        }
?>
        ]);

        var options = {
          title: 'Precio de cada prenda',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>
