<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);
  
  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "DELETE FROM usuario WHERE email = '$email'";

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
      location.href="inicio.php";
    }
    function IrIndex(){
      location.href="index.php";
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
      <form action="index.php">
      <?php
        if($conectado){
          echo "DELETADO COM SUCESSO<br />";
          echo '<input class="botao" type="button" onClick="IrIndex()" value="Ok" />';
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
        <b>Contato: </b><a class="link_email" href="mailto:marcio.rbs@gmail.com">marcio.rbs@gmail.com</a>
      </p>
    </footer>
  </body>
</html>