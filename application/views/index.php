<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Demo</title>

    <!-- Bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/styles.css')?>">
  </head>
  <body>
    
    <!-- Login Form -->
    <section class="login-f">
        <div class="container">
            <div class="col-lg-10 col-md-12 mx-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card border-0 shadow rounded-3 my-5">
                            <div class="card-body p-4 p-sm-5">
                                <div class="text-title">
                                    <h5>Welcome Back!</h5>
                                    <p>Login to continue</p>
                                </div>
                                <form>
                                    <div class="form-custom mb-3">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="email" class="form-control" placeholder="name@example.com" required>      
                                    </div>
                                    <div class="form-custom mb-3">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="grid-btn">
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-primary btn-block text-uppercase fw-bold" type="submit">Sign in</button>
                                            </div>

                                            <div class="col-6">
                                                <a href="forgotpassword" class="btn btn-secondary btn-block text-uppercase fw-bold"> Forgot Password ?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
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