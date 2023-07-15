<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | TMs</title>
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
                <h2>Fast TM</h2>
                <img src="https://imgur.com/LvvpG7k.jpg" alt="">
                <h3>Description</h3>
                <p>This Technical Machine teaches the Pokémon a new Fast Attack.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Charged TM</h2>
                <img src="https://imgur.com/HutxNGZ.jpg" alt="">
                <h3>Description</h3>
                <p>This Technical Machine teaches the Pokémon a new Charged Attack.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Elite Fast TM</h2>
                <img src="https://imgur.com/w8DBHTv.jpg" alt="">
                <h3>Description</h3>
                <p>This Technical Machine lets you choose a Fast Attack to teach to a Pokémon.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Elite Charged TM</h2>
                <img src="https://imgur.com/hPpxjqf.jpg" alt="">
                <h3>Description</h3>
                <p>This Technical Machine lets you choose a Charged Attack to teach to a Pokémon.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

        </div>
</div>

<?php
        include('footer.php');
    ?>