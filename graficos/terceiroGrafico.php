<html>
  <head>
    <title> Graph's</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População'],
          <?php

          include 'conexao.php';
          $sql = "SELECT * FROM cidades";
          $buscar = mysqli_query($conexao,$sql);

          while($dados = mysqli_fetch_array($buscar)){
            $cidade = $dados['cidade'];
            $populacao = $dados['populacao'];
          
          ?>
          [ ' <?php echo $cidade ?>' ,<?php echo $populacao ?> ],
              
          <?php } ?>
        ]);
           var options = {
          title: ' População'
        };

        var chart = new google.visualization.PieChart(document.getElementById('graphPizza'));

        chart.draw(data, options);

      }
    </script>
  </head>
  <body>
    <div id="graphPizza" style="height: 400px; width: 400px"></div>
 
  </body>
</html>
