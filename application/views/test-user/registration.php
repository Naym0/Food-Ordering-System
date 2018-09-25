    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a id="link" href="Index-view.html">Home</a></li>
            <li><a id="link" href="FoodOrderingLogin-view.html">Login</a></li>
          </ul>
        </div>
    </nav><br>

<body id="bod">
        <div class="container">
          <div class="row">
            <div class="col s6 offset-s3">
              <div class="card white">
                <div class="card-content center-align" >
            
            <form align="center"; text="black";>
            
              <div class="row">
                <div class="input-field col s12">
                  <input name="Name" type="text" class="validate">
                  <label>Names</label>
                </div>
        
                <div class="input-field col s12">
                  <input name="email" type="email" class="validate">
                  <label>Email</label>
                </div>
        
                <div class="input-field col s12">
                  <input name="ID" type="text" class="validate">
                  <label>ID number</label>
                </div>
        
                <div class="input-field col s12">
                  <input name="password" type="password" class="validate" pattern=".{8,}" title="Eight or more characters">
                  <label>Password</label>
                </div>
        
                <div class="input-field col s12">
                    <input name="upassword" type="password" class="validate" pattern=".{8,}" title="Eight or more characters">
                    <label>Re-type password</label>
                  </div>
        
            <p>
            <label>
              <input class="with-gap" name="sex" value="Male" type="radio" required />
              <span>Male</span>
            </label>
            </p>
            <p>
            <label>
              <input class="with-gap" name="sex" value="Female" type="radio" required />
              <span>Female</span>
            </label>
            </p><br>
        
            
            <button class="btn grey darken-1" onclick="Login()"> Register </button>
            
                </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
</body>
        