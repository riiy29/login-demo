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
                                    

                                    <h5>Welcome!</h5>
                                    <!-- Register -->
                                    <span>Already account? <a href="login">Sign in</a> </span>
                                    <p>Please enter your data correctly </p>
                                </div>
                               
                                 <?php 
                                    if($this->session->flashdata('success') !='')
                                    {
                                        echo '<div class="alert alert-success" role="alert">';
                                        echo $this->session->flashdata('success');
                                        echo '</div>';
                                    }
				                ?>
                                <form action="<?=base_url('Auth/register')?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-custom mb-5">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" class="me-4" id="image-label">Upload Avatar : </label>
                                            <input type="file" name="thumbnail" id="image-upload" required/>
                                        </div>
                                    </div>
                                    <div class="form-custom">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>      
                                    </div>
                                    <div class="form-custom">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="form-custom mb-5">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                    </div> 
                                    
                                    
                                    <div class="grid-btn">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-12 mb-3 mx-auto">
                                                <button class="btn btn-primary btn-block text-uppercase" type="submit">Register</button>
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