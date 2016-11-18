<?php
    $con = mysql_connect("localhost","root","hp");
    $db=mysql_select_db("coffe");
    $q="SELECT * FROM orders WHERE orderid=".$_POST["inporder"];
    $result=mysql_query($q,$con);
    $row=mysql_fetch_assoc($result);
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
                    <h2>Order Summary</h2>
                    <fieldset>
                        <table>
                            <tr><td><b>Order ID</b></td><td><b><?php echo $row["orderid"]; ?></b></td></tr>
                            <tr><td>Name</td><td><?php echo $row["name"]; ?></td></tr>
                            <tr><td>Address</td><td><?php echo $row["address"]; ?></td></tr>
                            <tr><td>City</td><td><?php echo $row["city"]; ?></td></tr>
                            <tr><td>State</td><td><?php echo $row["state"]; ?></td></tr>
                            <tr><td>Zip</td><td><?php echo $row["zip"]; ?></td></tr>
                            <tr><td>Phone</td><td><?php echo $row["phone"]; ?></td></tr>
                            <tr><td>Comments</td><td><?php echo $row["comments"]; ?></td></tr>
                        </table>
                        <table>
                            <tr><td>Variety</td><td><?php echo $row["choosebeans"]; ?></td></tr>
                            <tr><td>Type</td><td><?php echo $row["type"]; ?></td></tr>
                            <tr><td>Number of bags</td><td><?php echo $row["numberofbags"]; ?></td></tr>
                            <tr><td>Arrival Date</td><td><?php echo $row["arrivaldate"]; ?></td></tr>
                            <tr><td>Catalog</td><td><?php echo $row["catalog"]; ?></td></tr>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
        <footer> &copy; Cafe Coffee Day<br>
            2015 </footer>
    </div>
</body>
</html>