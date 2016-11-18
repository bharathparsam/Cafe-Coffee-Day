<?php
session_start();
if(isset($_COOKIE["orderid"])){
    $orderid=$_COOKIE["orderid"];
}
$_SESSION["cart"]=$_POST["catalog"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cafe Coffee Day</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="form.css">
</head>
<body>
    <div id="all">
        <div id="header" class="top"> <img id="logo" src="images/logo.png" alt="Logo"> <img id="phrase" src="images/phrase.png" alt="a lot can happen over coffee">
            <div id="nav">
                <ul>
                    <li><a href="index.html" id="home">Home</a></li>
                    <li id="Beverages"><a href="beverages.html">Beverages</a></li>                    
                    <li class="selected" id="ordernow"><a href="form2.php">Order Now</a></li>
                </ul>
            </div>
        </div>
        <div id="tableContainer">
            <div id="tableRow">
                <div id="drinks">
                    <h1>BEVERAGES</h1>
                    <p><a href="beverages.html#houseblend">House Blend, $1.49</a></p>
                    <p><a href="beverages.html#mocha">Mocha Cafe Latte, $2.35</a></p>
                    <p><a href="beverages.html#cappuccino">Cappuccino, $1.89</a></p>
                    <p><a href="beverages.html#chai">Chai Tea, $1.85</a></p>
                    <h1>ELIXIRS</h1>
                    <p> We proudly serve elixirs brewed by our friends
                        at the Head First Lounge. </p>
                    <p>Green Tea Cooler, $2.99</p>
                    <p>Raspberry Ice Concentration, $2.99</p>
                    <p>Blueberry Bliss Elixir, $2.99</p>
                    <p>Cranberry Antioxidant Blast, $2.99</p>
                    <p>Chai Chiller, $2.99</p>
                    <p>Black Brain Brew, $2.99</p>
                </div>
                <div class="main fBorder">
                    <h1>Cafe Coffee Day Bean Machine</h1>
                    <h2>Fill out the form below and click "order now" to order</h2>
                    <form name="orderform" action="serverform.php" method="POST" onsubmit="return validateForm();">
                        <fieldset>
                            <legend>Order details</legend>
                            <table>
                            <tr><td>Choose your beans:</td><td>
                            <select name="choosebeans">
                            	<option value="houseblend">House Blend</option>
                            	<option value="kenyan">Kenyan Roast</option>
                            	<option value="yearcaud">Yearcaud</option>
                            </select>
                            </td></tr>
                            <tr><td>Type:</td><td>
                                <input type="radio" name="type" value="whole">Whole Bean<br>
                                <input type="radio" name="type" value="ground">Ground
                            </td></tr>
                            <tr><td>Number of bags:</td><td>
                                <input type="number" name="numberofbags" id="numberofbags" placeholder="3" value="">
                            </td></tr>
                            <tr>
                            <td>Must arrive by date:</td>
                            <td><input type="text" name="arrivaldate" id="arrivaldate" placeholder="2020/12/31" value=""></td>
                            </tr>
                            <tr>
                            <td><input type="checkbox" name="catalog" value="catalog">Include Catalog</td>
                            <!--td><input type="checkbox" name="gift" value="gift">Gift Wrap</td-->
                            </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Ship to</legend>
                            <table>
                            <tr><td>Name:</td><td><input type="text" id="name" name="name" placeholder="Full Name" value="<?php if(isset($_SESSION['name']))
                            echo $_SESSION['name'] ?>"></td></tr>
                            <tr><td>Address:</td><td><input type="text" id="address" name="address" placeholder="21-173,G G Street" value="<?php if(isset($_SESSION['address']))
                            echo $_SESSION['address'] ?>"></td></tr>
                            <tr><td>City:</td><td><input type="text" id="city" name="city" placeholder="New Delhi" value="<?php if(isset($_SESSION['city']))
                            echo $_SESSION['city'] ?>"></td></tr>
                            <tr><td>State:</td><td><input type="text" id="state" name="state" value="<?php if(isset($_SESSION['state']))
                            echo $_SESSION['state'] ?>" placeholder="Andhra Pradesh"></td></tr>
                            <tr><td>Zip:</td><td><input type="number" id="zip" name="zip" value="<?php if(isset($_SESSION['zip']))
                            echo $_SESSION['zip'] ?>" placeholder="517408"></td></tr>
                            <tr><td>Phone:</td><td><input type="number" id="phone" name="phone" value="<?php if(isset($_SESSION['phone']))
                            echo $_SESSION['phone'] ?>" placeholder="9629781853"></td>
                            <tr><td>Comments</td><td><textarea id="comments" name="comments" cols="28" rows="6" placeholder="Enter your comments here"></textarea></td>
                            <tr><td><input type="submit" value="Order Now"></td><td></td></tr>
                            </table>
                        </fieldset>
                    </form>
                    <form name="orderstatus" action="serverform2.php" method="POST">
                        <fieldset>
                            <legend>Get Order details</legend>
                            <table>
                            <tr>
                                <td>Enter Order ID:</td>
                                <td><input type="text" name="inporder" id="inporder" placeholder="1430850089" value="<?php if(isset($_COOKIE['orderid']))
                                                                echo $orderid ?>"></td>
                            </tr>
                            <tr><td><input type="submit" value="Get Order Info"></td><td></td></tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <footer> &copy; Cafe Coffee Day<br>
            2015 </footer>
    </div>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>