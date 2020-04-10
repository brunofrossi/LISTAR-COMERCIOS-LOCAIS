<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/simple-sidebar.css" rel="stylesheet" id="sidebar-css">
    <link href="css/style.css" rel="stylesheet" id="style">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- menu -->
    <?php
            include 'menu.php';
    ?>
    <!-- /menu -->

    
    <div id="page-content-wrapper">
     <!-- Titulo da pagina principal -->   
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
        <button class="btn btn-primary bt-menu" id="menu-toggle">
            <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
        </button>
        <span class="navbar-text text-center nome-sup">
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    //buscar nome segmento
                    $sql = "SELECT * FROM segmento WHERE idsegmento = $id";
                    $resultado= $conexao->query($sql);

                    $linha=$resultado->fetch_array();
                    echo $linha['nome'];
                }else{
                    echo "";
                }
            ?>
        </span>
    </nav>
     <!--/Titulo da pagina principal -->  
     <!--Conteúdo  --> 
     <div class="container-fluid">
        <div class="row">
            <div class="espaco"> &nbsp; </div>
                <?php
                    if(isset($_GET['id'])){
                        include 'empresa.php';  
                    }else{
                        include 'abertura.php';
                    }
                ?>
            <div class="espaco"> &nbsp; </div>
        </div>
    </div>
    <!--/Conteúdo  --> 
    </div>
   
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


