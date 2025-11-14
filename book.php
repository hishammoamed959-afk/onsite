<?php
include('./inc/data.php');
include('./inc/header.php');

if (!isset($_GET['id']) || !isset($books[$_GET['id']])) {
  echo "<h1 class='text-center text-danger mt-5'>Book not found!</h1>";
  exit;
}

$book = $books[$_GET['id']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $book['title']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
</head>

<body style="background: url('./images/pexels-joshsorenson-990432.jpg') no-repeat center center fixed; background-size: cover;">

  <div class="container mt-5 p-5 bg-dark bg-opacity-75 text-light rounded shadow-lg">
    <div class="row align-items-center g-4">
      <div class="col-md-5 text-center">
        <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" 
             class="img-fluid rounded shadow-lg" style="max-height: 450px; object-fit: cover;">
      </div>
      <div class="col-md-7">
        <h1 class="fw-bold text-primary mb-3"><?php echo $book['title']; ?></h1>
        <h4 class="text-light mb-4">by <?php echo $book['author']; ?></h4>
        <p class="fs-5 mb-4" style="line-height: 1.6;"><?php echo $book['description']; ?></p>
        <a href="index.php" class="btn btn-outline-light btn-lg">Back to Home</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6D2Hkz2O3oS0nKQ1R0tE3MoRZ+K1ckn5tbtKp6niQFZ/" 
          crossorigin="anonymous"></script>
</body>
</html>

<?php include('./inc/footer.php'); ?>
