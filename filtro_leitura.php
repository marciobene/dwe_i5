<?php

  $data_inicial     = $_POST['data_inicial'];
  $data_final     = $_POST['data_final'];
  $valor_minimo     = $_POST['valor_minimo'];
  $valor_maximo     = $_POST['valor_maximo'];
  $opcao            = isset($_POST['opcao']) ? $_POST['opcao'] : '';

  if(!empty($data_inicial) && !empty($data_final) && !empty($valor_minimo) && !empty($valor_maximo)){
    if($opcao == "e"){
      $sql = "SELECT data_leitura, valor FROM leituras WHERE data_leitura > '$data_inicial' AND data_leitura < '$data_final' AND valor > '$valor_minimo' AND valor < '$valor_maximo' AND id = 1";
    }
  }else if(!empty($data_inicial) || !empty($data_final)){
    
    $sql = "SELECT data_leitura, valor FROM leituras WHERE data_leitura > '$data_inicial' AND data_leitura < '$data_final' AND id = 1";
  }else if(!empty($valor_minimo) || !empty($valor_maximo)){
    
    $sql = "SELECT data_leitura, valor FROM leituras WHERE valor > '$valor_minimo' AND valor < '$valor_maximo' AND id = 1";
  }else{
    $sql = 'SELECT data_leitura, valor FROM leituras';
  }

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
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
      a{
        color: black;
      }
    </style>
  </head>
  <body>
    <div id="wrap">
      <header>
        <label><b>RaspIoT</b></label>
      </header>
        <section>
          <form action=".php">
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
              <input class="botao" type="button" onClick="history.go(-1)" value="Voltar" />
            </fieldset>
          </form>
        </section>
    </div>
      <footer><p><b>Por: </b>Márcio Benê<br><b>Contato: </b><a href="mailto:marciobene@gmail.com">marciobene@gmail.com</a></p>
      </footer>
  </body>
</html>