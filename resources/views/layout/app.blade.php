<!DOCTYPE html>
<html>
<head>
	<title>Tw max diesel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
  <link rel="stylesheet" type="text/css" href="http://localhost/trabalho/trabalho_max_diesel/public/nav.css">
  
  <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.5/js/all.js"></script>
</head>
<body>
<div class="borda-topo">
  <div class="container ">
      <div class="row">
          <div class="col-md-8 mt-3 mb-0 ml-5">
              <img src="https://themes.muffingroup.com/be/mining/wp-content/uploads/2016/01/mining.png">
          </div>
          <div class=" col mt-4 ml-5">
                <a href="" class="ani-tel" style="color: white;">Quick contact: 3754 - 30574</a>
          </div>
          <hr style="background-color: white; width: 100%;">
      </div>
    <!--<hr style="border: 1px solid red; width: 80%;">-->
  </div>
</div>
<nav class=" navbar sticky-top navbar-expand-sm navbar-dark  menu_wrapper">
  <!-- Menu Hamburguer -->
  <button class="navbar-toggler" data-toggle="collapse" 
  data-target="#navegacao">
  <span class="navbar-toggler-icon"></span>
</button>
<!-- navegacao -->
<div  class="collapse navbar-collapse centralizar-div-nav" id="navegacao" style="margin-right: 30%;">
  <ul class="navbar-nav ml-auto mr-auto" >
    <li class=" li nav-item espaco  {{Route::current()->getName() === 'home' ? 'active bordamenu' : ''}}">
      <a class="nav-link " href="{{route('home')}}"> > Home</a>
    </li>
    <li class="li nav-item espaco  {{Route::current()->getName() === 'produto' ? 'active bordamenu' : ''}}">
      <a class="nav-link " href="{{route('produtos')}}"> > Produtos</a>
    </li>
    <li class="li nav-item espaco  {{Route::current()->getName() === 'catalago' ? 'active bordamenu' : ''}}">
      <a class="nav-link " href="{{route('catalago')}}"> > Cátalago</a>
    </li>
    <li class=" li nav-item espaco  {{Route::current()->getName() === 'contato' ? 'active bordamenu' : ''}}">
      <a class="nav-link " href="{{route('contato')}}"> > Contatos</a>
    </li>
    <li><div class="search-box">
        <input class="search-text" type="search" placeholder="Search">
        <a class="search-btn" href="#">
          <i class="fas fa-search">
            
          </i></a>
      </div></li>
  </ul>
</div>
</nav>
<main role="main">

  @yield('content')

  <!-- FOOTER -->
  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">
        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>


    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
      <hr style="background-color: #161616; width: 100%">
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>