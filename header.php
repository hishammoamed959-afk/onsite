<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   
</head>
<body class="bg-body-tertiary  " >

    <!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary shadow-sm">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold text-primary" href="#">School Library</a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="./about.php">About</a>
        <a class="nav-link" href="./book.php">Books</a>
      </div>
    </div>
  </div>
</nav>

<style>
  /* Navbar link hover effect */
  .navbar-nav .nav-link {
    font-weight: 500;
    color: #555;
    position: relative;
    transition: color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #007bff;
  }

  /* Active link underline */
  .navbar-nav .nav-link.active::after {
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background-color: #007bff;
    margin-top: 3px;
    border-radius: 2px;
  }
</style>
