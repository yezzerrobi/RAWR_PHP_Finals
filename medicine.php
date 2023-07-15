<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Medicine</title>
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
                <h2>Potion</h2>
                <img src="https://imgur.com/J7rmevf.jpg" alt="">
                <h3>Description</h3>
                <p>A spray-type medicine that restores the HP of one Pokémon by 20 points.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
            <div class = "column">
                <h2>Super Potion</h2>
                <img src="https://imgur.com/FALnvY3.jpg" alt="">
                <h3>Description</h3>
                <p>A spray-type medicine that restores the HP of one Pokémon by 50 points.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
            <div class = "column">
                <h2>Hyper Potion</h2>
                <img src="https://imgur.com/4YMMP61.jpg" alt="">
                <h3>Description</h3>
                <p>A spray-type medicine that restores the HP of one Pokémon by 200 points.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
            <div class = "column">
                <h2>Max Potion</h2>
                <img src="https://imgur.com/xgJlCrp.jpg" alt="">
                <h3>Description</h3>
                <p>A spray-type medicine that completely restores all HP of a single Pokémon.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
            <div class = "column">
                <h2>Revive</h2>
                <img src="https://imgur.com/zjx2P03.jpg" alt="">
                <h3>Description</h3>
                <p>A medicine that can revive fainted Pokémon. It also restores half of a fainted Pokémon's maximum HP.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
        <div class = "row">
            <div class = "column">
                <h2>Max Revive</h2>
                <img src="https://imgur.com/bVDCesC.jpg" alt="">
                <h3>Description</h3>
                <p>A medicine that can revive fainted Pokémon. It also fully restores a fainted Pokémon's maximum HP.</p>
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