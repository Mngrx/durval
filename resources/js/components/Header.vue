<template>
	<div id="header" class="container-flex">
		<div id="header" class="container">
			<div class="row">
				<div class="col-sm-2 bg-white text-center">
					<img :src="'img/logo-durval.png'" alt="" srcset="">
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-12">
							<nav class="navbar navbar-expand-lg navbar-light">							
								<div class="collapse navbar-collapse" id="navbar-superior">
									<ul class="nav navbar-nav">											
										<li><a href="#"><img :src="'img/usa.png'" width="24" height="24" alt="" class="rede-social"></a></li>
										<li><a href="#"><img :src="'img/spain.png'" width="24" height="24" alt="" class="rede-social"></a></li>
									</ul>
									
								</div>									
								<a href="https://www.instagram.com/"><img :src="'img/instagram.png'" width="24" height="24" alt="" class="rede-social"></a>
								<a href="https://www.facebook.com/"><img :src="'img/facebook.png'" width="24" height="24" alt="" class="rede-social"></a>
								<a href="https://twitter.com/"><img :src="'img/twitter.png'" width="24" height="24" alt="" class="rede-social"></a>
								<a href="https://www.youtube.com/"><img :src="'img/youtube.png'" width="24" height="24" alt="" class="rede-social"></a>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="container">
								<nav class="navbar navbar-expand-lg navbar-light">							
									<div class="collapse navbar-collapse" id="navbar-inferior">
										<div class="navbar-nav justify-content-between">
											<h6><a class="nav-item nav-link" href="#">A CASA</a></h6>
											<h6><a class="nav-item nav-link" href="#">DIAGNÓSTICO PRECOCE</a></h6>
											<h6><a class="nav-item nav-link" href="#">PROJETOS</a></h6>
											<h6><a class="nav-item nav-link" href="#">COLABORE</a></h6>
											<h6><a class="nav-item nav-link" href="#">MÍDIA</a></h6>
											<h6><a class="nav-item nav-link" href="#">PARCEIROS</a></h6>
											<h6><a class="nav-item nav-link active" href="#">FALE CONOSCO</a></h6>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<button class="button btn-danger text-center text-white" id="doe-agora"><span id="coracao-amarelo">&#10084;</span> DOE AGORA</button>
				</div>
			</div>
		</div>
	</div>
	
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

$bg-color-yellow: #f6c602;
$font-color-yellow: #f6ee33;

#header {	
    // height: 140px;
    background-color: $bg-color-yellow;
}

#doe-agora {
	margin-top: 15%;
	width: 100%;
	height: 60%;
	font-size: 15px;	
	border-radius: 20px;
}

#coracao-amarelo {
	color: $font-color-yellow;
}

#navbar-superior {
	padding: 5px 5px 15px 2px;
	margin-left: 25px;
}

.rede-social {
    border-radius: 50px;
    margin: auto;
    margin-right: 5px;
    margin-top: 15px;    
	background-color: white;
    border: #f5c501;
    border-width: 2px;
    // border-color: rgba(180, 180, 180, 0.9);
    border-style: solid;
}

/* Tutorial W3Schools */
.navbar {
	width: 100%;
	overflow: auto;
 	background-color: $bg-color-yellow;
}
#navbar-inferior .nav-link {
   	// padding-right: 0.8rem;
	margin-left: 10px;
}
.navbar a {
  	float: left;	
	color: white;
	text-decoration: none;
	font-size: 12px;
	text-align: center;
}

</style>
