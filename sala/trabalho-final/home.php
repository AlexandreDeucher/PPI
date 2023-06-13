<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <link rel="stylesheet" href="home.css">
  <title>Home</title>
</head>
<body>
<header>
    <h1>Ruby é a melhor linguagem :p</h1>
  </header>
    <nav>
      <div>
        <a href="user.php">Usuarios</a>
        <a href="sobre.php">Sobre</a>
        <a href="cadastro.html">Cadastrar Usuarios</a>
        <a href="Logout.php">Saida</a>
      </div>
        <div>
        <?php
          session_start();
          if (!isset($_SESSION['login'])) {
            header('location: login.html');
          }
            echo "<p>$_SESSION[login]</p>";
        ?>
        </div>
    </nav>

</body>



</html>