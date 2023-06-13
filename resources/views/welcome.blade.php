@extends('master')
@section("content")
<style>
  .first-sec {
    margin-top: 70px;
}
.first-sec a{
    color: #9200e7;
    text-decoration: none;
    font-size: 14px;
}
.first-sec h1{
  color: white;
    margin-top: 20px;
    font-size: 60px;
    font-weight: 700;
}
.first-sec p{
    font-size: 25px;
color: whitesmoke;
margin-top: 40px;
}
.color-btn{
    border-radius:3px;
     background: #dfff00;
      color:black; 
    font-weight:500; 
    padding: 10px 35px;
    margin-right: 20px;
}
.not-color-btn{
    border-radius:3px;
     background: #fff;
    font-weight:700;
    border: 1px solid black; 
    padding: 10px 35px;
}
.icon-nav i {
    padding: 11px;
    font-size: 19px;
}
.icon-nav {
    margin-right: 24px;
    margin-top: 13px;
}
img.first-sec-img {
    margin-top: 60px;
}
.featured-sec{
  color: white;
  margin-top: 50px;
  font-size: 48px;
  /* text-decoration: underline; */
  /* text-decoration-color: #9200e7; */
}
.featured-img{
  border-radius: 7px
}
.slick-list.draggable {
  height: 300px;
  padding-top: 55px;
}
.featured-img:hover{
  opacity: 0.7;
  transition: .3s;
transform: scale(1.2);
}
.slide-arrow{
  position: absolute;
  top: 50%;
  margin-top: -15px;
}
.prev-arrow{
  left: -40px;
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
  border-right: 15px solid #9200e7;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.next-arrow{
  right: -40px;
  width: 0;
  height: 0;
  border-right: 0 solid transparent;
  border-left: 15px solid #9200e7;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.featured-btn{
  text-align: center;
}
.featured-btn Button:hover{
  background: #d2f00e;
  color: black;
  border-radius: 3px;
  font-weight: 500;

}
.featured-btn Button{
  width: 200px;
  background: #dfff00;
  color: black;
  border: 1px solid #dfff00;
  padding: 15px 0px;
  font-weight: 500;
  border: none;
  border-radius:3px;
  text-align: center; 
}
.p-featured p{
  color: gray;
  font-size: 20px;
  padding: 0px 35px;
}
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  border-radius: 7px;
  background: #fff;
  padding: 25px;
  margin: 50px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  font-size: 15px;
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width:250px;
    border: none;
  background: #dfff00;
  color: #000;
  margin: 0 0 5px;
  padding: 15px 10px;
  font-size: 18px;
  border-radius: 3px;
}

#contact button[type="submit"]:hover {
  background: #d2f00e;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
#contact-form-container{
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
.form-conatainer{
  background: #000;
}
.bm{
  background: #000;
}
.bb h1{
  color: #fff;
}
.bb h3{
  color: #fff;
}
.bl{
  background:#fff ;
}
.blast{

}
.blast h1{
color: #fff;
}
.blast h2{
  color: #fff;
}
.blast h3{
  color: #fff;
}
.blast button{
  border: none;
background: #dfff00;
color: black;
border-radius: 3px;
font-weight:500;
padding: 10px 25px;
}
</style>
  
    <div class="home-sec bg-dark pb-5 pt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">Prmptly</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                
                </ul>
                    <div class="icon-nav">
                        <i class="icon-twitter"></i> 
                        <i class="icon-github"></i> 
                        <i class="icon-facebook"></i> 
                    </div>
                    @if (auth()->check())
                    <a href="{{ route('logout') }}" class="btn px-4 py-2" style="border-radius: 3px; border: 1px solid black; background: white; color: black; font-weight: 300;" type="submit">Logout</a>
                @else
                    <a href="{{ route('form') }}" class="btn px-4 py-2" style="border-radius: 3px; border: 1px solid black; background: white; color: black; font-weight: 300;" type="submit">Login</a>
                @endif
                
              </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="first-sec">
                        
                        <div>
                            <h1>Simplest rewards<br> program for local<br> businesses</h1>
                        </div>
                        <div>
                            <p class="text-gray">Get a 2X increase in return rates and a 30% increase in revenue with digital reward cards.</p>
                        </div>
                        <div class="first-sec-btn">
                            <Button class="btn color-btn">Explore</Button>
                            <Button class="btn not-color-btn">Contact</Button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <img class="first-sec-img" src="/webupload/man-working-on-laptop-2741035-2280943.png" width="100%" alt="">
                </div>
    
            </div>
        </div>
        
    </div>
    <div class="container">
      <h1 class="text-center text-dark featured-sec">Install 10 times faster</h1>
      <h4 class="text-center">Digital loyalty cards for Apple Wallet and Google Pay</h4>
      <div class="row py-5">
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stamps</h5>
                  <p class="card-text">Works on the mechanics: Buy 10 and get the 11th as a gift.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Cashback</h5>
                  <p class="card-text">Give and redeem customers points for purchases.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col"></div>s --}}

      </div>
      <div class="row py-5">
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stamps</h5>
                  <p class="card-text">Works on the mechanics: Buy 10 and get the 11th as a gift.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Cashback</h5>
                  <p class="card-text">Give and redeem customers points for purchases.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col"></div>s --}}

      </div>
      <div class="row py-5">
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stamps</h5>
                  <p class="card-text">Works on the mechanics: Buy 10 and get the 11th as a gift.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3" style="max-width: 580px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Cashback</h5>
                  <p class="card-text">Give and redeem customers points for purchases.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <button class="card-button btn btn-white text-dark border-dark px-5 ">Install Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col"></div>s --}}

      </div>
      <div class="p-featured text-center">
        <p>Welcome to Prmplty, the world’s best marketplace for buying & selling AI prompts. Our innovative tools and technology are designed to make ai development and prompt engineering faster, easier, and more effective than ever before.</p>
      </div>
      <div class="featured-btn">
        <Button>Browse for more</Button>
      </div>
    </div>
    <div class="form-conatainer px-5 my-5">
      <div class="row">
        <div class="col-lg-6 ">
          <form id="contact" action="" method="post">
            <h3 class="text-center">Contact Us</h3>
            <h4 class="text-center">Contact us for custom quote</h4>
            <fieldset>
              <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
              <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
              <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
            </fieldset>
            <fieldset>
              <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset style="text-align: center;">
              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
            <p class="copyright">We appreciate your queries <a href="https://colorlib.com" target="_blank" title="Colorlib">Prmptly</a></p>
          </form>
        </div>
        <div class="col-lg-6 d-flex align-content-center flex-wrap ">
          <div class="">
            <img src="{{url('webupload/tech_neoncircuitboard_857021704_medium_lc5h05.jpeg')}}" width="100%" height="100%" alt="">
          </div>
        </div>

      </div>

    </div>
    <div class="row bm">
      <div class="col-6">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('webupload/technology-and-us.jpg')}}" height="400px" class="d-block h-100 w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('webupload/images.jpeg')}}" height="400px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('webupload/Technology-Watch.jpg')}}" height="400px" class="d-block h-100 w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-6 bb flex-wrap d-flex align-content-center">
        <div class="">
          <h1>Client's Response</h1>
          <h3>Based on the current clients. Have a look</h3>
        </div>
      </div>
      <div class="col-4 d-flex flex-wrap align-content-center blast px-4">
        <h1>Something something</h1>
        <h2>Lorem, ipsum.</h2>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
        <p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, soluta. sit amet consectetur, adipisicing elit. Doloremque, eum!</p>
        <button class="">Open this now</button>
      </div>
      <div class="col-8 bl">
        <img src="{{url('webupload/hands.png')}}" alt="">
      </div>
    </div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="">

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" placeholder="Email address" class="form-control" />
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"> Prmptly.com</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>
      $('.slick').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    </script>


@endsection




