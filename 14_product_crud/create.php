<?php
?>

<?php

// echo '<pre>';
//  var_dump($_SERVER);
// echo '</pre>';


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud_1', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$error = [];


$statement = $pdo->prepare('SELECT * FROM products_1 ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo $_SERVER['REQUEST_METHOD'] . "<br>";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $title = $_POST["title"];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $date = date('Y-m-d H:i:s');

  if (!$title) {
    $error[] = 'Title Required';
  }
  if (!$price) {
    $error[] = 'Title Price';
  }
  if (empty($error)){
  $statement = $pdo->prepare("INSERT INTO products_1 (title, description,image,price,create_date)
          VALUES(:title, :image, :description, :price, :date)");
  $statement->bindValue(':title', $title);
  $statement->bindValue(':image', '');
  $statement->bindValue(':description', $description);
  $statement->bindValue(':price', $price);
  $statement->bindValue(':date', $date);

  $statement->execute();
}
}


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="p-4">
  <h1 class="text text-center text-primary">Create New Products</h1>

  <?php if (!empty($error)) : ?>
    <div class="alert alert-danger">
      <?php foreach ($error as $errors) : ?>
        <div><?php echo $errors ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <form action="create.php" method="post">
    <div class="mb-3">
      <label class="form-label">Product Image</label>
      <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
      <label class="form-label">Product Title</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Product Description</label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
      <label class="form-label">Product Price</label>
      <input type="number" step=".01" class="form-control" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>