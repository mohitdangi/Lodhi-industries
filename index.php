<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Bootstrap 5 Responsive Landing Page Design</title>
	<!-- All CSS -->
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-warning">Lodhi</span>Indutries</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1531053326607-9d349096d887?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
				<div class="carousel-caption">
					<h5>Lodhi Inustries</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1531053326607-9d349096d887?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
				<div class="carousel-caption">
					<h5>Always Dedicated</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1531053326607-9d349096d887?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
				<div class="carousel-caption">
					<h5>True Construction</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><!-- about section starts -->

	<section>
      <div class="row">
	  <div class="six">
  <h1>our Services
    <span>Example Tagline Text</span>
  </h1>
</div>
      </div>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-hammer"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-brush"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-wrench"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-truck-pickup"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-broom"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-plug"></i>
            </div>
            <h3>Service Heading</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
      </div>
    </section>
	<!-- machines -->
	<section>
      <div class="row">
	  <div class="six">
  <h1>our Machines
    <span>Example Tagline Text</span>
  </h1>
</div>
      </div>
      <div class="row">
	  <div class="column">
  <div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
</div>

        <div class="column">
		<div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
        </div>
        <div class="column">
		<div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
        </div>
        <div class="column">
		<div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
        </div>
        <div class="column">
		<div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
        </div>
        <div class="column">
		<div class="image-wrapper">
    <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Service Image">
    <div class="overlay">
      <h3>Machine Heading</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequatur necessitatibus eaque.
      </p>
    </div>
  </div>
        </div>
      </div>
    </section>

	<section id="clients" class="section-bg">

<div class="container">

<div class="row">
	  <div class="six">
  <h1>our CLients
    <span>Meet our happy clients</span>
  </h1>
</div>
      </div>

  <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt="">
	  </div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt="">
	  </div>
	</div>
  
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt="">
	  </div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt="">
	  </div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt="">
	  </div>
	</div>
  
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt="">
	  </div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt="">
	  </div>
	</div>
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	  <div class="client-logo">
		<img src="https://bootstrapmade.com/demo/themes/NewBiz/img/clients/client-8.png" class="img-fluid" alt="">
	  </div>
	</div>

  </div>

</div>

</section>
	<!-- All Js -->
	<script src="bootstrap.bundle.min.js"></script> 
</body>
</html>
