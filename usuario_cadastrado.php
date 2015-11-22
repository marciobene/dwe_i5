<?php
  $nome      = $_GET['nome'];
  $sobrenome = $_GET['sobrenome'];
  $idade     = $_GET['idade'];
  $email     = $_GET['email'];
  $estado    = $_GET['estado'];
  $cidade    = $_GET['cidade'];
  $senha     = $_GET['senha'];

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "INSERT INTO usuario (nome, sobrenome, idade, email, estado, cidade, senha) VALUES ('$nome', '$sobrenome', '$idade', '$email', '$estado', '$cidade', '$senha')";
          
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
      location.href="index.php"
    }
  </script>
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
    <section>
      <?php
        if($conectado){
          echo "CADASTRADO COM SUCESSO<br />";
          echo '<input class="botao" type="button" onClick="Cancelar()" value="OK" /><br />';
        }else{
          echo "ERRO AO CADASTRAR!<br /><br />";
          echo '<input class="botao" type="button" onClick="Cancelar()" value="Cancelar" />';
          echo '<input class="botao" type="button" onClick="history.go(-1)" value="Tentar Novamente" /><br />';
        }
      ?>
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