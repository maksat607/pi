<!DOCTYPE html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>One Million Lines</title>

    <!-- This is our Google Arvo font and Font-Awesome -->
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- form: -->
            <section>
			   <div class="jumbotron">
      <div class="container">


                <div class="page-header">
                    <h1>Registration</h1>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                    <form  method="post" action="register.php" class="form-horizontal">
                       
                       

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Username</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="username_r" id="username_r"/>
                                </div>
                            </div>


              


                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email address</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="email_r"  id="email_r"/>
                                </div>
                            </div>

        
                         

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="password_r" id="password_r" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Retype password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword"/>
                                </div>
                            </div>
   

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" id="submit" value="Submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
					<?php
echo '<p><a href="login.php"><h1>SIGN IN</h1></a></p> ';
?>
					<script>
jQuery(function(){
        $("#submit").click(function(){
        $(".error").hide();
        var hasError = false;
        var passwordVal = $("#password_r").val();
        var checkVal = $("#confirmPassword").val();
		 var username_r = $("#username_r").val();
        var email_r = $("#email_r").val();
		if(passwordVal==""&&checkVal==""&&username_r==""&&email_r==""){
			$("#confirmPassword").after('<span class="error">Please fill it out.</span>');
            hasError = true;
        }else if (passwordVal == '') {
            $("#confirmPassword").after('<span class="error">Please enter a password.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#confirmPassword").after('<span class="error">Please re-enter your password.</span>');
            hasError = true;
        } else if (username_r == '') {
            $("#confirmPassword").after('<span class="error">Please enter your username.</span>');
            hasError = true;
        } else if (email_r == '') {
            $("#confirmPassword").after('<span class="error">Please enter your email.</span>');
            hasError = true;
                
        } else if (passwordVal != checkVal ) {
            $("#confirmPassword").after('<span class="error">Passwords do not match.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});
</script>
                </div>
               </div>
			</div>
				
				
            </section>
            <!-- :form -->
        </div>
    </div>




</body>
</html>
