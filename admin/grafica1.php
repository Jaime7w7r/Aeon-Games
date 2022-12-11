<?php
require_once '../basedatos.php';

   if ($conexion->connect_errno){
        die('Error en la conexion');
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div style="width:700px ; height: 700px; margin-left:30px ; margin-top: 20px;">
  <canvas id="myChart"></canvas>
  <a href="administrador.php" class="btn-primary">Regresar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'polarArea',
    data: {
      labels: [
        <?php
        $sql = "SELECT * FROM ventas";
        $result = mysqli_query($conexion,$sql);
        while ($registros = mysqli_fetch_array($result)){?>
          '<?php echo $registros["Mes"] ?>',
        
        <?php
        }
        ?>
      ],
      datasets: [{
        label: 'Ventas',
        data: [
          <?php
        $sql = "SELECT * FROM ventas";
        $result = mysqli_query($conexion,$sql);
        while ($registros = mysqli_fetch_array($result)){?>
          '<?php echo $registros["Ventas"] ?>',
        
        <?php
        }
        ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
    
</body>
</html>