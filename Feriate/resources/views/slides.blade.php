
<link rel="stylesheet" href="./css/slides.css">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">

        <div class="head" class="d-block w-100">
          <div class="leyenda">
            <h2>PUBlICA TU FERIA</h2>
            <h3>y compartila con tus clientes, ellos reservan los productos y los retiran ese dia!</h3>
          </div>
          @if(Auth::check())
            <a href="/crearFeria"><button id="boton" type="button" name="button">Crea tu feria!!!!</button></a>
          @else
            <a href="/login"><button id="boton" type="button" name="button">Logueate y Crea tu feria!</button></a>
          @endif;
          <div class="lista">
            <ul>
              <li><i class="fas fa-star-of-life"></i>
             <span> Crea</span> tu feria</li>
              <li><i class="fas fa-star-of-life"></i><span> Publica</span> lo que no usas</li>
              <li><i class="fas fa-star-of-life"></i><span> Gestiona</span> las reservas</li>
              <li><i class="fas fa-star-of-life"></i><span> Ahorra</span> tiempo</li>
              <a href="preguntas.php"><button type="button" name="button">MAS INFO!</button></a>
            </ul>
          </div>
          </div>
      </div>
      <div class="carousel-item" data-interval="2000">
        <div class="header">
          <div class="comprar">
          <img src="images/percha.jpg" alt="">
        </div>
          <div class="elegi">
            <h3>elegi lo que necesitas</h3>
            <img src="images/ordenador-personal.png" alt="">
          </div>
          <div class="compra">
            <h3>pagalo y reservalo</h3>
            <img src="images/tarjeta-de-credito.png" alt="">
          </div>
          <div class="paga">
            <h3>probalo y retira en la feria</h3>
            <img src="images/compras.png" alt="">
          </div>
      <div class="marca">
        <h1>feriate.com</h1>
      </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
