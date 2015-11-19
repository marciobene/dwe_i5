<?php

  session_start();

  $email     = $_POST['email'];
  $_SESSION['mail'] = $email;

  $dbh = new PDO('pgsql:host=localhost; port=5432; dbname=iot', 'postgres', '123');
  
  $sql = "SELECT * FROM usuario WHERE email = '$email'";
          
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
        width: 400px;
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
      }
      legend{
        color: #003300;
        font-size: 12px;
      }
     .campo{
        width: 100px; 
        display: inline-block;
        color: #000000;
        font-size: 12px;
        font-weight: bolder;
      }
      .aviso{
        text-align: center;
        font-size: 9px;
      }
      .botao{
        float: right;
      }
      .deletar{
        font-size: 10px;
        color: black;
        text-align: right;
        font-style: italic;
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
  <body>
    <header>
      <label><b>RaspIoT</b></label>
    </header>
      <section>
        <form action="usuario_atualizado.php" method="post">
          <fieldset>
            <legend>Atualizar Usuário</legend>
            <?php
              foreach($dbh->query($sql) as $linha){
                echo '<label class="campo" for="nome">Nome:</label>';
                echo "<input type='text' name='nome' id='nome' size='30' value='{$linha['nome']}' /><br>";
                echo '<label class="campo" for="sobrenome">Sobrenome:</label>';
                echo "<input type='text' name='sobrenome' id='sobrenome' size='30' value='{$linha['sobrenome']}' /><br>";
                echo '<label class="campo" for="idade">Idade:</label>';
                echo "<input type='idade' name='idade' id='idade' maxlength='2' size='2' value='{$linha['idade']}' /><br>";
                echo '<label class="campo" for="email">*e-mail:</label>';
                echo "<input type='text' name='email' id='email' size='30' value='{$linha['email']}'/><br>";
                echo '<label class="campo" for="estado">Estado:</label>';
                echo "<input type='text' name='estado' id='estado' maxlength='2' size='2' value='{$linha['estado']}' /><br>";
                echo '<label class="campo" for="cidade">Cidade:</label>';
                echo "<input type='text' name='cidade' id='cidade' size='30' value='{$linha['cidade']}' />";
                echo '<br />';
                echo '<label class="campo" for="senha">*Senha:</label>';
                echo "<input type='password' name='senha' id='senha' value='{$linha['senha']}' /><br>";
              }
            ?>
            <label class="aviso" >* Campos Obrigatórios</label>
            <br />
            <input class="botao" type="button" onClick="history.go(-1)" value="Cancelar" />
            <input class="botao" type="submit" value="Atualizar" />
            <br />
          </fieldset>
        </form>
      </section>
    <footer><p><b>Por: </b>Márcio Benê<br><b>Contato: </b><a href="mailto:marciobene@gmail.com">
  marcio.rbs@gmail.com</a></p></footer>
  </body>
</html>