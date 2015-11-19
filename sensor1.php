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
          <form action="filtro_leitura.php" method="post">
            <fieldset>
              <legend>Sensor 1</legend>
              <p class="texto">Configure o filtro para buscar as leituras desejadas:</p>
              <label class="campo" for="data_inicial">Data inicial:</label>
              <input class="campo" type="date" name="data_inicial" id="data_inicial" />
              <label class="campo" for="data_final">Data final:</label>
              <input class="campo" type="date" name="data_final" id="data_final" />
              <br />
              <br />
              <input type="radio" name="opcao" value="e" />e
              <br />
              <br />
              <label class="campo" for="valor_min">Valor mínimo:</label>
              <input class="campo" type="numeric" name="valor_minimo" id="valor_minimo" size="7"/>
              <label class="campo" for="valor_maximo">Valor máximo:</label>
              <input class="campo" type="numeric" name="valor_maximo" id="valor_maximo" size="7" />
              <br />
              <br />  
              <input class="botao" type="submit" value="Buscar" />
              
            </fieldset>
          </form>
        </section>
    </div>
      <footer><p><b>Por: </b>Márcio Benê<br><b>Contato: </b><a href="mailto:marciobene@gmail.com">marciobene@gmail.com</a></p>
      </footer>
  </body>
</html>