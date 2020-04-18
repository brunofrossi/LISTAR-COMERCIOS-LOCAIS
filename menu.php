<div class="bg-light border-right" id="sidebar-wrapper">
    <img src="assets/logoif.png" />
      <div class="sidebar-heading cabecalho-titulo text-center"><?php echo $Titulo_menu?><p class="text-right p-cadastro"><a class="btn btn-danger link-cadastro" href="./sis_admin/index.php">Cadastre-se</a></p></div>
      <div class="list-group list-group-flush">
        <?php
            //buscar segmentos
            $sql = "SELECT s.idsegmento,s.nome, COUNT(c.segmento_idsegmento) as total
            FROM segmento s LEFT JOIN comercio c on c.segmento_idsegmento= s.idsegmento
            GROUP BY s.nome
            ORDER BY nome";
            $resultado= $conexao->query($sql);
            while($linha=$resultado->fetch_array()){
                $link = "index.php?id=".$linha['idsegmento'];
                $nome = $linha['nome'];
                $total = $linha['total'];
                echo "<a href='$link' class='list-group-item list-group-item-action bg-light'>$nome <span class='badge badge-pill badge-dark float-right'>$total</span></a>";
            }
        ?>
    </div>
</div>