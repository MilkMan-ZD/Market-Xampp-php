<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://unpkg.com/imask"></script>
    <script defer src="js/script.js"></script>
</head>

<body>
    <div class="knop">
        <div class="akak">
            <div><a class="btn" href='index.php'>Просто массив</a></div>
            <div><a class="btn" href='index.php?sort=price-asc'>Сортиврока по цене по возрастанию</a></div>
            <div><a class="btn" href='index.php?sort=price-desc'>Сортировка по цене по убыванию</a></div>
            <div><a class="btn" href='index.php?sort=title-asc'>Сорировка по названию по возрастанию</a></div>
            <div><a class="btn" href='index.php?sort=title-desc'>Сортировка по названию по убыванию</a></div>
        </div>
    </div>
    <div class="container">
        <div class="cards">
            <?php
            if (empty($_GET['sort'])) {
                $sort = 'simple';
            } else {
                $sort = $_GET['sort'];
            }
            require("./data.php");
            if ($sort == 'price-asc') {
                function reverseCompare($x, $y)
                {
                    if ($x["price"] == $y["price"]) return 0;
                    elseif ($x["price"] < $y["price"]) return -1;
                    else return 1;
                }
                usort($products, "reverseCompare");
            } else if ($sort == 'price-desc') {
                function reverseCompare($x, $y)
                {
                    if ($x["price"] == $y["price"]) return 0;
                    elseif ($x["price"] < $y["price"]) return 1;
                    else return -1;
                }
                usort($products, "reverseCompare");
            } else if ($sort == 'title-asc') {
                function reverseCompare($x, $y)
                {
                    if ($x["title"] == $y["title"]) return 0;
                    else if ($x["title"] < $y["title"]) return -1;
                    else return 1;
                }
                usort($products, "reverseCompare");
            } else if ($sort == 'title-desc') {
                function reverseCompare($x, $y)
                {
                    if ($x["title"] == $y["title"]) return 0;
                    else if ($x["title"] < $y["title"]) return 1;
                    else return -1;
                }
                usort($products, "reverseCompare");
            }
            foreach ($products as ['title' => $t, 'price' => $p, 'path-img' => $path, 'id' => $id]) {
                echo  "<div class='card_item'>
                                <img class='card_img' src='$path' alt=''>
                                <p class='card_title'>$t</p>
                                <p class='card_price'>$p &#8381</p>
                                <p class='card_title'><a href='product.php?id=$id'>Подробнее</a></p>
                            </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>