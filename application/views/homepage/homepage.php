<!--Navigation & Intro-->
<header>

  <!--Mask-->
  <div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
      <div class="container">
        <div class="row" id="home">

          <!--First column-->
          <div class="col-lg-6">
            <div class="description">
              <h2 class="h2-responsive wow fadeInLeft">Selamat datang pada sistem kasir </h2>
              <hr class="hr-light wow fadeInLeft">
              <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
              <br>
              <a class="btn btn-git btn-lg wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
            </div>
          </div>
          <!--/.First column-->

          <!--Second column-->
          <div class="col-lg-6 wow fadeInRight">
            <!--Form-->

            <!--Form with header-->
            <div class="card">
              <div class="card-block">

                <!--Header-->
                <div class="form-header blue-gradient">
                  <h3><i class="fa fa-user"></i> Login </h3>
                </div>

                <form action="<?= base_url('welcome/login'); ?> " method="post">

                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" name="username" id="username" class="form-control">
                  <label for="username">Username</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix"></i>
                  <input type="password" name="password" id="password" class="form-control">
                  <label for="password">Password</label>
                </div>

                <div class="text-xs-center">
                  <button type="submit" class="btn btn-indigo">Login</button>
                </div>

              </form>

              </div>
            </div>
            <!--/Form with header-->

            <!--/.Form-->
          </div>
          <!--/Second column-->
        </div>
      </div>
    </div>
  </div>
  <!--/.Mask-->

</header>
<!--/Navigation & Intro-->
