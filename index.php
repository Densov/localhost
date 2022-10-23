
<?php
    $nickname = "Den";
    $balance = 0;
    $addBalance2 = 10;
    $addBalance2 = 35;

    $balance = $addBalance1 + $addBalance2;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> Привет, <?php echo $nickname; ?></div>

    <?php
        echo "<div>" .$balance. "</div>";
        ?>
</body>
</html>

<?php 
    
    $a = 3;
    $b = 4;
    
    $c = $a + $b;
    
    /* Ниже этого текста напишите код вывода в браузере результата сложения переменных $a и $b */
    echo $c;
    
?>

<?php 
    $book_name = "Гарри Поттер и узник Азкабана";
    $book_author = "Джоан Роулинг";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о книге</title>
</head>
<body>
    
    <h1>Книга <?php echo $book_name ; ?></h1>
    <p>Погрузитесь в волшебный мир созданный <?php echo $book_author ; ?></p>
    
</body>
</html>