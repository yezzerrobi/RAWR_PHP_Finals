<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Key Items</title>
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
                <h2>Camera 1</h2>
                <img src="https://imgur.com/lpm2I4r.jpg" alt="">
                <h3>Description</h3>
                <p>When you encounter Pokémon in the wild, you can use your camera to photograph them.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Camera 2</h2>
                <img src="https://imgur.com/nBq1m0u.jpg" alt="">
                <h3>Description</h3>
                <p>A device to capture photos of Pokémon. Photos can be shared with others.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

<?php
        include('footer.php');
    ?>