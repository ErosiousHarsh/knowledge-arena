<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light fadeInDown animated" style="background:#FFFFFF">
    <a class="navbar-brand" href="index.php">
        <img class="lft" src="index_files/img/logo.png" width=250 height=43></img>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown mr-4">
              <a class="crs nav-link dropdown-toggle active text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i>&nbspCourses </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (Computer Science)</a>
                  <a class="dropdown-item" href="courses.php#gatecs">GATE (Computer Science)</a>
                  <a class="dropdown-item" href="courses.php#nimcetmca">NIMCET MCA</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (Commerce)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (Management)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (HRM)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (English)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (History)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (Sociology)</a>
                  <a class="dropdown-item" href="courses.php#ugcnet">UGC NET Classes (Economics)</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="courses.php">View all courses</a>
              </div>
          </li>
          <form class="form-inline my-2 my-lg-0" id="icnsrch">
              <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search our courses" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search fa-sm"></i></button>
          </form>
      </ul>
      <ul class="nvb navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="lgsn nav-item active">
              <a class="crs nav-link text-center mr-2" href="index.php"><i class="fa fa-home"></i>&nbspHome</a>
          </li>
      </ul>
      <ul class="nvb navbar-nav mt-2 mt-lg-0">
          <li class="nav-item dropdown">
              <a class="crs nav-link dropdown-toggle active text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i>&nbspLogin</a>
              <div id="login-form" class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                <form class="pl-3" method="post" action="signIn.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address/Username</label>
                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="Password" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="Remember" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="courses.php">Forgot password?</a>
              </div>
          </li>
      </ul>
      <ul class="nvb navbar-nav mt-2 mt-lg-0">
          <li class="nav-item dropdown scrollable-menu ">
              <a class="crs nav-link dropdown-toggle active text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-handshake"></i>&nbspJoin for free</a>
              <div id="login-form2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form action="signUp.php" method="post" class="pl-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="inlineFormInput" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="inlineFormInput" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="Username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">Username length should be more than 7</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Email address</label>
                        <input type="email" class="form-control" name="confirmEmail" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="Password" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword1" required>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="getEmail" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Opt-in for newsletters and updates via email</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </li>
      </ul>
      <ul class="nvb navbar-nav mt-2 mt-lg-0">
          <li class="nav-item active">
              <a class="crs nav-link text-center" href="index.php#contactus" tabindex="-1" aria-disabled="true"><i class="fas fa-address-card"></i>&nbspContact Us</a>
          </li>
      </ul>
    </div>
</nav>