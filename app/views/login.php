<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin - Bootstrap Themes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/theme.css">

    <script type="text/javascript" src="<?php echo URLROOT; ?>public/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>public/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="login-box">
                <div class="title"><h3>Admin</h3></div>
                <div class="progress hidden" id="login-progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            Log In...
                          </div>
                        </div>
                    <div class="alert alert-success hidden" id="login-message" role="alert">
                                        <i class="fa fa-check"></i> Login Success. Please wait for loading.
                                    </div>
                <div class="box">
                    <form id="login-form" action="<?=URLROOT; ?>users/login" method="POST">
                        
                        
                        <div class="control">
                            <div class="label">Email Address</div>
                            <input type="text" class="form-control" name="email" />
                            <?php 
                                  if(!empty($data['emailError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['emailError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="control">
                            <div class="label">Password</div>
                            <input type="password" class="form-control" name="password" />

                                <?php if(!empty($data['passwordError']))
                                {echo "<br><div class='alert alert-danger' role='alert'>
                                    ".$data['passwordError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="login-button">
                            <input type="submit" class="btn btn-orange" value="Login"></button>
                        </div>
                    </form>
                </div>
                <div class="info-box">
                   <span class="text-right"><a href="#">Forgot password?</a></span>
                   <div class="clear-both"></div>
                </div>
        </div>
    </div>
    <script type="text/javascript">
       /* $(function() {
            $("#login-form").submit(function() {
                $("#login-progress").removeClass("hidden");

                setTimeout(function(){
                    $("#login-progress").addClass("hidden");
                    $("#login-message").removeClass("hidden");
                    setTimeout(function(){
                        window.location = "<?=URLROOT?>users/login";
                       // window.location.assign("users/login")
                    },1000);
                },1000);
                return false;
            });
        });*/
    </script>
</body>

</html>
