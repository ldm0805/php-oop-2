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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center pt-4 text-white">Boolshop</h1>
        <div class="row">
            <div class="card-con">
                <!-- ForEach per ciclare l'array del cibo -->
                <?php
                // $arrayProductChilds = array_merge($arrayProductChildsFood, $arrayProductChildsAccessories, $arrayProductChildsGames);
                foreach ($arrayProductChilds as $childs) {
                ?>
                    <div class="card">
                        <div class="hover03">
                            <figure>
                                <img class="card-img-top" src="<?php echo $childs->image; ?>" alt="Card image cap">
                            </figure>
                        </div>
                        <div class="card-body">
                            <h3><?php echo $childs->title; ?></h3>
                            <p class="card-text">
                                <?php echo changeIcon($childs->race); ?>
                                <?php echo $childs->race; ?>.
                            </p>
                            <p class="card-text ">Prezzo:
                                <?php echo $childs->price; ?>&euro;.
                            </p>
                            <?php if (isset($childs->weight)) { ?>
                                <p class="card-text">Peso:
                                    <?php echo $childs->weight; ?>.
                                </p>
                            <?php } ?>
                            <?php if (isset($childs->ingredients) && is_array($childs->ingredients)) { ?>
                                <p class="card-text">Ingredienti:
                                    <?php echo implode(', ', $childs->ingredients); ?>.
                                </p>
                            <?php } ?>
                            <?php if (isset($childs->material)) { ?>
                                <p class="card-text">Materiale:
                                    <?php echo $childs->material; ?>.
                                </p>
                            <?php } ?>
                            <?php if (isset($childs->dimension)) { ?>
                                <p class="card-text">Dimensioni:
                                    <?php echo $childs->dimension; ?>.
                                </p>
                            <?php } ?>
                            <?php if (isset($childs->description)) { ?>
                                <p class="card-text">Caratteristiche:
                                    <?php echo $childs->description; ?>.
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</body>

</html>