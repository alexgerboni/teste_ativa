<!DOCTYPE html>
<html>
<head>
  <title>Markt place</title>
   <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
   
    <style>
        .front.row {
            margin-bottom: 30px;

        }
    </style>

     @yield('stylesheets')

</head>
<body>
  <section style="border-bottom: 2px solid #A8834D">
    <div class="container" >
        <div class="row">
        <div class="col-md-10 mt-2">
          <p>Horário de atendimento:2º a 6º das 8h as 17h</p>
        </div>
        <div class="col mt-2">
          <p><img src="{{asset('img/Icon awesome-phone-alt.png')}}" width="15" class="img-fluid"> 19 9444 -44444</p>
        </div>
        </div>
    </div>
  </section>
<section style="background-color: #f8f9fa;">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div  class="col-md-6">
          <a href="#" class="navbar-brand">
              <img src="{{asset('img/logo.png')}}" class="img-fluid mr-auto">
          </a>
      </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-6">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active texto_li">
                  <a class="nav-link" style="color: #A8834D" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #A8834D" href="#">Áreas de atuação</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #A8834D" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" style="color: #A8834D" href="#">Advogados</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link disabled" style="color: #A8834D" href="#">Quem somos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link disabled" style="color: #A8834D" href="#">Contato</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
  </div>
</section>
  <div>
    @yield('content')
  </div>
  <hr>
  <footer>
    <div class="container ">
  <div class="row">
    <div class="col-md-6 mt-4">
      <div>
        <h3 style="font-family: Playfair Display; color: #333333;">Advogados</h3>
        <p style="border-bottom: 3px solid #A8834D; width: 20%"></p>

        <h6 style="font-size: 12px"><img src="{{asset('img/Icon awesome-phone-alt.PNG')}}" style="width: 4%; margin-right: 10px">Telefones
        <p style="margin-left: 32px;font-size: 10px;padding-top: 1em">19 3461-2981</p>
        <p style="margin-left: 32px;font-size: 10px;">19 3461-2981</p>
        </h6>
        </div>
        <div>
        <h6 style="font-size: 12px"><img src="{{asset('img/localizacao.PNG')}}" style="width: 4%; margin-right: 10px">Localização
        <p style="font-size: 10px;margin-left: 32px">
        Rua Jose Ferreira<br> Aranha, 321
        Jd. Girassol<br>
        13465-340
        Americana - SP</p>
        </h6>
      </div>
    </div>
    <div class="col-md-6 mt-4">
      <div>
        <img src="{{asset('img/mapa.PNG')}}" style="  width: 100%">
      </div>
    </div>
  </div>
</div>
<div class="text-center" style="margin-top: 3%">
  <p>Copyright © 2020</p>
  <p>Ferreira Pessoa Advogados Associados</p>
  <p>VIAATIVA</p>
</div>
  </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" 
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
        crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
