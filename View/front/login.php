<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
            
          </div>

        </form>
        <div class="copy-text">ArtMusic <i class="fa fa-heart"></i> <a href="index.php?action=forgetps">Forget password</a></div>
      </div>
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block img-fluid" src="Assets/front/images/bn1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
            <img class="d-block img-fluid" src="Assets/front/images/bn2.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
            <img class="d-block img-fluid" src="Assets/front/images/bn3.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>