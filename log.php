<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);
  
  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');

  $sql = 'SELECT * FROM log ORDER BY data DESC';

  $resultado = $dbh->exec($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>RaspIoT - Internet das Coisas com Raspberry Pi</title>
    <meta charset="utf-8" />

    <style>
      html, body{
        font-family: verdana;
        font-size: 12px;
        
      }
      #wrap{
        max-width: 600px;
        margin:0 auto;
      }
      header{
        color: red;
        font-size: 50px;
        width: 100%;
        text-align: center;
      }
      fieldset{
        background-color: #cccccc;
        width: 98%px;
        border-width: 3px;
        border-color: #005000;
        text-align: center;
      }
      legend{
        color: #003300;
        font-size: 12px;
        text-align: left;
        font-weight: bolder;
      }
      .larg{
        width: 300px;
        text-align: center;
      }
      .texto{
        text-align: center;
        font-size: 13px;
        font-weight: bolder;
      }
     .campo{
        display: inline-block;
        color: #000000;
        font-size: 12px;
        font-weight: bolder;
        text-align: center;
      }
      .botao{
        float: right;
        width: 100px;
      }
      footer{
        font-size: 10px;
        text-align: center;
        background-color: #008000;
        width: 100%;
      }  
    </style>
  </head>
  <script type="text/javascript">
    var sessaoaberta = "<?php echo $_SESSION['mail'];?>";
      console.log(sessaoaberta);
      if (sessaoaberta == ""){
        alert("Logar no Sistema!!!");
        location.href="index.php";
      }
  </script>
  <body>
    <div id="wrap">
      <header>
        <label><b>RaspIoT</b></label>
      </header>
        <section>
          <form action="atualizar_usuario.php" method="POST">
            <fieldset>
              <legend>Log de acessos de usuários</legend>
              <?php
              echo '<table>';
              echo '<label><b>Data e Hora de acesso por usuário:</b></label>';
              foreach($dbh->query($sql) as $linha){
                echo '<table>';
                echo "<tr>";
                echo "<td class='larg'>";
                echo "{$linha['data']}<b></b>";
                echo "</td>";
                echo "<td class='larg'>";
                echo "{$linha['email']}<b></b>";
                echo "</td>";
                echo "</tr>";
                
              }
              echo '</table>';
              ?>
              <br />
              <?php
                echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
              ?>
              <input class="botao" type="submit" value="Voltar" />
            </fieldset>
          </form>
        </section>
    </div>
      <footer>
      <p>
        <b>Por: </b>Márcio Benê<br>
        <b>Contato: </b><a class="link_email" href="mailto:marcio.rbs@gmail.com">marcio.rbs@gmail.com</a>
      </p>
    </footer>
  </body>
</html>