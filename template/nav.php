<!-- NAVBAR
  ================================================== -->
  <nav class="navbar navbar-default mynav">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php"><img src="../images/melivrei.png" width="75px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/melivrei/files/index.php">Home</a></li>
          <li><a href="/melivrei/files/registerProduto.php">Cadastro de Produto</a></li>
          <li><a href="/melivrei/files/pesquisaprodutos.php">Pesquisa</a></li>
        </ul>

        
        <ul class="nav navbar-nav navbar-right">
         
        <?php 
        if(!isset($_SESSION['idPessoa'])){
        echo '
         <li><button type="button" class="btn btn-link btn-md btn-nav" data-toggle="modal" data-target="#cadastro"><span class="glyphicon glyphicon-user"></span>  Cadastrar</button></li>
         <li><button type="button" class="btn btn-link btn-md btn-nav" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span>  Entrar</button></li>

        <div id="cadastro" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><span class="glyphicon glyphicon-user"></span> Cadastre-se</h4>
                  </div>
                  <div class="modal-body" style="padding:40px 50px;">';

                   include("registerPessoa.php");
                   
                 echo '</div>
                 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

      <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">';
         include("modalLogin.php");
         echo '</div>';
        }else{
        echo '<li><span class="btn btn-link btn-md">'.$_SESSION['usuario'].'</span></li>
          <li><button type="button" class="btn btn-link btn-md btn-nav" data-toggle="modal"><span class="glyphicon glyphicon-off"></span><a href="logout.php">Sair</a></button></li>';
        }?>

      </ul>
    </div>
  </div>
</nav>