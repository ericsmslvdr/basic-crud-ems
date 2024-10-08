<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Basic CRUD EMS</title>
</head>

<body>
    <?php include 'views/components/header.php' ?>

    <main>
        <section class="container">
            <div class="row">
                <?php include('views/components/form.php'); ?>
                <?php include('views/components/table.php'); ?>
            </div>
        </section>
    </main>
</body>

</html>