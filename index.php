<?php

  session_unset();

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
      header{
        color: red;
        font-size: 50px;
        width: 100%;
        text-align: center;
      }
      table{
        width: 100%;
        text-align: center;
      }
      td{
        width: 33%;
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
        text-indent: 35px;
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
      <label><b>RaspIoT</b></label>
    </header>
    <nav>
      <table>
        <tr>
          <td>
            <a class="link" href="login.html">Entrar</a>
          </td>
          <td>
            <a class="link" href="criar_usuario.html">Cadastrar</a>
          </td>
          <td>
            <a class="link" href="http://www.raspberrypi.org" target="_blank">RaspberryPi.org</a>
          </td>
        </tr>
      </table>
    </nav>
    <section>
      <fieldset>
        <legend><b>Resumo do Projeto de Pesquisa</b></legend>
        <p class="tituloProjeto"><b><u>
          Aplicação da Plataforma Raspberry Pi para a Internet das Coisas
        </u></b></p>
        <p class="texto">Um dos temas que vem ganhando popularidade nós ultimos tempos é a Internet das Coisas – IoT (Internet of Things). Além de assunto em crescente discussão no cenário da tecnologia, é empregada em grandes empresas, as quais criam unidades de negócio para cuidar somente da demanda deste segmento.</p>
        <p class="texto">Tal conceito envolve a interconexão de diferentes dispositivos ou “coisas”, para as mais variadas aplicações. Abrangendo diversos hardwares, desde dispositivos tradicionais como microcomputadores, notebooks, servidores, como dispositivos de menores dimensões e custo reduzido. Alguns, com características inovadoras, como o GPIO (General Purpose Input and Output) que é um barramento de uso geral com entradas e saídas programáveis, embarcados a minicomputadores do tamanho de um cartão de crédito. Objeto que é definido neste estudo como Minicomputador com entradas e saídas programáveis e de baixo custo ou, simplesmente, Minicomputador de baixo custo.</p>
        <p class="texto">O conceito de Internet das Coisas pode ser aplicado de diferentes formas. O propósito deste estudo é criar uma aplicação utilizando um minicomputador de baixo custo. Esses minicomputadores são plataformas de desenvolvimento e prototipagem que surgiram no últimos dez anos, tais como Arduino, Raspberry Pi, Intel Edison e Beaglebone. Eles vêm ganhando adeptos e o envolvimento de empresas de grande porte, as quais vêm lançando suas próprias versões, frequentes na mídia.</p>
        <p class="texto">Um dos mais conhecidos Minicomputadores de baixo custo é o Raspberry Pi. Não foi o primeiro hardware com tais características, contudo é inovador, dando todas as características possíveis de um computador de uso comum e um barramento GPIO. Tais características possibilitam interagir com objetos do mundo real, aplicando conhecimentos de programação e criatividade.</p>
        <p class="texto">O objetivo deste projeto é ampliar o escopo da pesquisa de Iniciação Científica iniciada em 2014, período no qual fora desenvolvido um monitor de temperatura, o qual alertava localmente quando a temperatura excedesse um limite estipulado. A ampliação do projeto envolve as seguintes etapas adicionais: implementar uma aplicação web para apresentar as leituras feitas pelo Raspberry Pi, criar a placa eletrônica para o monitor, fazer uma maquete para demonstrar o efetivo funcionamento da aplicação e, principalmente, fornecer conteúdo para futuros projetos.</p>
      </fieldset>
    </section>
    <footer>
      <p>
        <b>Por: </b>Márcio Benê<br>
        <b>Contato: </b><a class="link_email" href="mailto:marcio.rbs@gmail.com">marcio.rbs@gmail.com</a>
      </p>
    </footer>
</html>