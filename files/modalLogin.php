      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Entrar</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="autenticaLogin.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuário</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="inputForNomeUsuario" pattern="[0-9a-zA-Z]*" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="inputForSenha" pattern="[0-9a-zA-Z]{6,16}" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="1" name="inputForKeepLogged" checked>Lembrar-me</label>
            </div>
              <button type="submit" class="btn btn-melivrei btn-block"> Entrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          <p>Não é um membro? <a href="#">Cadastre-se</a></p>
          <p>Esqueceu a<a href="#"> senha?</a></p>
        </div>
      </div>