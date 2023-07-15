<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Unobtainable items</title>
</head>
<body>
<?php
        include('header.php');
    ?>
    <?php
        include('item_header.php');
    ?>
<div class = "container1">
        <div class = "row">
            <div class = "column">
                <h2>Premier Ball</h2>
                <img src="https://imgur.com/bOhutUf.jpg" alt="">
                <h3>Description</h3>
                <p>Premier Balls are used to catch Raid Bosses or Shadow Pokémon after defeating them.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Beast Ball</h2>
                <img src="https://imgur.com/lgMaD9G.jpg" alt="">
                <h3>Description</h3>
                <p>Beast Balls are used to catch Ultra Beasts during special events.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

<?php
        include('footer.php');
    ?>