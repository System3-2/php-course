<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud_1', 'root', '');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $statement = $pdo->prepare('SELECT * FROM products_1 ORDER BY create_date DESC');
 $statement->execute();
 $products = $statement->fetchAll(PDO::FETCH_ASSOC);
 
//  echo '<pre>';
//  var_dump($products);
//  echo '</pre>';
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
  <h1 class="text text-center text-primary">Products Crud</h1>
  <p class="text-center mb-3">
    <a href="create.php" class="btn btn-success">Create</a>
  </p>
  <table class="table p-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
     
     <?php foreach($products as $i => $product) :?> 
      <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td><?php echo $product['image']?></td>
        <td><?php echo $product['title']?></td>
        <td><?php echo $product['price']?></td>
        <td><?php echo $product['create_date']?></td>
        <td>
        <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>