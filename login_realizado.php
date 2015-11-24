<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);

  $email     = $_POST['email'];
  $senha     = $_POST['senha'];

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "SELECT email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'";

  $conectado = $dbh->exec($sql);

  /*
    echo " email: $email <br>";
    echo " senha: $senha <br>";
    echo " sql: $sql <br>";
    echo " conectado: $conectado <br>";
    echo $dbh->exec($sql);

  */

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
      location.href="index.php"
    }

  </script>
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
    <section>
      <form action="inicio.php" method="POST">
        <?php
          $auth = 0;
          foreach($dbh->query($sql) as $item){
            $auth = 1;
            $email_banco = $item['email'];
            $senha_banco = $item['senha'];
          }
          if (($email_banco == $email) && ($senha_banco == $senha)){
              echo "<br />AUTENTICADO COM SUCESSO<br />";
              $sql1 = "INSERT INTO log VALUES ('$email', now())";
              $loginput = $dbh->exec($sql1);
              echo "<input type='hidden' name='email1' id='email1' value={$item['email']} />";
              echo '<input class="botao" type="submit" value="ENTRAR NA PÁGINA" /><br />';
          }
          
          if($auth == 0){
            echo "<br />SENHA OU USUÁRIO INCORRETO!<br /><br />";
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