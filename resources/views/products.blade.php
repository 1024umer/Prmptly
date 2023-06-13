@extends('master')
@section("content")
<style>
  .sec-bg{
    background-image:url('/webupload/sec-bg.jpg');
    width:100%;
    height:100%;
    padding:100px;
  }
  .sec-bg h1{
    padding-left: 100px;
  }
</style>
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
<div class="sec-bg my-5">
  <h1 class="text-white">Products</h1>
</div>

<main class="container">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Apple Cards</h1>
        <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="container">
      <div class="row my-5">
      <div class="col-6 bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">
        </div>
        </div>
        <div class="col-6 bg-light  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

          </div>
        </div>
        
    </div>

  
      <div class="row my-5">
        <div class="col-6 bg-light  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">
        
        </div>
        </div>
        <div class="col-6 bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

        </div>
        </div>
        
      </div>
  
      <div class="row my-5">
      <div class="col-6 bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

        </div>
        </div>
        <div class="col-6 bg-light  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

        </div>
        </div>
      </div>
  
      <div class="row">
       <div class="col-6 bg-light  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

        </div>
        </div>
        <div class="col-6 bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="{{url('webupload/phone.jpeg')}}" style="height: 230px; width:175px;" class="img-fluid rounded-start p-3" alt="...">

        </div>
        </div>
        
      </div>
  </main>

  @endsection