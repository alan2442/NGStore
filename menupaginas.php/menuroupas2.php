


<?php 
$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');


$query_produto = "SELECT id, nome_prod, preco_prod, imagem_prod, desc_prod FROM produto";
$result_produto = $dbh->prepare($query_produto);
$result_produto->execute();


while ($linha_produto = $result_produto->fetch(PDO::FETCH_ASSOC)) {

    extract($linha_produto);

?>


<!--Camisas -->

<span>
<div class="card" style="width: 13rem; float: left; margin-left: 120px; margin-bottom: 25px; margin-top: 70px; background: #1C1C1C;">
  <img src='<?php echo "./imagens-roupas1/$imagem_prod"?>' class="card-img-top" alt="...">
  <div class="card-body" align="center">
    <h5 class="card-title" align="center" style="font-family: Times New Roman, Times, Serif; font-size: 30px; color: gray;"><?php echo "$nome_prod"?></h5>
    <p class="card-text" align="center" style="font-family: Times New Roman, Times, Serif; font-size: 15px; color: gray;"><?php echo "$desc_prod" ?> </p>
    <p class="card-text" align="center" style="font-family: Times New Roman, Times, Serif; font-size: 20px; color: gray;">R$: <?php echo number_format($preco_prod, "2", ",", ".") ?></p>
    <a href="login.php" class="btn btn-primary">Comprar</a>
  </div>
</div>
</span>



<?php } ?>





