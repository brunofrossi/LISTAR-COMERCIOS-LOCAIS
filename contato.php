<?php
    include 'conexao.php';
    $NomeTitulo="";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //buscar nome segmento
        $sql = "SELECT * FROM segmento WHERE idsegmento = $id";
        $resultado= $conexao->query($sql);
        $linha=$resultado->fetch_array();
        $NomeTitulo= $linha['nome'];
    }
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- menu -->
        <?php include 'menu.php'; ?>
        <!-- /menu -->
        <div id="page-content-wrapper">
        <!-- Titulo da pagina principal -->   
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
                <button class="btn btn-primary bt-menu" id="menu-toggle">
                    <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
                </button>
                <span class="navbar-text text-center nome-sup">
                    <?= $NomeTitulo;?>
                </span>
            </nav>
            <!--/Titulo da pagina principal -->  
            <!--Conteúdo  --> 
            <div class="container-fluid">
                <div class="espaco"> &nbsp; </div>
                    <div class="col-xs-12">    
                        <div class="card-body text-center">
                            <div class="card">    
                                <h5 class="card-header">Fale Conosco</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Duvidas? Sugestões?</h5>
                                    <p class="card-text">Entre em contato conosco através dos meios abaixo:</p>
                                    <p><img src="icons/whatsapp.svg" alt="whatsapp" title="whatsapp">   33333333333 </p>
                                    <p><img src="icons/phone.svg" alt="Telephone" title="Telephone"> (32) 3421-1013   </p>
                                    <p><img src="icons/mail.png" alt="email" title="email"> secretaria.cataguases@ifsudestemg.edu.br</p>              
                                </div>
                            </div>
                        </div>            
                    </div> 
                <div class="espaco"> &nbsp; </div>
            </div>
        <!--/Conteúdo  --> 
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

    