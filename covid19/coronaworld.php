 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

</head>
<body>

<div class="" id="show0">
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center ">
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="virus.png" class="img-fluid ml-2" height="80" width="80" alt="Responsive image"></a>
		  <p class="text-light display-4">Covid-19</p>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ml-auto">
				    <li class="nav-item">
				      <a class="nav-link text-light" href="#show0">Home</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link text-light" href="#show1" >Symtomes</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link text-light" href="#show2">Precautions</a>
				    </li>
				     <li class="nav-item">
				      <a class="nav-link text-light" href="#show3">About</a>
				    </li>
				 </ul>
			</div>  
	</nav> 
 
</div>
 
<div class="container-fluid" id="cont">
	<img src="fight1.png" height="40" width="40" class="img-fluid mx-auto d-block" alt="Responsive image">
	<p class="text-capitalize text-center">Let's fight together against corona virus</p>

</div>
<div class="bg-light">
	<p class="text-center text-capitalize text-danger display-4" id="top">covid-19 live updates of india</p>

</div>

<div class="table-responsive">
	
	<table class="table table-bordered table-hover table-striped">
	  <thead>
	    <tr class="text-capitalize text-center">
	      <th scope="col">last update</th>
	      <th scope="col">state</th>
	      <th scope="col">confirmed case</th>
	      <th scope="col">active case</th>
	       <th scope="col">recovered</th>
	        <th scope="col">deaths</th>
	    </tr>
	  </thead>
 <?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
while($i < $statescount){
	?>
<tr class="text-capitalize text-center">
	<td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
	<td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
	<td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
	<td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
</tr>	


<?php
  $i++;
}


?>
 


	</table>
	  

</div>

	<div class="container">
		<div class="jumbotron" id="show1">
				<p class="text-center text-muted">Symtomes.</p>
				<p class="text-center text-capitalize">People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness. Symptoms may appear 2-14 days after exposure to the virus. People with these symptoms may have COVID-19:</p>
		</div>		
		<div class="row justify-content-around" id="cardanimate">
				    <div class="card rounded" style="width:15rem;">
				    <img class="card-img-top" src="fever.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body">
				        <h5 class="card-title text-center text-capitalize">Fever</h5>
				       </div>
				  	</div>
				    <div class="card rounded">
				    <img class="card-img-top" src="coughing.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">Cough</h5>
				      </div>
				    </div>
					<div class="card rounded">
				    <img class="card-img-top" src="taste.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">New loss of taste or smell</h5>
				      </div>
				    </div>
				    <div class="card rounded">
				    <img class="card-img-top" src="diarrhea.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">Diarrhea</h5>
				      </div>
				    </div>
		</div>
	</div>	

<div class="container mt-5">
	<div class="jumbotron" id="show2">
		<p class="text-center text-muted">Precautions.</p>
		<h4 class="text-center  text-capitalize">Improve your health by following this tips..</h4>
		<p class="text-center text-capitalize mt-5">Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.
		To prevent the spread of COVID-19:
		Clean your hands often. Use soap and water, or an alcohol-based hand rub.
		Maintain a safe distance from anyone who is coughing or sneezing.
		Wear a mask when physical distancing is not possible.
		Don’t touch your eyes, nose or mouth.
		Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.
		Stay home if you feel unwell.
		If you have a fever, cough and difficulty breathing, seek medical attention.
		Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.
		Masks
		Masks can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.</p>
	</div>	
		<div class="row justify-content-around">
				    <div class="card rounded" style="width:15rem;">
				    <img class="card-img-top" src="mask.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body">
				        <h5 class="card-title text-center text-capitalize ">Wear mask</h5>
				       </div>
				  	</div>
				    <div class="card rounded">
				    <img class="card-img-top" src="handwash.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">wash your hands.</h5>
				      </div>
				    </div>
					<div class="card rounded">
				    <img class="card-img-top" src="workout.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">Doing workout is beneficial for your immunity</h5>
				      </div>
				    </div>
				    <div class="card rounded">
				    <img class="card-img-top" src="food.png"  alt="Card image cap">
				    	<hr></hr>
				      <div class="card-body" style="width:15rem;">
				        <h5 class="card-title text-center text-capitalize">Always eat healthy food.</h5>
				      </div>
				    </div>
		</div>
</div>

<div class="container scrolltop float-right pr-5" >
	<i class="fa  fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
	
</div>

<div class="mt-5">
	<div class="jumbotron" id="show3">
		<p class="text-center text-muted text-capitalize">About covid-19</p>
		<h4 class="text-center text-capitalize mt-3">What is covid-19 (corona virus)</h4>
		<div class="row pt-5 justify-content-center">
			<div class="col-lg-5 col-md-6 col-12 ">
				<img src="corona.jpg" class="img-fluid"  alt="">
			</div>
			<div class="col-lg-6 col-md-6 col-12">	
				<p class="text-mutted text-capitalize">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

				Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

				The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

				The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

				At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
			</div>	
		
		</div>
	</div>
</div>


<footer class="mt-5" >
	<div class="container-fluid bg-danger footer_style">
	<p class="text-light text-capitalize text-center">Copyright by @livecovidupdates</p></div>
	
</footer>







<script type="text/javascript">

		
		$(document).ready(function(){
			$(document).scroll(function(){
				var position = $(document).scrollTop();
				console.log('position');

				if((position > 8) && (position < 18)){

					$('#top').addClass('animate__animated animate__lightSpeedInLeft');
				}
				if((position > 148) && (position < 230)){

					$('#cardanimate').addClass('animate__animated animate__lightSpeedInright');
				}
				if((position > 330) && (position < 450)){

					$('#show2').addClass('animate__animated animate__zoomIn');
				}
				if((position > 470) && (position < 598)){

					$('#show3').addClass('animate__animated animate__flipInX');
				}


				});
		});

		mybutton = document.getElementById("mybtn");

		window.onscroll = function(){scrollfunction()};
			function scrollfunction(){
				if(document.documentElement.scrollTop>100){
					mybutton.style.display = "block";
				}else{
					mybutton.style.display = "none";
				}
			}

		function topfunction(){
			document.documentElement.scrollTop = 0;
		}

	</script>
</body>
</html> 