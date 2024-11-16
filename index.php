
<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>Checker</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="vertical-layout" style="background: rgba(0, 0, 0, .5) url('https://images6.alphacoders.com/910/910149.jpg');
background-blend-mode: darken;');
  background-position: center;
			 background-repeat: repeat;
			 background-size: cover;
			 height: 100%;">
    <style>
		h5,h4{
			color:white;
		}
		.text-center{
			background-color:#031e1d;
			border:1px solid #ededed;
			border-radius:5px;
		}
		textarea{
			color:white;
			resize: none;
		}
		.text-center::placeholder{
			color:grey;
		}
		.text-center:focus{
			background-color:#031e1d;
		}
		textarea::-webkit-scrollbar{
  			width: 5px;
 			background-color: #031e1d;
		}
		textarea::-webkit-scrollbar-thumb{
 			border-radius: 10px;
  			background-color: #1b3435;
		}
		.lista_reprovadass{
			color:#747474;
		}
		.card-body{
			background-color: #0b2728;
			border-radius:3px;
		}
		.text-center{
			border:none;
		}
		.badge-success,.btn-success{
			background-color: #031e1d;
			color:white;
			border:none;
		}
		.btn-success:hover{
			background-color: #031e1d;
			border:none;
			color:grey;
			shadow:hidden;
		}
		.aprovadas{
			background-color: #ffffff;
			color:black;
		}
		.badge-danger{
			background-color: #031e1d;
			color:white;
		}
		.html body .content .content-wrapper{
			background-color:#0b2728;
		}
	    .text-danger {
            color: #101010  !important;
		}
		.btn-bg-gradient{
  			background-image: linear-gradient(to right, #FF8008 0%, #FFC837  51%, #FF8008  100%);
   			margin: 5px;
			width:49%;
    		padding: 12px 40px;
    		text-align: center;
    		text-transform: uppercase;
    		transition: 0.5s;
    		background-size: 200% auto;
    		color: white;
    		box-shadow: 0 0 20px #eee;
    		border-radius: 5px;
    		display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}
  		.btn-bg-gradient:hover{
   			background-position: right center; /* change the direction of the change here */
    		color: #fff;
    		text-decoration: none;
  		}
		.btn-bg-gradient-x{
			background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
            margin: 5px;
            padding: 12px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}
		.btn-danger{
            color: #fff; 
            background-color: #031e1d;
		}
	    .btn-danger {
            color: #fff;
            border-color: #031e1d;
            background-color: #031e1d;
		}
  		.btn-bg-gradient-x:hover{
			background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
		
  		}
		.statusbar{
			height:320px;
			padding-top:50px;
		}
		.hr-statusbar{
			border:none;
			height:1px;
			background-color:#3c5c7c;
		}
		.badge-primary
{
    background-color: #031e1d;
}
.badge-primary.badge-glow
{
    -webkit-box-shadow: 0 0 10px #031e1d;
            box-shadow: 0 0 10px #031e1d;
}
.badge-primary[href]:hover,
.badge-primary[href]:focus
{
    background-color: #031e1d;
}
.btn-primary
{
    color: #fff; 
    background-color: #031e1d;
}
.btn-primary:hover
{
    color: #fff; 
    border-color: #031e1d;
    background-color: #031e1d;
    -webkit-box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302);
            box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302);
}
.btn-primary:focus,
.btn-primary:active
{
    color: #fff; 
    border-color: #031e1d;
    background-color: #031e1d;
    -webkit-box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302) !important;
            box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302) !important;
}
.btn-primary.btn-glow
{
    color: #031e1d; 
    -webkit-box-shadow: 0 1px 20px 1px rgba(105, 103, 206, .6);
            box-shadow: 0 1px 20px 1px rgba(105, 103, 206, .6);
}

.btn-outline-primary
{
    color: #6967ce; 
    border-color: #6967ce;
    background-color: transparent;
}
.btn-outline-primary:hover
{
    color: #fff !important; 
    background-color: #031e1d;
    -webkit-box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302) !important;
            box-shadow: 0 1px 2px 0 rgba(105, 103, 206, .451), 0 1px 3px 1px rgba(105, 103, 206, .302) !important;
}
.btn-outline-primary.btn-glow
{
    -webkit-box-shadow: 0 1px 20px 1px rgba(105, 103, 206, .6);
            box-shadow: 0 1px 20px 1px rgba(105, 103, 206, .6);
}

input[type='checkbox'].bg-primary + .custom-control-label:before,
input[type='radio'].bg-primary + .custom-control-label:before
{
    background-color: #031e1d !important;
}
.btn-primary
{
    color: #fff;
    border-color: #031e1d;
    background-color: #031e1d;
}
.btn-primary:hover
{}
.text-success
{
    color: #101010  !important;
}

a.text-success:hover,
a.text-success:focus
{
    color: #101010  !important;
}
    color: #fff;
    border-color: #4340c2; 
    background-color: #4c4ac5;
	</style>
    <div class="app-content content" style="display:block;">
    <div class="content-wrapper" style="">
    <div class="content-body" >
  	<div class="mt-2"></div>
	<div class="row" style="max-width: 700px; margin: auto;">    
		<div class="col-md-8">
			<div class="card" style="background-color:transparent;">
				<div class="card-body text-center">
					<h4 class="mb-2"><strong></strong></h4>
					<textarea rows="8" class="form-control text-center form-checker mb-2" placeholder=""></textarea>
					<button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i></button>
					<button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i></button>
				</div>
			</div>
		</div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>Charged<span class="badge badge-success float-right charge">0</span></h5><hr>
                    <h5>Live<span class="badge badge-success float-right aprovadas">0</span></h5><hr>
                    <h5>Dead<span class="badge badge-danger float-right reprovadas">0</span></h5><hr>
                    <h5>Total<span class="badge badge-primary float-right carregadas">0</span></h5><hr>
                    <h5>Limit<span class="badge badge-secondary float-right">Unlimited</span></h5>
                    <label class="form-control-label" style="margin-left: 10px; margin-bottom: 20px" for="inputcvv"></label>
                </div> 
            </div>
        </div>
        <div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
					<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> Charged</h4>					
			        <div id='lista_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
					<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> Live</h4>					
			        <div id='lista_aprovadas'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
					<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> Declined</h4>		
					<div id='lista_reprovadas'></div>
				</div>				
			</div>
		</div>
    </div>
    </div>
    </div>
    </div>
    </div>
<script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(){


$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#lista_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#lista_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#lista_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'Removed!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#lista_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'Copied!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_charge = document.getElementById('lista_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-copy').click(function(){
	Swal.fire({title: 'Copied!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_lives = document.getElementById('lista_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){

var lista = $('.form-checker').val().trim();
var array = lista.split('\n');
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!lista){
	Swal.fire({title: 'No card detected!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

Swal.fire({title: 'Processing!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
if(total > 100000){
  Swal.fire({title: 'No more than 1000 cards!!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.forEach(function(data){
var callBack = $.ajax({
	url: 'checker.php?lista=' + data,
	success: function(retorno){
		if(retorno.indexOf("#CHARGED") >= 0){
			Swal.fire({title: '+1 Charged!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#lista_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("#LIVE") >= 0){
			Swal.fire({title: '+1 Live!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#lista_aprovadas').append(retorno);
			removelinha();
			lives = lives +1;
		    }else{
			$('#lista_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + lives + dies;
	    $('.charge').text(charge);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'Finished!!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
		}
        }
      });
      $('.btn-stop').click(function(){
      Swal.fire({title: 'Paused!!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	return false;
      });
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}


  
	
</script>

  </body>
</html>