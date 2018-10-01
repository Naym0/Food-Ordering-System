
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <div class="nav-get-started">
                <p class="font">Don't have an account?</p>
                <a class="btn get-started-btn font" href="<?php echo base_url()?>users/register">GET STARTED</a>
              </div>
              <form action="<?php echo base_url()?>users/login" method="POST">
                <h3 class="mr-auto font">Welcome to the SU Food Ordering System, where ordering meals is made much faster.
                  <br> <span class='get-started'></span></h3><br>
                <!-- <p class="mb-5 mr-auto font details">Enter your details below.</p> -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="text" class="form-control" name="userId" placeholder="ID number" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="password" class="form-control input" name="password" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn" name="sign_in">SIGN IN</button>
                </div>
                