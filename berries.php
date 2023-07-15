<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Berries</title>
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
                <h2>Razz Berry</h2>
                <img src="https://imgur.com/sMEVAUL.jpg" alt="">
                <h3>Description</h3>
                <p>Feed this to a Pokémon to make it easier to catch.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Nanab Berry</h2>
                <img src="https://imgur.com/8v9vEXt.jpg" alt="">
                <h3>Description</h3>
                <p>Feed this to a Pokémon to calm it down, making it less erratic.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Pinap Berry</h2>
                <img src="https://imgur.com/mW8CPlT.jpg" alt="">
                <h3>Description</h3>
                <p>Feed this to a Pokémon to receive more Candy when you catch it.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Golden Razz Berry</h2>
                <img src="https://imgur.com/3lMbjYb.jpg" alt="">
                <h3>Description</h3>
                <p>Feed this to Pokémon to make it easier to catch. Works better than Razz Berry.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Silver Pinap Berry</h2>
                <img src="https://imgur.com/dnURNNO.jpg" alt="">
                <h3>Description</h3>
                <p>Feed this to a Pokémon to receive more Candy when you catch it and make it easier to catch.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

    <?php
        include('footer.php');
    ?>