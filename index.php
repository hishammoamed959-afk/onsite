<?php
include('./inc/header.php');
include('./inc/data.php');
?>
<br><br>

<!-- carousel -->
<section>
  <h1 class="text-center text-primary fw-bold mt-5">Welcome to School Library</h1>
  <hr class="w-50 mx-auto bg-primary mb-4">

  <div id="carouselExampleInterval" class="carousel slide carousel-fade p-3 mb-5 bg-body rounded container shadow" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <?php
      $first = true;
      foreach ($slides as $slide) {
          $active = $first ? ' active' : '';
          echo '<div class="carousel-item' . $active . '" data-bs-interval="3000">
                  <img src="' . $slide . '" class="d-block w-100 carousel-img" alt="slide">
                </div>';
          $first = false;
      }
      ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<hr class="w-50 mx-auto bg-primary mb-5">

<style>
  /* Carousel image styling */
  .carousel-img {
    height: 600px;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.5s ease;
  }

  .carousel-item.active .carousel-img {
    transform: scale(1.03);
  }

  /* Carousel control icons */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 50px;
    height: 50px;
    background-size: 100%, 100%;
  }

  /* Heading styling */
  h1 {
    font-size: 3rem;
  }

  /* Shadow for carousel */
  .carousel {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
  }

  /* Smooth fade */
  .carousel-fade .carousel-item {
    transition: opacity 1s ease-in-out;
  }
</style>


<!-- many cards -->
<section class="my-5">
  <div class="container-fluid">
    <h2 class="text-center mb-4">Our Books Collection</h2>
    <div class="row g-3">
      <?php foreach ($books as $id => $book): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <a href="book.php?id=<?php echo $id; ?>" class="book-card-link">
            <div class="card h-100 border-0 shadow-sm">
              <img src="<?php echo $book['image']; ?>" class="card-img" alt="Book Image">
              <div class="card-img-overlay d-flex flex-column justify-content-end p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                <h5 class="card-title"><?php echo $book['title']; ?></h5>
                <p class="card-text"><?php echo $book['author']; ?></p>
                <span class="btn btn-primary">View Details</span>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  /* Full card image */
  .card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
  }

  .book-card-link:hover .card-img {
    transform: scale(1.05);
  }

  /* Card overlay text */
  .card-img-overlay {
    border-radius: 0 0 15px 15px;
  }

  /* Heading */
  h2 {
    font-weight: 700;
    color: #333;
  }

  /* Button */
  .btn-primary {
    background-color: #007bff;
    border: none;
    transition: background-color 0.3s;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }
</style>

<!-- footer -->
<?php include('./inc/footer.php'); ?>
