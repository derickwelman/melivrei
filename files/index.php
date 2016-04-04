<?php
include("../template/header.php");
?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img class="first-slide" src="../images/slide1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Novidades.</h1>
              <p>Fulano comprou a revista tal de cicrano.</p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="../images/slide2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Novidades.</h1>
              <p>Fulano comprou a revista tal de cicrano.</p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="third-slide" src="../images/slide3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div class="container marketing">



      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Compre mais <br><span class="text-muted">por muito menos.</span></h2>
          <p class="lead">Diversos livros, HQs e revistas de todos os gêneros novos, semi-novos e usados à venda.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../images/books.jpg" alt="Compre mais por muito menos">
        </div>
      </div>

      <hr class="featurette-divider">

      
      <!-- /END THE FEATURETTES -->

      <!-- LASTEST PRODUCTS -->
      <div id="products">
       <div class="row">
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">Uma Longa Jornada</p></h3>    
            <h5><p class="text-center text-muted">Nicolas Sparks</p></h5>    
            <img src="../images/products/livro10.jpg" alt="Uma longa jornada" class="tamanhoProduto">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">A Guerra dos Tronos</p></h3>    
            <h5><p class="text-center text-muted">George R. R. Martin</p></h5>    
            <img src="../images/products/livro11.jpg" alt="A guerra dos tronos" class="tamanhoProduto">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">A menina que colecionava</p></h3>  
            <h5><p class="text-center text-muted">Bruna Vieira</p></h5>    		  
            <img src="../images/products/livro7.jpg" alt="A menina que colecionava borboletas" class="tamanhoProduto">
          </a>
        </div>
      </div>  


      <div class="row">
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">Nárnia</p></h3>    
            <h5><p class="text-center text-muted">C. S. Lewis</p></h5>    
            <img src="../images/products/livro9.jpg" alt="Narnia" class="tamanhoProduto">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">Cidades de Papel</p></h3> 
            <h5><p class="text-center text-muted">John Green</p></h5>    		
            <img src="../images/products/livro8.jpg" alt="Cidades de Papel" class="tamanhoProduto">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <h3><p class="text-center">Diário da Seleção</p></h3>    
            <h5><p class="text-center text-muted">Kiera Cass</p></h5>    
            <img src="../images/products/livro1.jpg" alt="Diario da Seleção" class="tamanhoProduto">
          </a>
        </div>
      </div>  
      <!-- /end LASTEST PRODUCTS -->

    </div>
  </div>

  <?php
  include("../template/footer.php");
  ?>