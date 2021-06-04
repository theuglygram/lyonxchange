<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/landing/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/landing/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/landing/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/landing/images/favicon-32x32.png" />

    <title>LyonXchange | Login</title>
</head>

<body>

    <!-- -------------------header start----------- -->



    <?php include 'includes/header.php' ?>

    <!-- header end-------------------- -->



    <div class="login_container_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <div class="img">
                        <img src="assets/landing/images/login.png" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welc">
                        <img src="assets/landing/images/LyonX.png" alt="" />
                        <h4>Welcome Back!</h4>
                    </div>
                    <div class="form_sec">
                        <div class="form_">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" required name="Username" />
                        </div>
                        <div class="form_">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" required name="password" />
                        </div>
                        <div class="log_">
                            <h6><a href=""> Forgot Password?</a></h6>
                            <button class="btn-1 log">Sign In</button>
                            <div class="new_">
                                New to LyonX? <a href="">Sign Up Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="social_med">
                        <span class="soc"><a href=""><i class="fab fa-instagram"></i></a></span>
                        <span class="soc"><a href=""><i class="fab fa-twitter"></i></a></span>
                        <span class="soc"><a href=""><i class="fab fa-whatsapp"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------footer start----------- -->



    <?php include 'includes/footer.php' ?>

    <!-- footer end-------------------- -->
    <script src="assets/landing/js/bootstrap.min.js"></script>
    <script src="assets/landing/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>