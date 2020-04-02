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
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading cabecalho-titulo text-center">Agenda Telefônica<p class="text-right p-cadastro"><a class="btn btn-danger link-cadastro" href="cadastro.php">Cadastre-se</a></p></div>
      <div class="list-group list-group-flush">

        <?php
            //buscar segmentos
            $sql = "SELECT * FROM segmento ORDER BY nome";
            $resultado= $conexao->query($sql);

            while($linha=$resultado->fetch_array()){
                $link = "index.php?id=".$linha['idsegmento'];
                $nome = $linha['nome'];
                echo "<a href='$link' class='list-group-item list-group-item-action bg-light'>$nome</a>";
            }
        ?>

      </div>
    </div>
    <!-- /sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary bt-menu" id="menu-toggle">
            <img src="icons/chevron-right.svg" alt="" width="24" height="24" title="Facebook">
        </button>

        <span class="navbar-text text-center nome-sup">
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    //buscar nome segmento
                    $sql = "SELECT * FROM comercio WHERE idcomercio = $id";
                    $resultado= $conexao->query($sql);

                    $linha=$resultado->fetch_array();
                    echo $linha['nome_fantasia'];
                }else{
                    header("location:index.php");
                }
            ?>
        </span>
      </nav>

      <div class="container-fluid">
            <div class="row">
                <div class="espaco"> &nbsp; </div>

                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        //buscar segmentos
                        $sql = "SELECT * FROM comercio WHERE aprovado = 1 AND idcomercio = $id ORDER BY ranking, nome_fantasia";
                        $resultado= $conexao->query($sql);

                        while($linha=$resultado->fetch_array()){
                ?>

                <!--CARD-->
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class="img-fluid" src='<?php echo "img/".$linha['imagem']; ?>' height="100" alt="card image"></p>
                                        <h4 class="card-title">
                                            <?php echo $linha['nome_fantasia']; ?>
                                        </h4>
                                        <!-- Telefone -->
                                        <div class="col-xs-6">
                                            <img src="icons/phone.svg" alt="Telephone" title="Telephone">   
                                            <?php echo $linha['telefone']; ?>
                                        </div>
                                        <!-- Endereço -->
                                        <div class="col-xs-6">
                                        <img src="icons/geo-alt.svg" alt="Endereço" title="Endereço">
                                            <?php echo $linha['rua'].", ".$linha['numero']." - ".$linha['bairro']; ?>
                                        </div>
                                        <!-- Funcionamento -->
                                        <div class="col-xs-6">
                                            <img src="icons/clock.svg" alt="Horário" title="Horário">   
                                            <?php echo $linha['horario_func']; ?>
                                        </div>
                                        <!-- Site -->
                                        <div class="col-xs-6">
                                            <img src="icons/laptop.svg" alt="Horário" title="Horário">   
                                            <?php echo '<a href="'.$linha['site'].'" target="_blank">'.$linha['site'].'</a>'; ?>
                                        </div>
                                        <div class="col-xs-6">
                                            <!-- REDES SOCIAIS-->
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="<?php echo $linha['facebook']; ?>">
                                                        <img src="icons/facebook.svg" alt="" width="15" height="15" title="Facebook">   
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="<?php echo $linha['instagram']; ?>">
                                                        <img src="icons/instagram.svg" alt="" width="15" height="15" title="Instagram">
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- ./REDES SOCIAIS-->
                                        </div>

                                        <a href="<?php echo "index.php?id=".$linha['segmento_idsegmento']; ?>" class="btn btn-sm btn-outline-secondary">
                                            <img src="icons/arrow-return-left.svg" alt="Voltar" title="Voltar"> Voltar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./CARD-->
                <?php
                        }
                    }
                ?>
                
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

