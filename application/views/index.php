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
    <section class="login-f mt-5 home-v">
        <div class="container">
            <div class="col-lg-6 col-md-12 mx-auto card border-0 shadow">
                <div class="row">
                    <div class="col-md-12 sm-none ">
                       <div class="img-user text-center">
                            <img src="<?=("$current_user->avatar")?>" alt="" class="img-responsive">
                       </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="rounded-3">
                            <div class="card-body p-4 p-sm-5">
                                <div class="text-title">

                                    <h5>Hai, Pak <?= htmlentities($current_user->nama) ?> !</h5>
                                    <!-- Register -->
                                    
                                </div>
                                <div class="info-user">
                                    <!-- Nama -->
                                    <span>: <?= htmlentities($current_user->nama) ?></span>
                                    <h5>Nama </h5> 
                                    <!-- Email -->
                                    <span> : <?= htmlentities($current_user->email) ?></span>
                                    <h5>Email</h5>
                                </div>
                                <div class="grid-btn mt-5">
                                    <div class="row">
                                        <div class="col-7 mx-auto mb-3">
                                            <a href="<?=base_url('Auth/logout')?>" class="btn btn-danger btn-block text-uppercase" type="submit">logout</a>
                                        </div>
                                    </div>
                                </div>
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