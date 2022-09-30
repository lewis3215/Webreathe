<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/visualisation.css">
    <link rel="stylesheet" href="css/visualisation.css">
    <title>Document</title>
</head>

<body>
    <?php require 'header.php' ?>

    <div class="container-fluid py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-20">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="chart-container ">
                                <canvas id="barCanvas" aria-label="chart" role="img"> </canvas>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center gradient-custom-2">
                            <div>
                                <h3>valeur mesure actuelle <b id="vma"></b></h3>
                                <h3>Ce module fonctionne depuis<b id="duree"></b></h3>
                                <h3>Nombre de données envoyées<b id="nbData"></b></h3>
                                <h3> <b id="etat"></b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/notificationState.js"></script>
    <script src="js/mesurer.js"></script>
    <script src="js/stateGenerator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="js/visualisation.js"></script>
</body>

</html>