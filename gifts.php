<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Gifts</title>
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
                <h2>Gift</h2>
                <img src="https://imgur.com/MKqBZQx.jpg" alt="">
                <h3>Description</h3>
                <p>A box that you can send to a friend. Contains a variety of useful items.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Stickers</h2>
                <img src="https://imgur.com/d9FBuJD.jpg" alt="">
                <h3>Description</h3>
                <p>Stickers don't take up space in your Item Bag. You can carry only a certain number of each sticker.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Postcard Book</h2>
                <img src="https://imgur.com/pzipmuV.jpg" alt="">
                <h3>Description</h3>
                <p>A book to collect Postcards and remember locations from yours and your friends' journeys.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

<?php
        include('footer.php');
    ?>