<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Demo</title>

    <?php $this->load->view('layouts/header')?>

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
                                    

                                    <h5>Change Password!</h5>
                                    <!-- Register -->
                                    <span> <a href="login">Sign in</a> </span>
                                    <p>Change Password</p>
                                </div>
                                <?php 
                                    if($this->session->flashdata('sukses') !='')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo $this->session->flashdata('sukses');
                                        echo '</div>';
                                    }
				                ?>
                               
                                
                                <form action="<?=base_url('Forgot_password')?>" method="POST">
                                    <div class="form-custom">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>      
                                    </div>
                               
                                    <div class="grid-btn">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-12 mb-3">
                                                <button class="btn btn-primary btn-block text-uppercase" type="submit">Reset </button>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-12">
                                                <a href="login" class="btn btn-light btn-block text-uppercase"> Back to Login </a>
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

  <?php $this->load->view('layouts/footer')?>

</html>