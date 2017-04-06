<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Dermsleuth Admin</title>
    <!--Materialize core CSS -->
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/dist/css/materialize.min.css" rel="stylesheet">

    <!-- Font Awesome Min CSS -->
    <link href="<?php echo $this->Url->build('/', TRUE); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Style css -->
    <!-- Custom CSS -->
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bower_components/bootstrap/dist/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="bower_components/bootstrap/dist/js/ie-emulation-modes-warning.js"></script>-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?= $this->Url->build('/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Materialize JS -->
    <script src="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/dist/js/materialize.min.js"></script>
    <script src="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/js/forms.js"></script>
  </head>
  <body class="grey lighten-5 logBodyPadd">

      <main>
        <div class="loginWrap">

          <div id="login-Bg" class="loginBg light-blue lighten-5 z-depth-1"></div>
          <div class="container" style="position:relative; z-index:999;">
            <div class="login-wrap" id="login-page" style="padding-top:50px;">
                <div class="row">
                  <div class="input-field col s12 center">
                    <img width="160" height="160" class="img-thumbnail img-circle blue-grey darken-4" alt="" src="<?php echo $this->Url->build('/', TRUE); ?>admin_assets/images/pokemap.png">
                  </div>
                </div>
                <?= $this->Flash->render() ?>
                <?php echo $this->fetch('content'); ?>

            </div>
          </div>
      </div>

      </main>


        <footer class="page-footer grey darken-4">
          <div class="footer-copyright">
            <div class="container text-center">
                &copy; 2016 Copyright Text
            </div>
          </div>
        </footer>


      <div id="modal-forgetPass"  class="modal modal-small">
        <div class="modal-content">
            <h4 class="text-center">Forgot Password?</h4>
         <form name="forgotEmail">
                <div class="modal-body bidCont cust-modal-body">
                    <div class="input-field">
                        <input type="email" id="forgot_email" name="email"  style="margin-bottom:0px;" autocomplete="off" required/>
                        <label for="forgot_email"><?= __('ENTER_YOUR_EMAIL');?></label>
                    </div>
                    <span id='forgot_password_error'></span>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-gray" id='forgot_password_submit'>Submit <span id='forgot_password_loader'></span></button>
          <button class="btn modal-action modal-close waves-effect waves-gray btn-flat">Cancel</button>
        </div>
    </div>


</body>

</html>
