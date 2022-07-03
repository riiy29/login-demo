<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Demo</title>

    <!-- Vendor CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/styles.css')?>">

  </head>
  <body>
    
    <!-- Login Form -->
    <section class="login-f">
        <div class="container">
            <div class="col-lg-10 col-md-12 mx-auto card border-0 shadow">
                <div class="row">
                    <div class="col-md-4 sm-none ">
                        <div class="img-ill">
                            <img src="<?=base_url('assets/img/ill-login.png')?>" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="rounded-3">
                            <div class="card-body p-4 p-sm-5">
                                <div class="text-title">
                                    <h5>Welcome Back!</h5>
                                    <p>Login to continue</p>
                                </div>
                                <form>
                                    <div class="form-custom">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="email" class="form-control" placeholder="Enter Email" required>      
                                    </div>
                                    <div class="form-custom mb-5">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div class="grid-btn">
                                        <div class="row">
                                            <div class="col-md-4 col-6">
                                                <button class="btn btn-primary btn-block text-uppercase" type="submit">Login</button>
                                            </div>

                                            <div class="col-md-8 col-6">
                                                <a href="forgotpassword" class="btn btn-light btn-block text-uppercase"> Forgot Password ?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



  </body>

    <!-- Script JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

</html>