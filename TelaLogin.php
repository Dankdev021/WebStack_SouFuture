<?php
require_once __DIR__ . '/Includes/Header.php';
?>
<main>

<section>
  <a href="index.php">
    <button class="btn btn-success">Voltar</button>
  </a>
</section>

<form method="post">

  <div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo" value="<?= $Curso->NomeCurso ?>">
  </div>

  <div class="form-group">
    <label>Descrição</label>
    <textarea class="form-control" name="descricao" rows="5"><?= $Curso->descricao ?></textarea>
  </div>

  <div class="form-group">
    <label>Status</label>

    <div>
      <div class="form-check form-check-inline">
        <label class="form-control">
          <input type="radio" name="ativo" value="S" checked> Ativo
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-control">
          <input type="radio" name="ativo" value="N" <?= $Curso->ativo == 'N' ? 'checked' : '' ?>> Inativo
        </label>
      </div>
    </div>

  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</form>

</main>






















<!--

<div class="Tela_Login">
        <form method="post" class="login_div">

            <div class="log_head">
                <h4 align="center">Login</h4>
            </div>
    
<br><br>
            <div id="input_login" class="form-group ls-login-user">
                <label for="userLogin"><b>Título</b></label>
                <input class="form-control ls-login-bg-user input-lg" id="usuario" name="titulo" type="text" aria-label="Usuário" placeholder="Usuário" 
                value="" >
            </div> <br> <br>


            <div id="input_senha" class="form-group ls-login-password">
                <label for="userPassword"><b>Senha</b></label>
                <input class="form-control ls-login-bg-password input-lg" id="senha" type="password" aria-label="Senha" placeholder="Senha">
            </div> 
<br>
            <a id="link_esqueci_senha" href="#" class="ls-login-forgot">Esqueci minha senha</a>

            <input id="Entrar" type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">

        </form>

    </div>
-->
    <?php

    require_once __DIR__ . '/Includes/Footer.php';