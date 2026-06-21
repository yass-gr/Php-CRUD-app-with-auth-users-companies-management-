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

 <div class="container-fluid">
    <h1 class="mt-5">Contacts</h1>
 <a  href="/?route=contacts/add"><button class="btn btn-success mb-3">Add Contact</button></a>

<table class="table table-striped table-hover">
  <thead>
    <th>Name</th>
    <th>Sec Name</th>
    <th>Tel</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Company name</th>
    <th>actions</th>
  </thead>
  
  <tbody>

    <? foreach($contacts as $c): ?>
        
        <tr>
            <td><?= htmlspecialchars($c["name"]) ?></td>
            <td><?= htmlspecialchars($c["sec_name"]) ?></td>
            <td><?= htmlspecialchars($c["tel"]) ?></td>
            <td><?= htmlspecialchars($c["email"]) ?></td>
            <td><?= htmlspecialchars($c["adress"]) ?></td>
            <td><?= htmlspecialchars($c["company"]) ?></td>
            <td> 
                <a href="/?route=contacts/update&id=<?= htmlspecialchars($c["id"]) ?>"><button class="btn btn-warning">Edit</button></a>
                <a href="/?route=contacts&id=<?= htmlspecialchars($c["id"]) ?>"><button onclick="return confirm('are you sure?!')" class="btn btn-danger">Delete</button></a>

            </td>
        </tr>

    <? endforeach ?>





  </tbody>
</table>

 </div>
</body>



</html>