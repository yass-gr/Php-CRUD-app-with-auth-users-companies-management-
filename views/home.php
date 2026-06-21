

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
    <?php require_once __DIR__ . "/shared/header.php"; ?>

 <h1 class="mt-5 p-3 text-center"> Bienvenue <?= htmlspecialchars($_SESSION["user"]["name"] ?? "Guest") ?>!</h1>

        <div class="btns d-flex gap-2 p-3 justify-content-center">
            <a href="/?route=contacts"><button class="btn btn-primary">Contacts</button></a>
            <a href="/?route=companies"><button class="btn btn-primary">Companies</button></a>
        </div>
    
</body>
</html>