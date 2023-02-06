<?php
include __DIR__ . '/database.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>esercizio 06-02</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="card-cont d-flex">
                <!-- ForEach per ciclare la classe -->
                <?php foreach ($arrayProductChilds as $childs) { ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $childs->image; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3><?php echo $childs->title; ?></h3>
                            <p class="card-text">Animale:
                                <span>
                                    <?php echo $childs->race; ?>.
                                </span>
                            </p>
                            <p class="card-text ">Prezzo:
                                <span>
                                    <?php echo $childs->price; ?>.
                                </span>
                            </p>
                            <p class="card-text">Peso:
                                <span>
                                    <?php echo $childs->weight; ?>.
                                </span>
                            </p>
                            <p class="card-text">Peso:
                                <span>
                                    <?php echo $childs->ingredients; ?>.
                                </span>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>