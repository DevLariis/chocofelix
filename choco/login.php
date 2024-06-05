<!-- <?php
// if(isset($_POST['submit']))

// {
//   include_once('config.php');

//   $email = $_POST['email'];
//   $senha = $_POST['senha'];

//   $result = mysqli_query($conexao, "INSERT INTO login (email,senha) 
//   VALUES('$email', '$senha')");
// }


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    STYLE LINK
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ChocoFelix - login</title>
  </head>
  <body class="bck-login">
    <section class="login-page">
    <div>
     <a href="index.php" class="voltarBtn"><i class="fa-solid fa-arrow-left"></i></a>
     </div>
      <h1>LOGIN</h1>
      <form action="index.php">
        <input type="email" name="email" placeholder="Login:" />
        <input type="password" name="senha" placeholder="Senha:" />

        <div>
          <button type="submit" onclick="entrar()">
          <a href="index.php">ENTRAR</a>
          
        </button>
          
          <p>
            Se você não possui um login
            <a href="cadastro.php"> faça seu cadastro</a>
          </p>
        </div>
      </form>
    </section>
    <script src="assets/js/index.js"></script>
  </body>
</html> -->
