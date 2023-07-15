<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Poké Balls</title>
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
                <h2>Poke Ball</h2>
                <img src="https://imgur.com/z00VNy2.jpg" alt="">
                <h3>Description</h3>
                <p>A device for catching wild Pokémon. It's thrown like a ball, comfortably encapsulating its target.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Great Ball</h2>
                <img src="https://imgur.com/S8j6qXJ.jpg" alt="">
                <h3>Description</h3>
                <p>A high-performance Ball with a higher catch rate than a standard Poké Ball.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Ultra Ball</h2>
                <img src="https://imgur.com/uF1Fx7c.jpg" alt="">
                <h3>Description</h3>
                <p>An ultra-performance Ball with a higher catch rate than a Great Ball.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Master Ball</h2>
                <img src="https://imgur.com/fZa7ocr.jpg" alt="">
                <h3>Description</h3>
                <p>The best Poké Ball with the ultimate level of performance. With it, you will catch any wild Pokémon without fail.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>


        <?php
        include('footer.php');
    ?>