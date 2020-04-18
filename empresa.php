<?php
    $id = $_GET['id'];
    //buscar segmentos
    $sql = "SELECT * FROM comercio WHERE aprovado = 1 AND segmento_idsegmento = $id ORDER BY ranking, nome_fantasia";
    $resultado= $conexao->query($sql);

while($linha=$resultado->fetch_array()){
?>
<!--CARD-->
 <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="image-flip">
        <div class="mainflip">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <p><img class="img-fluid" src='<?php echo "images/".$linha['imagem']; ?>'style="max-height: 300px;"  alt="card image"></p>
                        <h4 class="card-title">
                            <?php echo $linha['nome_fantasia']; ?>
                        </h4>
                        <div class="col-xs-6">
                            <img src="icons/phone.svg" alt="Telephone" title="Telephone">   
                            <?php echo $linha['telefone']; ?>
                        </div>
                        <div class="col-xs-6">
                            <!-- REDES SOCIAIS-->
                            <ul class="list-inline">
                            <?php if(!empty(trim($linha["facebook"]))){ ?>
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
                        <a href="<?php echo "individual.php?id=".$linha['idcomercio']; ?>" class="btn btn-sm btn-outline-secondary">
                            <img src="icons/plus.svg" alt="Saiba Mais" title="Saiba Mais"> Saiba mais
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
    ?>