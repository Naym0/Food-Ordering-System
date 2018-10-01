
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-2">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <div class="nav-get-started">
                <p class="font">Already have an account?</p>
                <a class="btn get-started-btn" href="<?php echo base_url()?>">SIGN IN</a>
              </div>
              <? php echo validation_errors(); ?>
              
              <form action="<?php echo base_url()?>users/form_validation" method="post">
              <h3 class="mr-auto font">Are you tired of standing in queues waiting for your meal?
                 <br> <span class='get-started'>Then, let's get started!</span></h3><br>

                <!-- <p class="mb-5 mr-auto font">Then lets get started.</p> -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="text" class="form-control" name="ID" placeholder="School ID number" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="text" class="form-control" name="name" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="text" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="text" class="form-control" name="sex" placeholder="Gender" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="password" class="form-control" name="pass" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input style="font-size:15px;font-family: 'Raleway', sans-serif;" type="password" class="form-control" name="cpass" placeholder="Confirm Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn" name="sign_up">SIGN UP</button>
                </div>
                