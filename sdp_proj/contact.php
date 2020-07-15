<!DOCTYPE html>
<html ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h1>The beautiful life</h1>
        <nav>
            <a href="finalproject.html">Home</a>
            <a href="about.html">About</a>
            <a href="blogpost.html">Blogpost</a>
            <a href="contact.php">Contact us</a>
        </nav>
    </header> 
    <h1>Reach out to us.</h1>
    <p id="abt">A little conversation never harmed anybody!</p>
    <div class="container">
        <h3>Subscribe:</h3>
        <form id="contactform" method="POST" action="" autofill="off">
            <input name="name" id="name" type="text" class="form-control" placeholder="Full name" required>
            <br>
            <input name="email" id="email" type="email" class="form-control" placeholder="your email address" required>
            <br>
            <label for="type">Choose the type of subscription you want:</label>
            <select name="type" id="type">
               <option value="weekly">Weekly</option>
               <option value="Monthly">Monthly</option>
               <option value="Quarterly">Quarterly</option>
               <option value="Yearly">Yearly</option>
            </select>
            <br>
            <input type="submit" id="submit" name="submit" class="form-control submit" value="Subscribe">
        </form>
        <?php
include "conn.php";
if(isset($_POST['submit']))
{
    //echo "SUBMITTED!";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subs = $_POST['type'];

    $insert_queries= "INSERT INTO subscription VALUES ('$name','$email', '$subs')";
    if (mysqli_query($conn,$insert_queries))
    {
        echo "<p style='color: #123c69;'> Subscribed! :) \n</p>";
    }
    else{
        echo " Error in subscription :( \n";
    }
}
?>
    </div>
        <div class="mail">
            <h3>Talk to us:</h3>
            <p>Click <a href="mailto:poorva2829@gmail.com?subject=reaching%20out&body=How%20are%20you
                " target="_blank">here</a> to send us a quick email letting us know your valuable feedback, so that we can continue making a better experience for you!!</p> 
        </div>
        <div class="social">
            <h3>Follow us for all the buzz!</h3>
            <div class="icons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
        </div>
</body>
</html>
