<?php
require_once ('include/conn.php');
require_once ('include/process.php');

$process = new Process;
$dataHasil = $process->getEarn();
$dataBulan = $process->getBulan();
$dataTahun = $process->getYear();
// print_r($dataBulan);
// print_r($dataHasil);
// print_r($dataBulan);
// $b = json_encode($dataBulan);

// var_dump($dataBulan);
// print_r($dataBulan);
// $b = array();
// $h = array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/Chart.bundle.js"></script>

        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
</head>
<body>
        <div>
        <input type="select">
        </div>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [   <?php 
                                    // while ($b = $dataBulan->fetch(PDO::FETCH_ASSOC)) { 
                                    //     echo '"' . $b['bulan'] . '",';
                                    // }
                                    // $data = array();
                                    // while ($row = $dataBulan->fetch(PDO::FETCH_ASSOC)) {
                                    //     $data[] = $row;
                                    // }
                                    // // echo @$data['bulan'];
                                    // return $data;
                                    

                                    print_r($dataBulan);


                                        // print json_encode($data);
                                        // print_r($dataBulan);
                                        // $data = implode("|",$dataBulan);
                                        // echo $data;
                                        // echo json_encode($dataBulan);
                                        
                                        ?>],
                    datasets: [{
                        label: '# of Votes',
                        data: [ <?php 
                                    print_r($dataHasil);
                                        // while ($h = $$dataHasil->fetch(PDO::FETCH_ASSOC)) {
                                            //     echo '"' . $h['hasil'] . '",';
                                            // }
                                            // print_r($dataHasil);
                                            // echo json_encode($dataHasil);
                                    ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
</body>
</html>

