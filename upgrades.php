<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Upgrades</title>
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
                    <h2>Bag Upgrade</h2>
                    <img src="https://imgur.com/hCOccg3.jpg" alt="">
                    <h3>Description</h3>
                    <p>Increases the max number of items you can carry by 50.</p>
                    <h3>Price: </h3>
                    <a href="cart.php"><button>Add to Cart</button> </a>
                    <a href="purchase.php"><button>Purchase</button></a>
                </div>
                <div class = "column">
                    <h2>Pokémon Storage Upgrade</h2>
                    <img src="https://imgur.com/jNXsZVg.jpg" alt="">
                    <h3>Description</h3>
                    <p>Increases the max number of Pokémon you can carry by 50.</p>
                    <h3>Price: </h3>
                    <a href="cart.php"><button>Add to Cart</button> </a>
                    <a href="purchase.php"><button>Purchase</button></a>
                </div>
                <div class = "column">
                    <h2>Postcard Pages</h2>
                    <img src="https://imgur.com/Znw3rEK.jpg" alt="">
                    <h3>Description</h3>
                    <p>Increases the max number of Postcards can save by 50.</p>
                    <h3>Price: </h3>
                    <a href="cart.php"><button>Add to Cart</button> </a>
                    <a href="purchase.php"><button>Purchase</button></a>
                </div>
                <div class = "column">
                    <h2>Team Medalion</h2>
                    <img src="https://imgur.com/OLrCNHn.jpg" alt="">
                    <h3>Description</h3>
                    <p>A unique coin that enables a Trainer to change teams.
                    A Team Medallion can only be purchased from the shop once per 365 days.</p>
                    <h3>Price: </h3>
                    <a href="cart.php"><button>Add to Cart</button> </a>
                    <a href="purchase.php"><button>Purchase</button></a>
                </div>
            </div>
    </div>

    <?php
        include('footer.php');
    ?>
</body>
</html>