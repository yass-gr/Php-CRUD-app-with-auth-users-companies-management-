<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once __DIR__ . "/../shared/header.php"; ?>
<h1 class="text-center mt-5">Add Company</h1>
 <div class="container">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input value="<?= htmlspecialchars($company["name"]) ?>" type="text" class="form-control" id="exampleInputEmail1" name="name" >
    <p class="text-danger"><?= $validation["name"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adress</label>
    <input value="<?= htmlspecialchars($company["adress"]) ?>" type="text" class="form-control" id="exampleInputEmail1" name="adress" >
    <p class="text-danger"><?= $validation["adress"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Website</label>
    <input value="<?= htmlspecialchars($company["website"]) ?>" type="text" class="form-control" id="exampleInputEmail1" name="website" >
    <p class="text-danger"><?= $validation["website"] ?? "" ?></p>
  </div>

  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
    
</body>

</html>
