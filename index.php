<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    // unset($_SESSION["card"]);
    // unset($_SESSION);
    $url = "";
    $name = "";

    // if(isset($_GET["image"])){
    //     $url = $_GET["image"];
    // }
    // else{
    //     echo "please enter url";
    // }
    echo "<pre>";
    $_SESSION["card"][$_GET["id"]] = $_GET;
    print_r($_SESSION);
    
    // if (isset($_GET["name"])) {
    //     if ($_SESSION["card"][$_GET["name"]]) {
    //         $cards = $_SESSION["card"][$_GET["name"]];   
    //     }
    // }
    // if (isset($_SESSION["card"][$_GET["name"]])) {
    //     $cards = $_SESSION["card"][$_GET["name"]];
    // }
    // else{
    //     $_SESSION["card"][$_GET["name"]] = $_GET;
    // }
    // echo "<pre>";
    // print_r($_SESSION);
    // else {
    //     $_SESSION["card"][$_GET["name"]] = $_GET;
    // }
    // echo "<pre>";
    // print_r($_SESSION["card"][$_GET["name"]]);
    ?>

    <div>
        <form action="./index.php" method="get">
            <input type="text" name="id" placeholder="id" value="" />
            <input type="text" name="name" placeholder="Name" value="name">
            <input type="text" name="image" placeholder="url" value="url">
            <input type="submit" name="submit" />
        </form>

        <?php foreach($_SESSION["card"]  as $key => $value) : ?>
            <div>
                <img src="<?php echo $value["image"] ?>" />
                <h3><?php echo $value["name"] ?></h3>
            </div>
        <?php endforeach; ?>    




    </div>
</body>

</html>