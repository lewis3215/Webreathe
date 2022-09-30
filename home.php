<?php 
require 'backEnd/homeController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <title>WEBREATHE</title>
</head>

<body>
    <?php require 'header.php' ?>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-20">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="images/logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Enregistrement d'un nouveau module</h4>
                                    </div>

                                    <form action="backEnd/homeController.php" method="POST">

                                        <div class="form-outline mb-4">
                                            <input type="text" name="nomModule" id="nomModule" class="form-control"
                                                placeholder="Entrez le nom du module" required />
                                            <label class="form-label" for="nomModule">Nom du module</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <select name="typeMesure" id="typeMesure" class="form-control" required>
                                                <?php
                                                    while($row = $typeMesure->fetch_assoc()) {
                                                    echo "<option value='" . $row['id_type'] . "'>" . $row['libelle_type']
                                                        . "</option>" ; 
                                                    }
                                                ?>
                                            </select>
                                            <label class="form-label" for="typeMesure">Type de mésure</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input type="submit" value="Enregistrer"
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-black px-3 py-4 p-md-5 mx-md-4d">
                                    <h4 class=" mb-4">Liste des modules existants</h4>
                                    <div class="scrollable">
                                        <table class="table table-bordered text-center">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Type de mesure</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = $module->fetch_assoc()) {?>
                                                <tr data-nbrModule="<?php echo $nbr[0] ?>"
                                                    data-vma="<?php echo $row['vma'] ?>"
                                                    data-duree="<?php echo $row['duree_fonct'] ?>"
                                                    data-nbData="<?php echo $row['nbr_data_send'] ?>"
                                                    data-etat="<?php echo $row['etat'] ?>"
                                                    onclick="goToView(<?php echo $row['id_module']?>)">
                                                    <th scope="row">
                                                        <?php echo $row['nom_module'] ?> </th>
                                                    <td>
                                                        <?php echo $row['libelle_type'] ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script integrity=" sha384-MrcW6ZMsFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="js/notificationState.js"></script>
    <script src="js/mesurer.js"></script>
    <script src="js/stateGenerator.js"></script>
    <script>
    let datas;
    const goToView = (id) => {
        /*  Les données concernants les différents modules sont passées sur chaque ligne(
             tr) sous forme de datasets puis sont récupérés et stockés dans le localstorage(
             stackage propre au navigateur) afin de pouvoir être plutard utilisé dan un autre script js */
        const vma = document.querySelectorAll("tr")[1].dataset.vma;
        localStorage.setItem('vma', JSON
            .stringify(vma));
        const duree = document.querySelectorAll("tr")[1].dataset.duree;
        localStorage.setItem('duree', 
            duree );
        const nbData = document.querySelectorAll("tr")[1].dataset.nbdata;
        localStorage.setItem('nbData',
            JSON.stringify(nbData));
        const etat = document.querySelectorAll("tr")[1].dataset.etat;
        localStorage.setItem('etat', JSON
            .stringify(etat));
        fetch('http://localhost/Webreathe/backEnd/getMesure.php?id=' + id, {
                //mode:'no-cors',
                header: {
                    "Access-Control-Allow-Origin": "*"
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                localStorage.setItem('dataset', JSON.stringify(data));
                window.location = "http://localhost/Webreathe/visualisation.php";
            });

    }
    </script>
</body>

</html>