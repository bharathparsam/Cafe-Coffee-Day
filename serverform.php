<?php 
    /*
CREATE TABLE `orders` (
 `orderid` varchar(200) NOT NULL,
 `choosebeans` varchar(200) DEFAULT NULL,
 `type` varchar(200) DEFAULT NULL,
 `numberofbags` int(11) DEFAULT NULL,
 `arrivaldate` date DEFAULT NULL,
 `catalog` varchar(200) DEFAULT NULL,
 `gift` varchar(200) DEFAULT NULL,
 `name` varchar(200) DEFAULT NULL,
 `address` varchar(200) DEFAULT NULL,
 `city` varchar(200) DEFAULT NULL,
 `state` varchar(200) DEFAULT NULL,
 `zip` int(11) DEFAULT NULL,
 `phone` int(11) DEFAULT NULL,
 `comments` varchar(200) DEFAULT NULL,
 PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
    */
    session_start();
    $rand1=rand(1000, 9999);
    $rand2=rand(1000, 9999);
    $orderid=$rand1."".$rand2;
    $choosebeans=$_POST["choosebeans"];
    $type=$_POST["type"];
    $numberofbags=$_POST["numberofbags"];
    $arrivaldate=$_POST["arrivaldate"];
    $catalog=$_POST["catalog"];
    //$gift="null";
    $name=$_POST["name"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $phone=$_POST["phone"];
    $comments=$_POST["comments"];

    $con = mysql_connect("localhost","root","hp");
    $db=mysql_select_db("coffe");
    $q="INSERT INTO orders (orderid,choosebeans,type,numberofbags,arrivaldate,catalog,name,address,city,state,zip,phone,comments) VALUES ('".$orderid."','".$choosebeans."','".$type."',".$numberofbags.",'".$arrivaldate."','".$catalog."','".$name."','".$address."','".$city."','".$state."',".$zip.",".$phone.",'".$comments."')";
    mysql_query($q,$con);

    $_SESSION["name"]=$name;
    $_SESSION["address"]=$address;
    $_SESSION["city"]=$city;
    $_SESSION["state"]=$state;
    $_SESSION["zip"]=$zip;
    $_SESSION["phone"]=$phone;

    setcookie("orderid",$orderid);
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
                            <tr><td><b>Order ID</b></td><td><b><?php echo $orderid; ?></b></td></tr>
                            <tr><td>Name</td><td><?php echo $name; ?></td></tr>
                            <tr><td>Address</td><td><?php echo $address; ?></td></tr>
                            <tr><td>City</td><td><?php echo $city; ?></td></tr>
                            <tr><td>State</td><td><?php echo $state; ?></td></tr>
                            <tr><td>Zip</td><td><?php echo $zip; ?></td></tr>
                            <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
                            <tr><td>Comments</td><td><?php echo $comments; ?></td></tr>
                        </table>
                        <table>
                            <tr><td>Variety</td><td><?php echo $choosebeans; ?></td></tr>
                            <tr><td>Type</td><td><?php echo $type; ?></td></tr>
                            <tr><td>Number of bags</td><td><?php echo $numberofbags; ?></td></tr>
                            <tr><td>Arrival Date</td><td><?php echo $arrivaldate; ?></td></tr>
                            <tr><td>Catalog</td><td><?php echo $catalog; ?></td></tr>
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