<?php
  $email     = $_POST['email'];
  $senha     = $_POST['senha'];

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "SELECT email, senha FROM usuario WHERE email = '$email'";

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
    function Ok(){
      location.href="inicio.html"
    }
    function Cancelar(){
      location.href="index.html"
    }
  </script>
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
    <section>
      <form action="inicio.php" method="post">
        <?php
          foreach($dbh->query($sql) as $item){
            if ($item['senha'] != $senha){
              echo "<br />USUÁRIO OU SENHA INCORRETOS!<br /><br />";
              echo '<input class="botao" type="button" onClick="Cancelar()" value="Cancelar" />';
              echo '<input class="botao" type="button" onClick="history.go(-1)" value="Tentar Novamente" /><br />';
            }else{
              echo "<br />AUTENTICADO COM SUCESSO<br /><br />";
              echo "<input type='hidden' name='email' id='email' value={$item['email']} />";
              echo '<input class="botao" type="submit" value="ENTRAR NA PÁGINA" /><br />';
              
            }
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