@extends('layout.app')
@section('content')
<div class="content">
  <img src="{{asset('white/img/250.png')}}" width="100%" height="500">
</div>
<!--<div class="capa1">/inicio seção section 1 --><!--Div pai
  <div class="container">
    <div class="row">

      <div class="col-12 mt-4">
        <div class="align-self-center tamanhotext wow animated fadeInLeft ">
          <h1 style="text-align: center;font-family: arial">Aenean pharetra pharetra ante
          home_mining_sep</h1>
          <hr>
        </div>
      </div>
    </div>
  </div>
 
  <div class="container">
    <div class="row" >
      <div class="col-4">
        <div class="align-self-center tamanhotext wow animated fadeInLeft ">
         <h3>Cras volutpat tempus</h3>
         <p>
          Cras volutpat tempus
          Lorem ipsum dolor sit amet nunc. Maecenas semper tellus. In congue ac, sodales arcu, dapibus eu, auctor neque ut tortor. Integer neque placerat eget, blandit libero. Suspendisse adipiscing. Nunc gravida. In tempus erat volutpat. Nullam dui sit amet, orci. Vestibulum ligula. Aenean scelerisque, quam ultrices vel, purus. Aliquam orci. Proin aliquam convallis.

          Cras volutpat tempus nunc eu neque odio non dui. Morbi massa quis dolor. Donec porttitor
        </p>
        <hr>
      </div>
    </div>
    <div class="col-4">
      <div class="align-self-center tamanhotext wow animated fadeInLeft ">
       <h3>Cras volutpat tempus</h3>
       <p>
        Cras volutpat tempus
        Lorem ipsum dolor sit amet nunc. Maecenas semper tellus. In congue ac, sodales arcu, dapibus eu, auctor neque ut tortor. Integer neque placerat eget, blandit libero. Suspendisse adipiscing. Nunc gravida. In tempus erat volutpat. Nullam dui sit amet, orci. Vestibulum ligula. Aenean scelerisque, quam ultrices vel, purus. Aliquam orci. Proin aliquam convallis.

        Cras volutpat tempus nunc eu neque odio non dui. Morbi massa quis dolor. Donec porttitor
      </p>
      <hr>
    </div>
  </div>
  <div class="col-4">
    <div class="align-self-center tamanhotext wow animated fadeInLeft ">
      <h3>Cras volutpat tempus</h3>
      <p>
        Cras volutpat tempus
        Lorem ipsum dolor sit amet nunc. Maecenas semper tellus. In congue ac, sodales arcu, dapibus eu, auctor neque ut tortor. Integer neque placerat eget, blandit libero. Suspendisse adipiscing. Nunc gravida. In tempus erat volutpat. Nullam dui sit amet, orci. Vestibulum ligula. Aenean scelerisque, quam ultrices vel, purus. Aliquam orci. Proin aliquam convallis.

        Cras volutpat tempus nunc eu neque odio non dui. Morbi massa quis dolor. Donec porttitor
      </p>
      <hr>
    </div>
  </div>
</div>
</div>
</div>
final da section 2-->
<div class="capa2"><!--inicio carrosel-->
  <div class="container controle-carsel">
    <h1 class="text-centralizar"style="font-family:Kanit, Arial, Tahoma, sans-serif; color: black;">Cras porta nisi suspendisse porta</h1>
    <hr style="width: 10%;border-bottom: 5px solid orange;border-bottom-style: dotted;">
    <div class="carousel slide" id="main-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
        <li data-target="#main-carousel" data-slide-to="2"></li>
        <li data-target="#main-carousel" data-slide-to="3"></li>
      </ol><!-- /.carousel-indicators -->
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
            <div class="comtainer">
              <div class="row">
                <div class="col-4" style="margin-bottom: 100px;"> 
                 <img src="{{asset('white/img/250.png')}}" style="width: 100%;">
                 <hr>
               </div>
               <div class="col-4">
                 <img src="{{asset('white/img/250.png')}}" style="width: 100%;">
                 <hr>
               </div>
               <div class="col-4">
                 <img src="{{asset('white/img/250.png')}}" style="width: 100%;">
                 <hr>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="carousel-item">
        <div class="carousel-caption d-none d-md-block">
          <img src="{{asset('white/img/250.png')}}" style="width: 50%;">
          <h3>Lorem ipsum dolor</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse vitae exercitationem fugit, numquam minus!</p>
        </div>
      </div>
      <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only" aria-hidden="true">Prev</span>
      </a>
      <a href="#main-carousel" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only" aria-hidden="true">Next</span>
      </a>
    </div><!-- /.carousel -->
  </div><!-- /.container -->
</div><!--fechamento carrosel-->
</div>
<section class="text-center"> 
  <div class="container">
    <div class="row">

      <div class="col-md-1" id="menu" style="height: 100px;padding-left: 0em; border:none;">
       
          <button style= "border: none;padding-right: 2em;" class="mb-1 botao ativo" id="layer1">Missão</button>
          <button style= "border: none;padding-right: 2.7em;"   class="mt-1 botao " id="layer2">Visão</button>
          <button style= "border: none;padding-right: 2em;" class="mt-1 botao" id="layer3">Valores</button>
       
      </div>
      <div class="col-md-4" style="border-left:1px solid grey; height: 500px;">
      <div id="all" style="margin-top: 0px;
      height:450px;
      overflow: hidden;">
        <div  id="layer1">
            <h1>Nulla imperdiet sit amet magna</h1>
          <p>
            Morbi et pharetra nunc egestas metus
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantMorbi et pharetra nunc egestas metus
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum.ium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum.
          </p>
        </div>
        <div id="layer2">
          <h1>Suspendisse pellen tesque dui non felis</h1>
          <p class="box">sssssssss
           Morbi et pharetra nunc egestas metus
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
           Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum.
         </p>
       </div>
        <div id="layer3">
          <h1>Morbi et pharetra nunc egestas metus</h1>
          <p>
            Morbi et pharetra nunc egestas metus
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum.
         </p>
        </div>
      </div>
    <div class="text-left mt-2" style="margin-top: -15%;">
      <button class="btn btn-outline-warning">Loren ipusam</button>
    </div>
 </div>
 <div class="col">
  <img src="{{asset('white/img/202.png')}}" style="width:70%;">
</div>
</div>
</div>
</section>
<hr>
<section>
  <div class="container">
    <div class="row">
     <div class="col mb-4">
      <img src="{{asset('white/img/202.png')}}" style="width:80%;">
    </div> 
    <div class="col-md-3">
      <h1 class="">nunc egestas metus
      </h1>
      <p class="">
       Morbi et pharetra nunc egestas metus
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
     </p>
     <div class="textcentralizar">
      <button type="button" class="btn btn-outline-warning">Read more About us</button>
    </div>   

    <h1 class="">Morbi et
    </h1>
    <p class="">
     Morbi et pharetra nunc egestas metus
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
   </p>
   <div class="textcentralizar">
    <button type="button" class="btn btn-outline-warning">Read more About us</button>
  </div>  
</div>
<div class="col-md-3 mb-4">
  <h1 class="">nunc egestas metus
  </h1>
  <p class="">
   Morbi et pharetra nunc egestas metus
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
 </p>
 <div class="textcentralizar">
  <button type="button" class="btn btn-outline-warning">Read more About us</button>
</div>   
<h1 class="">Morbi et
</h1>
<p class="">
 Morbi et pharetra nunc egestas metus
 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
</p>
<div class="textcentralizar">
  <button type="button" class="btn btn-outline-warning">Read more About us</button>
</div>  
</div>
</div>
</div>
</section>
<section class="imagem-rodape">
  <div class="container">
    <div class="row">
      <div>
        <h1 class="text-centralizar mt-4 mb-4" style="color: white;">Nulla eu scelerisque enim. Suspendisse posuere aliquet arcu a aliquet. Aenean velit augue; tristique quis mi ac, porttitor aliquet dolor. Aliquam bibendum amet.</h1>
        <hr>
      </div>
      <div class="col mb-2">
        <img src="https://themes.muffingroup.com/be/mining/wp-content/uploads/2016/01/home_mining_map.png">
      </div> 
      <div class="col-md-3 mb-4">
        <img src="{{asset('white/img/120.png')}}" class="mt-4 ml-5 mb-3">
        <h5 style="color: white;">LOREM IPSUM
        </h5>
        <p class="" style="color: white;">
         Integer non egestas turpis, eu venenatis ipsum. Donec nec mi sed lorem cursus tellus.
         Dignissim pretium et sit amet augue. Maecenas tincidunt cursus tellus, ut sodales nullam.
       </p>
       <div class="textcentralizar">
        <button type="button" class="btn btn-outline-warning">Read more About us</button>
      </div>     
    </div>
    <div class="col-md-3" style="margin-bottom: 10%;">
      <img src="{{asset('white/img/120.png')}}" class=" mt-4 mb-3 ml-5">
      <h5 style="color: white;">LOREM IPSUM
      </h5>
      <p class="" style="color: white;">
       Integer non egestas turpis, eu venenatis ipsum. Donec nec mi sed lorem cursus tellus.
       Dignissim pretium et sit amet augue. Maecenas tincidunt cursus tellus, ut sodales nullam.
     </p>
     <div class="textcentralizar">
      <button type="button" class="btn btn-outline-warning">Read more About us</button>
    </div>     
  </div>
</div>
</div>
</section>
<div style="border:none;background-color: black;padding-top: 1em; padding-bottom: 1em;" class="mt-0">
  <h2 class="text-aliamento" style="color: white;font-weight: 100;">Lorem ipsum dolor sit amet consectetur adipisicin</h2>
  <hr style="background-color: #161616; width: 100%">
</div>

<style type="text/css">
  .botao {
    padding: 1px 1px;
    font-size: 18px;
    width: -100%;
    background-color: transparent;
}
.ativo, .botao:hover {
    color: orange;
    background-image: url(white/img/350.png);
    background-repeat: repeat-y;
    background-position: right;
}
</style>

<script>
    function tableshowhide(a,b,c){
      len = menu.childElementCount; 
      closeall();

      for(i=0; i<len;i++){
        menu.children[i].onclick = function(){
          closeall();
          all.children[this.id].style.display="block";
        }
      }
      function closeall(){
        for(i=0;i<all.childElementCount;i++){
          all.children[i].style.display= "none";
        }
      }
      menu.children[c].click();
    }

    tableshowhide("menu", "all", "layer1");

    var header = document.getElementById("menu");
    var btns = header.getElementsByClassName("botao");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("ativo");
      current[0].className = current[0].className.replace(" ativo", "");
      this.className += " ativo";
    });
  }
</script>
@endsection