<?php
    include 'conexao.php';
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
    <!-- menu -->
    <?php
            include 'menu.php';
    ?>
    <!-- /menu -->


    <!-- Page Content -->
    <div id="page-content-wrapper">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary bt-menu" id="menu-toggle">
            <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
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
                                        <!-- logo -->
                                        <img class="img-fluid" src='<?php echo "images/".$linha['imagem']; ?>' width="300vw" alt="card image">
                                        <h4 class="card-title">
                                            <?php echo $linha['nome_fantasia']; ?>
                                        </h4>
                                        <div class="col-xs-6">
                                            <?php echo $linha['descricao_negocio']; ?>
                                        </div>
                                        <!-- Whatsapp -->
                                        <div class="col-xs-6">
                                            <img src="icons/whatsapp.svg" alt="whatsapp" title="whatsapp">   
                                            <?php echo $linha['Whatsapp']; ?>
                                        </div>
                                        <!-- Telefone -->
                                        <div class="col-xs-6">
                                            <img src="icons/phone.svg" alt="Telephone" title="Telephone">   
                                            <?php echo $linha['telefone']; ?>
                                        </div>
                                        <!-- Endereço -->
                                        <div class="col-xs-6">
                                        <img src="icons/location.svg" alt="Endereço" title="Endereço">
                                            <?php echo $linha['rua'].", ".$linha['numero']." - ".$linha['bairro']; ?>
                                        </div>
                                        <!-- Pagamento -->
                                        <div class="col-xs-6">
                                            <img src="icons/banknote.svg" alt="Forma Pagamento" title="Forma Pagamento">   
                                            Forma Pagamento: <?php echo $linha['forma_pagamento']; ?>
                                        </div>
                                        <!-- Taxa -->
                                        <div class="col-xs-6">
                                            <img src="icons/product.svg" alt="taxa de entrega" title="taxa de entrega">   
                                            Taxa de Entrega:<?php echo $linha['taxa_entrega']; ?>
                                        </div>
                                        <!-- Funcionamento -->
                                        <div class="col-xs-6">
                                            <img src="icons/time.svg" alt="Horário" title="Horário">   
                                            Horário de Funcionamento:<br />
                                            <!--Exibir os horários de funcionamento -->
                                            <?php
                                                $dia = ['Domingo', 'Segunda-feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'];
                                                $sql = "SELECT * FROM funcionamento WHERE comercio_idcomercio = $id ORDER BY dia_semana";
                                                $retorno = $conexao->query($sql);
                                                if($retorno->num_rows>0){
                                            ?>
                                            <br>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Dia da semana</th>
                                                        <th>Abertura</th>
                                                        <th>Fechamento</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        while($line=$retorno->fetch_array()){
                                                    ?>
                                                    <tr>
                                                        <td class="text-left"><?php echo $dia[$line['dia_semana']]; ?></td>
                                                        <td><?php echo $line['abertura']; ?></td>
                                                        <td><?php echo $line['fechamento']; ?></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php
                                                }else{
                                                    echo "Horário não informado <br />";
                                                }
                                            ?>

                                        </div>
                                        <!-- Site -->
                                        <?php
                                            if(!empty(trim($linha["site"]))){
                                        ?>
                                        <div class="col-xs-6">
                                            <img src="icons/laptop.svg" alt="Horário" title="Horário">   
                                            <?php echo '<a href="'.$linha['site'].'" target="_blank">'.$linha['site'].'</a>'; ?>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <!-- Observação -->
                                        <?php if(!empty(trim($linha['observacao']))){ ?>
                                        <div class="col-xs-6">
                                            <img src="icons/bubble.svg" alt="Observação" title="Observação">   
                                            <?php echo $linha['observacao']; ?>
                                        </div>
                                        <?php } ?>

                                        <div class="col-xs-6">
                                            <!-- REDES SOCIAIS-->
                                            <ul class="list-inline">
                                                <?php
                                                    if(!empty(trim($linha["facebook"]))){
                                                ?>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="<?php echo $linha['facebook']; ?>">
                                                            <img src="icons/facebook.svg" alt="" width="15" height="15" title="Facebook">   
                                                        </a>

                                                    </li>
                                                <?php
                                                    }

                                                    if(!empty(trim($linha["instagram"]))){
                                                ?>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="<?php echo $linha['instagram']; ?>">
                                                            <img src="icons/instagram.svg" alt="" width="15" height="15" title="Instagram">
                                                        </a>
                                                    </li>
                                                <?php
                                                    }
                                                ?>
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


