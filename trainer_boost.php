<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Trainer Boosts</title>
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
                <h2>Incense</h2>
                <img src="https://imgur.com/8La7GdN.jpg" alt="">
                <h3>Description</h3>
                <p>Incense with a mysterious fragrance that lures wild Pokémon to your location for 30 minutes.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Cain Bag</h2>
                <img src="https://imgur.com/0T5xYOG.jpg" alt="">
                <h3>Description</h3>
                <p>A bag of coins. Opening it causes a certain Pokémon to appear for a limited time.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Mystery Box</h2>
                <img src="https://imgur.com/pEMMzPF.jpg" alt="">
                <h3>Description</h3>
                <p>A mysterious old box. Opening it causes a certain Pokémon to appear for a limited time.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Daily Adventure Incense</h2>
                <img src="https://imgur.com/F6tCsHH.jpg" alt="">
                <h3>Description</h3>
                <p>Special Incense with a mysterious fragrance that attracts wild Pokémon for 15 minutes.
                You can receive one each day at no cost.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Star Piece</h2>
                <img src="https://imgur.com/c5g4HnT.jpg" alt="">
                <h3>Description</h3>
                <p>A small shard of a beautiful gem. Earns 50% more Stardust for 30 minutes.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>

        <div class = "row">
            <div class = "column">
                <h2>Lucky Egg</h2>
                <img src="https://imgur.com/koJ66vF.jpg" alt="">
                <h3>Description</h3>
                <p>A Lucky Egg that's filled with happiness! Earns double XP for 30 minutes.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

<?php
        include('footer.php');
    ?>