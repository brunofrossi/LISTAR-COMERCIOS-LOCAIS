<?php
    include '../conexao.php';
    session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

  $id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$Titulo_head;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/simple-sidebar.css" rel="stylesheet" id="sidebar-css">
    <link href="css/style.css" rel="stylesheet" id="style">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="d-flex" id="wrapper">
   <!-- Menu -->
   <?php
    include("menu.php");
    ?>
    <!-- /Menu -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
            <button class="btn btn-primary bt-menu" id="menu-toggle">
                <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
            </button>
            <div class="d-flex justify-content-end sair-bt">
                <a href="sair.php" class="btn btn-danger">Sair</a>
            </div>
        </nav>

      <div class="container-fluid">
            <div class="row">
                <div class="espaco"> &nbsp; </div>

                
                <!--CARD-->
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <!--<div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">-->
                               
                                <!--Listando os cadastros-->
                               <p>em desenvolvimento :)</p>

                            <!-- </div>
                        </div>
                    </div> -->
                </div>
                <!--./CARD-->
                
                <div class="espaco"> &nbsp; </div>
            </div>
            
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>


<!--Script-->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>