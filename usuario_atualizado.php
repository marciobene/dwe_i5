<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);
  
  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

  $nome      = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $idade     = $_POST['idade'];
  $email     = $_POST['email'];
  $estado    = $_POST['estado'];
  $cidade    = $_POST['cidade'];
  $senha     = $_POST['senha'];

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', idade = '$idade', email = '$email', estado = '$estado', cidade = '$cidade', senha = '$senha' WHERE email = '$email'";

  $conectado = $dbh->exec($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>RaspIoT - Internet das Coisas com Raspberry Pi</title>
    <meta charset="utf-8" />
    <style>
      html, body{
        font-family: verdana;
        width: 300px;
      }
      header{
        color: red;
        font-size: 50px;
        width: 100%;
        text-align: center;
      }
      .botao{
        float: center;
      }
      section{
        font-size: 12px;
        text-align: center;
      }
      footer{
        font-size: 10px;
        text-align: center;
        background-color: #008000;
      }  
    </style>
  </head>
  <script type="text/javascript">
    function Cancelar(){
      location.href="inicio.php"
    }

    var sessaoaberta = "<?php echo $_SESSION['mail'];?>";
      console.log(sessaoaberta);
      if (sessaoaberta == ""){
        alert("Logar no Sistema!!!");
        location.href="index.php";
      }
      
  </script>
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
    <section>
      <?php
          
        if($conectado){
          echo '<form action="inicio.php" method="post">';
            echo "ATUALIZADO COM SUCESSO<br />";
            echo "<input type='hidden' name='email1' id='email1' value={$_SESSION['mail']} />";
            echo '<input class="botao" type="submit" value="OK" /><br />';
          echo "</form>";
        }else{
          echo '<form action="inicio.php" method="post">';
            echo "ERRO AO ATUALIZAR!<br />";
            echo "<input type='hidden' name='email1' id='email1' value={$_SESSION['mail']} />";
            echo '<input class="botao" type="submit" value="Cancelar" />';
          echo "</form>";
          echo '<form action="atualizar_usuario.php" method="post">';
            echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
            echo '<input class="botao" type="submit" value="Tentar Novamente" />';
          echo "</form>";
        }

      ?>
      
    </section>
    <footer>
      <p>
        <b>Por: </b>Márcio Benê<br>
        <b>Contato: </b><a class="link_email" href="mailto:marcio.rbs@gmail.com">marcio.rbs@gmail.com</a>
      </p>
    </footer>
  </body>
</html>