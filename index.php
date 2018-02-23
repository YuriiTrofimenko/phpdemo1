<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <header class="col-sm-12 col-md-12 col-lg-12">
                    <?php include_once('pages/functions.php'); ?>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <nav class="col-sm-12 col-md-12 col-lg-12 navbar navbar-light bg-faded">
                    <?php include_once('pages/menu.php'); ?>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <section class="col-sm-12 col-md-12 col-lg-12">
                    <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch ($page){
                                case 1 : {
                                    include_once('pages/home.php');
                                    break;
                                }
                                case 2 : {
                                    include_once('pages/upload.php');
                                    break;
                                }
                                case 3 : {
                                    include_once('pages/gallery.php');
                                    break;
                                }
                                case 4 : {
                                    include_once('pages/registration.php');
                                    break;
                                }
                            }
                        }
                    ?>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <footer class="col-sm-12 col-md-12 col-lg-12"></footer>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
