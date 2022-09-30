<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>WEBREATHE</title>
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="images/logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Welcome to WEBREATHE</h4>
                                    </div>

                                    <form action="backEnd/loginController.php" method="POST">
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="username" class="form-control"
                                                placeholder="Addresse email" require />
                                            <label class="form-label" for="email">Username</label>
                                            <br /> <small id="validationUsername"></small>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="pass" id="password" class="form-control"
                                                require />
                                            <label class="form-label" for="pass">Password</label>
                                            <br /> <small id="validationPassword"></small>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input type="submit" value="Login"
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Plus qu'une simple entreprise</h4>
                                    <p class="small mb-0">
                                        Aujourd'hui, nous souhaitons améliorer la manière dont les transports en commun
                                        sont exploités. En effet, en plus de nous intéresser aux horaires de passage,
                                        aux courses ou aux services, nous mettons l'accent sur l'usager et son
                                        expérience au sein du réseau.
                                    </p>
                                    <p>
                                        Chez Webreathe, nous remettons les voyageurs et leurs affluences au cœur des
                                        choix de l’opérateur. Nous lui donnons les outils nécessaires pour lui permettre
                                        d’optimiser son exploitation et offrir la meilleure expérience possible à ses
                                        clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/mesurer.js"></script>
    <script src="js/stateGenerator.js"></script>
    <script integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>