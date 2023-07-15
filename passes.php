<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokémon Store | Passes</title>
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
                <h2>Raid Pass</h2>
                <img src="https://imgur.com/qyb37p2.jpg" alt="">
                <h3>Description</h3>
                <p>Pass to join a Raid Battle. You can get a free pass at Gyms once per day if you don't already have one.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Premium Battle Pass</h2>
                <img src="https://imgur.com/hEnzLlE.jpg" alt="">
                <h3>Description</h3>
                <p>A Premium Battle Pass can be used to join a Raid Battle or enter the premium GO Battle League.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>Remote Raid Pass</h2>
                <img src="https://imgur.com/r2UAIpS.jpg" alt="">
                <h3>Description</h3>
                <p>A Remote Raid Pass can be used to join a Raid Battle remotely.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>

            <div class = "column">
                <h2>EX Raid Pass</h2>
                <img src="https://imgur.com/l4J89Rm.jpg" alt="">
                <h3>Description</h3>
                <p>Exclusive Raid Pass to join a special Raid Battle. You can use this pass only at the specified limited-time event.</p>
                <h3>Price: </h3>
                <a href="cart.php"><button>Add to Cart</button> </a>
                <a href="purchase.php"><button>Purchase</button></a>
            </div>
        </div>
</div>

<?php
        include('footer.php');
    ?>