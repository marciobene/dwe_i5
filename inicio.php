<?php
  session_start();

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
      }
      #tabela_titulo{
        width: 100%;
      }
      #coluna_titulo{
        color: red;
        font-size: 50px;
        width: auto;
        text-align: center;
      }
      #coluna_info_usuario{
        color: black;
        font-size: 12px;
        width: 250px;
        text-align: center;
        background-color: #cccccc;
        padding-left: 10px;  
      }
      #tabela_menu{
        width: 100%;
        text-align: center;
      }
      .menu{
        width: 25%;
        background-color: #003300;
        color: #ffffff;
        font-size: 13px;
      }
      fieldset{
        background-color: #cccccc;
        width: 98%px;
        border-width: 3px;
        border-color: #005000;
      }
      legend{
        color: #003300;
        font-size: 12px;
      }
      .tituloProjeto{
        font-size: 13px;
        text-align: center;
      }
      .texto{
        font-size: 12px;
        text-align: justify;
        text-indent: 35px;\
      }
      footer{
        font-size: 10px;
        text-align: center;
        background-color: #008000;
      }
      .link{
        color: white;
      }
      
    </style>
  </head>
  <body>
    <header>
      <table id="tabela_titulo">
        <tr>
          <td id="coluna_titulo">
            <label ><b>RaspIoT</b></label>
          </td>
          <td id="coluna_info_usuario">
            <?php
            echo "<label class='info_usuario'><b>Usuário:</b> {$_SESSION['mail']}</label><br />";
            ?>
            <label class="info_usuario">
              <b>
                <form action="atualizar_usuario.php" method="post">
                  <?php
                  
                  echo "<input type='hidden' name='email' id='email' value={$_SESSION['mail']} />";
                  echo '<input class="editar" type="submit" value="Editar Perfil">';
                  ?>
                </form>
              </b>
            </label><br />
          </td>
        </tr>
      </table>
      
    </header>
    <nav>
      <table id="tabela_menu">
        <tr>
          <td class="menu">
            <a class="link" href="sensor1.html">Sensor 1</a>
          </td>
          <td class="menu">
            Sensor 2
          </td>
          <td class="menu">
            Sensor 3
          </td>
          <td class="menu">
            <a class="link" href="index.php">Sair</a>
          </td>
        </tr>
      </table>
    </nav>
    <section>
      <fieldset>
        <legend><b>Objetivo Projeto de Pesquisa</b></legend>
        <p class="tituloProjeto"><b><u>
          Aplicação da Plataforma Raspberry Pi para a Internet das Coisas
        </u></b></p>
        <p class="texto">O projeto de pesquisa tem como objetivo principal trabalhar de forma prática dois temas em relevância na atualidade: Internet das Coisas e Minicomputadores de baixo custo, aplicando uma das inúmeras formas de interação entre estes conceitos e fornecendo conteúdo de estudo para futuros projetos.</p>
        <p class="texto">A base dos estudos será através da continuidade do projeto de pesquisa de Iniciação Científica iniciada em 2014, Estudo da Aplicabilidade de Sistemas em Java sobre a Plataforma do Raspberry (SILVA; LEDEL, 2014), a qual resultou no desenvolvimento de um sistema eletrônico, que faz monitoramento de temperatura controlado pela plataforma do Raspberry Pi.</p>
        <p class="texto">O presente sistema Web fará parte do projeto de pesquisa. Onde será possível consultar as leituras feitas pelo sistema eletrônico através da plataforma do Raspberry Pi. Reforçando assim as caractísticas de Internet das coisas</p>
        <p class="texto">Para consultar as leituras feitas pelo sistema eletrônico de monitoramento de temperatura, basta escolher um dos sensores no menu acima.</p>
        <p class="texto"></p>
      </fieldset>
    </section>
    <footer><p><b>Por: </b>Márcio Benê<br><b>Contato: </b><a href="mailto:marciobene@gmail.com">marciobene@gmail.com</a></p></footer>
</html>