

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>khobkunkubBot Discord Music</title>
<link rel="icon" href="images/512x512.png">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/slideshow.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/countup.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/v4-shims.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<!--<script type="text/javascript" src="js/brands.min.js"></script>-->

<style>
	body
	{
	    font-family: 'Kanit', serif;
	    font-size: 12px;
	}
	
	.shadowbox {
		background: none!important;
		border: 2px inset rgba(0,0,0,0.2)!important;
		border-radius: none;
		-webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
	}
</style>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip({html: true});
  $('[data-toggle="tooltip_visb"]').tooltip({trigger: 'manual'}).tooltip('show');
})
</script>
	</head>
	<body>
		<script>
			function Modal_ALert(message,type = "default")
			{
				$('#alert_box').modal('show');

				if(type == "error"){
					class_name = "alert-danger";
				}else if(type == "warning"){
					class_name = "alert-warning";
				}else if(type == "success"){
					class_name = "alert-success";
				}else{
					class_name = "alert-primary";
				}
				$('#alert_box #text_message').html('<div id="alert" class="alert '+ class_name +' alert-dismissible fade show" role="alert" align="left">' +
								 message +
								'</div>');
			}
		</script>
		
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0.8)">
	<div class="container">
	  	<a class="navbar-brand" style="font-family: raleway" href="?page=home">khobkunkubBot</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
	  	</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
		  		<li class="nav-item">

				<?php if(@$_GET['page'] == "home" ) {
                }else{
                } ?>
					<a class="nav-link active" href="./?page=home"><i class="fa fa-fw fa-home"></i>&nbsp;หน้าแรก</a>
		  		</li>
				<a class="nav-link active" href="./?page=rankclan"><i class="fa fa-fw fa-user"></i>&nbsp;คำสั่ง</a>
		  		</li>
        <a class="nav-link active" href="./?page=support"><i class="fa fa-comments-o"></i>&nbsp;ซัพพอร์ต</a>
		  	</li>
			</li>
        <a class="nav-link active" href="./?page=donate"><i class="fa fa-fw fa-money-bill-alt"></i>&nbsp;โดเนท</a>
		  	</li>
       <a class="nav-link active" href="./?page=viewidx?22834909"><i class="fas fa-archive"></i>&nbsp;บันทึกการทำงาน</a>
		  	</li>
			
			
	</nav>
	<br>
		<div class="container" style="margin-top:0.1rem;">
			<div class="row">
				<div class="col-sm-12" style="margin-bottom: 10px;">
					<div class="card" id="header_stat">
	<div class="card-body" style="padding: 15px; border-bottom:4px ;position: relative; font-size:18px;">
		<center>
			<i class="fa fa-server"></i> สถานะบอท : <span style="color: #6BFC3D">
      <i "cfa-circle-o-notch fa-spin"></i> Online !</span>  
	</div>
 </div>
</div>
  <?php
  #color code #6BFC3D
  ?>
  <?php if(@$_GET['page'] == "rankuser" ) {
    include("rankuser.php");
    }else if(@$_GET['page'] == "rankclan" ) {
    include("rankclan.php");
    }else if(@$_GET['page'] == "viewidx?22834909" ) {
    include("news1.php");
    }else if(@$_GET['page'] == "login" ) {
    include("login.php");
    }else if(@$_GET['page'] == "shop" ) {
    include("shop.php");
    }else if(@$_GET['page'] == "logout" ) {
    include("logout.php");
    }else if(@$_GET['page'] == "register" ) {
    include("register.php");
	}else if(@$_GET['page'] == "support" ) {
    include("support.php");
	}else if(@$_GET['page'] == "donate" ) {
    include("donate.php");
	}else if(@$_GET['page'] == "nowall" ) {
    include("web.php");
	}else if(@$_GET['page'] == "nickcolor" ) {
    include("nickcolor.php");
	}else if(@$_GET['page'] == "change_password" ) {
    include("changepassword.php");
	}else if(@$_GET['page'] == "code" ) {
    include("code.php");
    }else{
    include("home.php");
    } ?>

				</div>
			</div>
		
</div>


	</body>
</html>
>
			</div>
		
</div>


	</body>
</html>
