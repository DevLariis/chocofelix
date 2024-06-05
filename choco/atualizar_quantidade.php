<?php
// session_start();

// // Verifica se o ID do produto e a ação foram enviados
// if(isset($_GET['id']) && isset($_POST['acao'])) {
//     $idProduto = $_GET['id'];
//     $acao = $_POST['acao'];

//     // Verifica se o produto está no carrinho
//     if(isset($_SESSION['itens'][$idProduto])) {
//         // Aumenta a quantidade
//         if($acao == 'aumentar') {
//             $_SESSION['itens'][$idProduto]++;
//         }
//         // Diminui a quantidade (não permite que seja menor que 1)
//         elseif($acao == 'diminuir' && $_SESSION['itens'][$idProduto] > 1) {
//             $_SESSION['itens'][$idProduto]--;
//         }
//     }
// }

// // Redireciona de volta para o carrinho
// header('Location: carrinho.php');
// ?>
