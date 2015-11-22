<?php
  session_start();

  ini_set('display_errors', 0 );
  error_reporting(0);
  
  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

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
    function checar_filtro() {
      var e = document.getElementById("e").checked;
      var apenas = document.getElementById("apenas").checked;
      var data_inicial = document.getElementById("data_inicial").value;
      var data_final = document.getElementById("data_final").value;
      var valor_minimo = document.getElementById("valor_minimo").value;
      var valor_maximo = document.getElementById("valor_maximo").value;
      
      if(((data_inicial != "") || (data_final != "")) && ((valor_minimo != "") || (valor_maximo != "")) && (apenas == true)){
        window.alert("Para buscar por DATA e VALOR, selecione a opção ''e''!");
        return false;
      }else if((data_inicial == "") && (data_final == "") && (valor_minimo == "") && (valor_maximo == "") && (apenas == true)){
        window.alert("Para buscar por DATA e VALOR, selecione a opção ''e''!");
        return false;
      }

      if (data_inicial > data_final){
        window.alert("Data inicial não pode ser maior que a data final!");
        return false;
      }
      if (valor_minimo > valor_maximo){
        window.alert("Valor mínimo não pode ser maior que valor máximo!");
        return false;
      }

      return true;

    }
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
          
          <fieldset>
            <legend>Sensor 1</legend>
            <form action="filtro_leitura.php" method="POST" onsubmit = "return checar_filtro()">
               <p class="texto">Configure o filtro para buscar as leituras desejadas:</p>
              <label class="campo" for="data_inicial">Data inicial:</label>
              <input class="campo" type="date" name="data_inicial" id="data_inicial" />
              <label class="campo" for="data_final">Data final:</label>
              <input class="campo" type="date" name="data_final" id="data_final" />
              <br />
              <br />
              <input type="radio" name="opcao" value="e" checked="checked" id="e"/>e
              <input type="radio" name="opcao" value="apenas" id="apenas" />apenas
              <br />
              <br />
              <label class="campo" for="valor_min">Valor mínimo:</label>
              <input class="campo" type="text" name="valor_minimo" id="valor_minimo" size="7"/>
              <label class="campo" for="valor_maximo">Valor máximo:</label>
              <input class="campo" type="text" name="valor_maximo" id="valor_maximo" size="7" />
              <br />
              <br />  
              <?php
                echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
              ?>
              <input class="botao" type="submit" value="Buscar" />
            </form>
            <form action="inicio.php" method="POST">
              <?php
                echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
              ?>
              <input class="botao" type="submit" value="Finalizar" />
            </form> 
          </fieldset>
          
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