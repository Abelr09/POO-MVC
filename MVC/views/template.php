<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h1>
        LOGOTIPO
    </h1>

    </header>
    <?php
    include "modules/nav.php";
    ?>
    <section>
        <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasControllers();
        ?>
    </section>
</body>
</html>