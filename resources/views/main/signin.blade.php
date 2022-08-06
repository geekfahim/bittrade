<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bittrade </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="public/vendor/waves/waves.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                            <div class="mini-logo text-center my-5">
                                <a href="index.html">
                                <h2 class="logo">
                                    <img class="img-fluid" src="public/images/bg/logo.png" alt="" > 
                                </h2>
                            </a>
                            </div>
                        <div class="auth-form card">
                            <div class="card-header justify-content-center">
                                <h4 class="card-title">Sign in</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" name="myform" class="signin_validate" action="otp-1.html">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="hello@example.com"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group mb-0">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <span class="toggle-switch"></span>
                                                <span class="toggle-label">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="form-group mb-0">
                                            <a href="reset.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="signup.html">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
        
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->
    </div>


    <script src="public/js/global.js"></script>
    
    

    <script src="public/vendor/validator/jquery.validate.js"></script>
    <script src="public/vendor/validator/validator-init.js"></script>

    <script src="public/js/scripts.js"></script>

    <script src="public/js/settings.js"></script>
    <script src="public/js/quixnav-init.js"></script>
    <script src="public/js/styleSwitcher.js"></script>
</body>

</html>