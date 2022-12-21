<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Страница товара</title>
</head>

<body>
    <div class="container">
        <div class="cards">
            <?php
            require("./data.php");
            require("./search.php");
            $id = $_GET["id"];
            $str = seacrch_by_id($products, $id);
            if ($str != -1) {
                $t = $str["title"];
                $p = $str["price"];
                $path = $str["path-img"];
                $id = $str["id"];
                $description = $str["description"];
                echo  "<div class='card_itemStr'>
                                <div>
                                    <div><img class='card_imgStr' src='$path' alt=''></div>
                                </div>
                        </div>
                        <div class='card_itemTwo'>
                            <div>
                                <p class='card_titleStr'>$t</p>
                            </div>
                            <div>
                                <p class='card_description'>Name: $description</p>
                            </div>
                            <div>
                                <p class='card_priceStr'>Price: $p &#8381</p>
                            </div>
                        </div>";
            } else {
                echo "Товар не найден";
            }
            ?>
        </div>
    </div>
    <div class="knop">
        <div class="akak">
            <div><a class="btn" href='index.php'>Назад</a></div>
        </div>
    </div>
</body>

</html>