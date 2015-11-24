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
      .expl{
        text-align: justify;
        text-indent: 35px;
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
            <legend>Sensor De Temperatura - LM35</legend>
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
                echo "<input type='hidden' name='email1' id='email1' value={$_SESSION['mail']} />";
              ?>
              <input class="botao" type="submit" value="Finalizar" />
            </form><br><br><hr>
            <p class="expl"><br>
              <b>ESQUEMA ELETRÔNICO</b><br><br>
              Para o esquema eletrônico foram utilizados os seguintes componentes:<br><br>
              • LM35 – Sensor de temperatura;<br>
              • LM358 – Circuito integrado com dois amplificadores operacional;<br>
              • Potenciômetro<br>
              • Resistores de 3.3K, 10K, 33K, 100K;<br><br>
            </p>
            <p>
              <b>Segue representação do esquema eletrônico:</b><br>
              <img src="lm35.png"/><br>
            </p>
            <p class="expl">
              O objetivo é o LM35 ficar monitorando a temperatura. 
              Este componente tem por característica variar a sua tensão de saída com a variação 
              da temperatura e para facilitar esta variação é proporcional entre tensão e 
              temperatura, formando uma reta, se representado graficamente.
            </p>
            <p class="expl">
              A ideia é, através de um dos amplificadores operacionais do LM358 utilizado 
              como comparador, comparar a tensão de saída do LM35, com a tensão de saída 
              do potenciômetro, a segunda regulada conforme a temperatura limite estipulada. 
              Quando a tensão de saída do LM35 ultrapassar a tensão de saída do potenciômetro, 
              o comparador emite um sinal digital para o Raspberry, que interpreta o sinal 
              e executa as ações.
            </p>
            <p class="expl">
              No entanto, a variação da tensão do LM35 é muito discreta, 
              dificultando a regulagem do potenciômetro e, principalmente, 
              ficando muito sensível à instabilidade do sistema elétrico. 
              Diante disso, foi utilizado o outro amplificador operacional 
              do LM358 para amplificar a tensão de saída do LM35, proporcionando 
              uma regulagem mais precisa da faixa de temperatura.
            </p>
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