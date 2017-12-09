<html>
  <?php require("./head.php")?>
  <body>
    <?php require("./nav.php")?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://media.timeout.com/images/102835079/image.jpg" style="filter:blur(4px);height:100%;transform: scale(1.1);">
          <div class="carousel-caption " style="transform: translateY(-50%);top:55%"> <!--d-none d-md-block-->
            <div>
              <h1>InterPlaces</h1>
              <p><em>ricerca, trova, get in touch</em></p>
              <form action="./search.php" class="form-inline my-2 my-lg-0 justify-content-center" method="get">
                <input class="form-control mr-sm-3" placeholder="Cerco... (es. pizzeria)" aria-label="Cosa cerchi?" name="cosa">
                <input class="form-control mr-sm-3" placeholder="Vicino a... (es. Bergamo)" aria-label="Vicino a?" name="dove">
                <button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Cerca</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
