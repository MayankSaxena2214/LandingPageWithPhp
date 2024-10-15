<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li> -->
        
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/about.avif" class="img-fluid aboutimg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Hello I'm Mayank Saxena</h2>
            <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur nesciunt omnis similique tempore eligendi distinctio mollitia dolores suscipit maiores quo eum corporis expedita excepturi nobis voluptas necessitatibus a, minima ducimus beatae et placeat labore. Temporibus aspernatur rem repellendus sit!</p>
            <a href="about.php" class="btn btn-success">Check More</a>
        </div>
    </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="images/service1.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Home Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="images/service1.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Home Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="images/service1.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Home Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.avif" alt="" class="img-fluid pb-5">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control mb-4">
            </div>
            <div class="form-group">
                <label for="">Email id</label>
                <input type="text" name="email" class="form-control mb-4">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" class="form-control mb-4">
            </div>
            <div class="form-group">
                <label for="">Comments</label>
                <textarea class="form-control mb-4" name="comments" id=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@mayanksaxena2214</p>
</footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>