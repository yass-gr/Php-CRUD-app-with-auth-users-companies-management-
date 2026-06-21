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
<h1 class="text-center mt-5">Add contact</h1>
 <div class="container">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
    <p class="text-danger"><?= $validation["name"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Second Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sec_name" >
    <p class="text-danger"><?= $validation["sec_name"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tel</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" name="tel" >
    <p class="text-danger"><?= $validation["tel"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <p class="text-danger"><?= $validation["email"] ?? "" ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adress</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="adress" aria-describedby="emailHelp">
    <p class="text-danger"><?= $validation["adress"] ?? "" ?></p>
  </div>
  <select name="company" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Company</option>
  <? foreach($companies as $cm): ?>
    <option value="<?= htmlspecialchars($cm["id"]) ?>" > <?= htmlspecialchars($cm["name"])  ?></option>
  <? endforeach ?>

</select>
<p class="text-danger"><?= $validation["company"] ?? "" ?></p>

 

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
    
</body>