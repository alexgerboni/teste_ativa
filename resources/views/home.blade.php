@extends('layout.layout')
@section('content')
<div id="carouselExampleControls" class="carousel slide imagen" data-ride="carousel">
  	<div class="carousel-inner">
  	   <section class="carousel-item active"><!--controle um inicio-->
  	   	 <div class="container">
  	   	 	<div class="row">
  	   	 			<div>
  	   	 			</div>
			    	<div class="col-md-6" >
			    		<img src="{{asset('img/logo-top.png')}}" width="150" style="margin-bottom:20%;margin-top: 20px"> 
			    		<h1 style="font-family: Montserrat; font-weight: 900; color: white;margin-top:20%" >SEU SITE <span style="color:#613289 ">DIZ MUITO</span>
	                    <span style="color:#613289 ">SOBRE</span> SUA EMPRESA</h1>  
	                    <p style="color: white">Para existir no mundo dos negócios é fundamental estar na Internet.
	                    Mas não basta simplesmente ter um site, você precisa ter um bom site.
	                    Estamos falando de boas tecnologias de desenvolvimento, boas 
	                    práticas e
	                    conteúdo realmente relevante. Se não for assim, seu investimento pode 
	                    não
	                    valer a pena.</p>
			    		<a style="margin-right: 480px; margin-bottom: -100px;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span><p class="mt-2" style="margin-left: 30px">Comece</p><span><img src="{{asset('img/seta-roxa.PNG')}}" style="margin-left: 10px"></span>
					    <span class="sr-only">next</span>
					  </a>  
			    	</div>
				     <div class="col-md-4 indent">
				     	 <div class="imagens">
				     	 	<img class="homem1"  src="{{asset('img/homem.png')}}"alt="Second slide">
				     	 	<img class="robozinho-home" style="width: 300px; margin-right: -200px" src="https://www.viaativa.com.br/media/imagens/robo.webp">
				     	 </div>
				     </div>
				     <div class="col-md-1">
				     	 <img style="border: none; margin-left:-100px;margin-top: -200px" class=" triangulo1 wow animated zoomIn animas" data-wow-duration="10s" src="{{asset('img/triangulo-roxo.png')}}">
				     </div>
				     <div class="col-md-1" >
				     	 <img class="bolinha1 wow animated zoomIn animas active"  style="margin-right:-200px;margin-top: -100px;"  data-wow-duration="10s" src="{{asset('img/bola-roxa.png')}}">
				     </div>
  	   	 	</div>
  	   	 </div>
  	   </section><!--fechmaneto do controle um-->
	   <section class="carousel-item">
	   	 <div class="container">
	   	 	<div class="row">
		   	 	<div class="col-md-6">
		   	 		<img src="{{asset('img/logo-top.png')}}" width="150" style="margin-bottom:20%;margin-top: 20px"> 
				   	<h1 style="font-family: Montserrat; font-weight: 900; color: white;margin-top:20%">PORQUE <span style="color:#613289">MINHA</span> EMPRESA
					<span style="color:#613289">PRECISA</span> DE UM <span style="color:#613289">SITE</span>?</h1>
					<p style="color: white">
						Sabemos que milhões de consumidores fazem pesquisas todos os dias em 
						busca de produtos e serviços pela internet. O comportamento de compra já 
						não é mais como antigamente, em que o cliente tinha que ir até a empresa 
						para obter as informações que desejava.

						Atualmente, estar presente na internet é fundamental para a empresa atrair 
						clientes e aumentar as suas vendas.

						Mas fique ligado, para alcançar resultados positivos, sua empresa precisa de 
						um bom site e que esteja atualizado com o que o mercado exige.
					</p>
				    <a class="carousel-control-prev" style="margin-top: 200px" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span><p class="mt-2" style="margin-left: 30px">Voltar</p><span><img src="{{asset('img/seta-roxa.PNG')}}" style="margin-left: 10px"></span>
					<span class="sr-only">Previous</span>
					</a>
		    	</div>
		    	<div class="col-md-5">
		    		 <img  src="{{asset('img/robozinho.png')}}" alt="first slide">
		    	</div>
		    	 <div class="col-md-1 ">
				     	 <img style="border: none; margin-left:-500px;margin-top: 800px" class="wow animated zoomIn animas"   data-wow-duration="10s" src="{{asset('img/triangulo-roxo.png')}}">
				 </div>
	   	 	</div>
	   	 </div>
	   </section>
  	</div>
</div><!-- fechamento de carrousel 1-->
<div id="carouselExampleControlss" class="carousel slide imagen_secundo" data-ride="carousel">
  	<div class="carousel-inner">
  	   <section class="carousel-item active">
  	   	 <div class="container">
  	   	 	<div class="row">
  	   	 			<div>
  	   	 			</div>
  	   	 			<div class="col-md-1">
				     	 <img style="border: none; margin-left:-100px;margin-top: 100px" class="wow animated zoomIn"  data-wow-duration="10s" src="{{asset('img/bola-azul.png')}}">
				     </div>
				      <div class="col-md-1">
				     	 <img class=" wow animated zoomIn"  style="margin-left:200px;margin-top: 300px"   data-wow-duration="10s" src="{{asset('img/triangulo-azul.png')}}">
				     </div>
				     <div class="col-md-4">
				     	 <img src="{{asset('img/homem2.png')}}" style="margin-left: -600px" alt="Second slide">
				     </div>
				     <div class="col-md-6" >
			    		<h1 style="font-family: Montserrat; font-weight: 900; color: white;margin-top:80%" >QUEM <span style="color: #12CAD6">SOMOS</span>,
						O QUE <span style="color: #12CAD6">FAZEMOS</span>?</h1>  
	                    <p style="color: white">Para existir no mundo dos negócios é fundamental estar na Internet.
	                    Mas não basta simplesmente ter um site, você precisa ter um bom site.
	                    Estamos falando de boas tecnologias de desenvolvimento, boas 
	                    práticas e
	                    conteúdo realmente relevante. Se não for assim, seu investimento pode 
	                    não
	                    valer a pena.</p>
			    		<a style="margin-right: 480px; margin-bottom: -300px;" class="carousel-control-next" href="#carouselExampleControlss" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span><p class="mt-2" style="margin-left: 30px">Mais</p><span><img src="{{asset('img/seta-roxa.PNG')}}" style="margin-left: 10px"></span>
					    <span class="sr-only">next</span>
					  </a>  
			    	</div>
  	   	 	</div>
  	   	 </div>
  	   </section>
	   <section class="carousel-item">
	   	 <div class="container">
	   	 	<div class="row">
	   	 			<div class="col-md-1">
				     	 <img style="border: none; margin-left:-100px;margin-top: 100px" class="wow animated zoomIn"  data-wow-duration="10s" src="{{asset('img/bola-azul.png')}}">
				    </div>
				    <div class="col-md-1">
				     	 <img data-wow-duration="10s"  style="margin-left:300px;margin-top: 700px" src="{{asset('img/triangulo-azul.png')}}" class="wow animated zoomIn " >
					</div>
	   	 		<div class="col-md-4">
		    		 <img  src="{{asset('img/dino.png')}}" alt="first slide" style="margin-left: -400px">
		    	</div>
		   	 	<div class="col-md-6">
				   	<h1 style="font-family: Montserrat; font-weight: 900; color: white;margin-top:80%">QUAL É A NOSSA
					<span style="color:#12CAD6">METODOLOGIA</span>?</h1>
					<p style="color: white">
					Nós somos a Viaativa, e sim, somos diferentes mesmo.
					Nada aqui é clássico ou tradicional, nos gostamos de sair da caixa e mostrar
					aos nossos clientes que o diferente é o novo.
					Somos apaixonados pelo mundo digital e por isso nós não só usamos a 
					tecnologia, nós também desenvolvemos.
					</p>
				    <a class="carousel-control-prev" style="margin-top: 300px" href="#carouselExampleControlss" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span><p class="mt-2" style="margin-left: 30px">Voltar</p><span><img src="{{asset('img/seta-roxa.PNG')}}" style="margin-left: 10px"></span>
					<span class="sr-only">Previous</span>
					</a>
		    	</div>
		    	
	   	 	</div>
	   	 </div>
	   </section>
  	</div>
</div>
@endsection