<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list jobs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1>список дел</h1>
        <form action="add.php" method="post">
            <input type="text" name="task" id="task" placeholder="нужно сделать" class="form-control">
            <button id="btn" type="submit" name="sentTask" class="btn btn-success"> Отправит</button>
        </form>
    </div>
</body>

</html>