<?php
               $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
               
               $dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');
               $query_produto = "SELECT id, nome_prod, preco_prod, imagem_prod FROM produto WHERE id=:id LIMIT 1";
               $result_produto = $dbh->prepare($query_produto);
               $result_produto->BindParam(':id', $id, PDO::PARAM_INT);
               $result_produto->execute();
               $linha_produto = $result_produto->fetch(PDO::FETCH_ASSOC);
               extract($linha_produto);

?>

<?php 


$access_token = "APP_USR-7751286980864329-052313-61313118a3a4577d3f84af850838ad67-651291232 ";

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("$access_token"); 

$preference = new MercadoPago\Preference();



$item = new MercadoPago\Item();
$item->title = "$nome_prod";
$item->quantity = 1;
$item->unit_price = $preco_prod;
$preference->items = array($item);

$preference->back_urls = array(
    "success" => 'https://seusite.com/success',
    "failure" => 'https://seusite.com/failure',
    "pending" => 'https://seusite.com/pending'
);

$preference->notification_url = 'https://seusite.com/notification.php';
$preference->external_reference = 4545;
$preference->save();

$link = $preference->init_point;

echo $link;

header('Location: '.$link);

?>