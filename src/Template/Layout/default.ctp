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
    <!-- Angular Materialize CSS -->
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/dist/css/materialize.min.css" rel="stylesheet">

    <!-- Font Awesome Min CSS -->
    <link href="<?php echo $this->Url->build('/', TRUE); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Style css -->
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->Url->build('/',TRUE); ?>admin_assets/css/loader.css" rel="stylesheet">



  </head>
  <body>

   <?php echo $this->element('admin/top_nav'); ?>
    <div id="wrapper">
        <?php echo $this->element('admin/side_nav'); ?>
        <div id="page-content-wrapper">
            <div class="container-fluid pad-tnb-25 clearfix min-w-300">
                <?= $this->Flash->render() ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= $this->Url->build('/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!--Bootstrap Core JS-->
    <script src="<?php echo $this->Url->build('/', TRUE); ?>admin_assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/dist/js/materialize.min.js"></script>
    <script src="<?php echo $this->Url->build('/', TRUE); ?>bower_components/materialize/js/forms.js"></script>
    <script src="<?= $this->Url->build('/'); ?>bower_components/moment/moment.js" type="text/javascript"></script>
</body>

</html>
