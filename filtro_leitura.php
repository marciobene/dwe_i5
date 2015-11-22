<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);
  
  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

  $data_inicial     = $_POST["data_inicial"];
  $data_final     = $_POST["data_final"];
  $valor_minimo     = $_POST['valor_minimo'];
  $valor_maximo     = $_POST['valor_maximo'];
  $opcao            = isset($_POST["opcao"]) ? $_POST["opcao"] : '';

  if(empty($data_inicial)){
    $data_inicial = "01-01-01";
  }
  if (empty($data_final)){
    $data_final = "01-01-2099";
  }
  if (empty($valor_minimo)){
    $valor_minimo = 0;
  }
  if (empty($valor_maximo)){
    $valor_maximo = 1000000;
  }

  /* VERIFICAR VARIÁVEIS
  
  echo $data_inicial;
  echo $data_final;
  echo $valor_minimo;
  echo $valor_maximo;
  echo $opcao;

  */

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');

  if((!empty($data_inicial) || !empty($data_final)) && (!empty($valor_minimo) || !empty($valor_maximo))){
    $sql = "SELECT valor, data_leitura FROM leituras WHERE data_leitura > '$data_inicial' AND data_leitura < '$data_final' AND valor > '$valor_minimo' AND valor < '$valor_maximo' AND id = 1 ORDER BY data_leitura DESC";
  }else if((empty($data_inicial) && empty($data_final)) && (!empty($valor_minimo) || !empty($valor_maximo))){
    $sql = "SELECT data_leitura, valor FROM leituras WHERE valor > '$valor_minimo' AND valor < '$valor_maximo' AND id = 1 ORDER BY data_leitura DESC";
  }else if((empty($valor_minimo) && empty($valor_maximo)) && (!empty($data_inicial) || !empty($data_final))){
    $sql = "SELECT valor, data_leitura FROM leituras WHERE data_leitura > '$data_inicial' AND data_leitura < '$data_final' AND id = 1 ORDER BY data_leitura DESC";
  }else{
    $sql = 'SELECT data_leitura, valor FROM leituras ORDER BY data_leitura DESC';
  }

  //echo $resultado = $dbh->exec($sql);

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
          <form action="sensor1.php" method="POST">
            <fieldset>
              <legend>Leituras - Sensor 1</legend>
              <?php
              foreach($dbh->query($sql) as $linha){
                echo '<table>';
                echo "<tr>";
                echo "<td class='larg'>";
                echo "{$linha['data_leitura']}<b></b>";
                echo "</td>";
                echo "<td class='larg'>";
                echo "{$linha['valor']}<b></b>";
                echo "</td>";
                echo "</tr>";
                echo '</table>';
              }
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