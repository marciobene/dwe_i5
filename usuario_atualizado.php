<?php
  session_start();

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
      a{
        color: black;
      }
    </style>
  </head>
  <script type="text/javascript">
    function Cancelar(){
      location.href="inicio.php"
    }
  </script>
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
    <section>
      <form action="inicio.php" method="post">
      <?php
        if($conectado){
          echo "ATUALIZADO COM SUCESSO<br />";
          echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
          echo '<input class="botao" type="submit" value="OK" /><br />';
        }else{
          echo "ERRO AO ATUALIZAR!<br />";
          echo '<input class="botao" type="button" onClick="Cancelar()" value="Cancelar" />';
          echo '<input class="botao" type="button" onClick="history.go(-1)" value="Tentar Novamente" /><br />';
        }

      ?>
      </form>
    </section>
    <footer>
      <p>
        <b>Por: </b>Márcio Benê<br>
        <b>Contato: </b>
        <a href="mailto:marciobene@gmail.com">
          marciobene@gmail.com
        </a>
      </p>
    </footer>
  </body>
</html>