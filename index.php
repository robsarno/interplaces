<html>
  <?php require("./head.php")?>
  <style>
  @media (min-width: 576px) {
      .carousel-caption{
        transform: translateY(-50%);top:55%;
      }
    }
    .carousel-caption{
      transform: translateY(-50%);top:50%;
    }
  </style>
  <body>
    <?php
    require("./nav.php");
    if(isset($_GET['error']))
      echo "<script type='text/javascript'>alert('Errore! I parametri sembrano esser stati modificati.');</script>";
    ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block" src="https://media.timeout.com/images/102835079/image.jpg" style="max-width:100%;filter:blur(6px);height:100%;width:100%;transform: scale(1.1);">
          <div class="carousel-caption"> <!--d-none d-md-block-->
            <div>
              <h1>InterPlaces</h1>
              <hr style="max-width:50px;border-width:3px;" class="bg-primary">
              <p><em>ricerca, trova, get in touch</em></p>
              <form action="./search.php" class="form-inline my-2 my-lg-0 justify-content-center" method="get">
                <input class="form-control mr-sm-3" placeholder="Cerco... (es. pizzeria)" aria-label="Cosa cerchi?" name="cosa">
                <input class="form-control mr-sm-3" placeholder="Vicino a... (es. Bergamo)" aria-label="Vicino a?" name="dove">
                <button class="btn btn btn-outline-primary my-2 my-sm-0" type="submit">Cerca</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
