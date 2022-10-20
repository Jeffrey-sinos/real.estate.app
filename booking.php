

<?php 
include_once('conn.php');

$userdata = new DB_con();

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $date = $_POST['date'];
  $time = $_POST['time'];

   $sql = $userdata->booking($name, $email, $tel, $date, $time);
  if ($sql == TRUE) {
    echo "<script>alert('Registration successfull!');</script>";
    echo "<script>window.location.href='index.html'</script>";
  } else {
    
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='booking.php'</script>";
  }
  
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8"><!DOCTYPE html>
        <html lang = "en">
            <head>
                <meta charset = "UTF-8">
                <meta name = "viewport" content = "width=device-width, initial-scale-1.0">
                <title>Real Estate</title>
                <!--Css Links-->
                <link rel = "stylesheet" href = "./Assets/CSS/style.css">
                <!--BoxIcons-->
                <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
            </head>
            <body>
                <!--Navbar-->
                <header>
                    <div class = "nav container">
                        <!--Logo-->
                        <a href = "index.html" class = "logo"><i class='bx bx-home'></i>Real Estate</a>
        
                        <!--Menu icon-->
                        <input type = "chckbox" name = "" id ="menu">
                        <label for = "menu"> <i class='bx bx-menu' id = "menu-icon"></i></label>
        
                        <!--Nav ist-->
                        <ul class = "navbar">
                            <li><a href = "index.html">Home</a></li>
                            <li><a href = "listings.html">Properties</a></li>
                            <li><a href = "index.html">About</a></li>
                            <li><a href = "#footer">Contacts</a></li>
                        </ul>
        
                       
                    </div>
                </header>
        
                
        
                <!--booking-->
                <div class = "login container">
                        <div class="login-container">
                            <h2>Book a Visit</h2>
                        
                            <!--Sign Up Form-->
                            <form method = "POST">
                                <span>Full Name</span>
                                <input type ="text" name = "name" id = "" value ="" placeholder = "Your Name" required>
                                <span>Enter your email address</span>
                                <input type = "email" name = "email" id = "" value =""placeholder = "yourmail@gmail.com" required>
                                <span>Phone</span>
                                <input type = "tel" name = "tel" id = "" value = ""placeholder="Enter your number" required>
                                <span>Date and Time</span>
                                <input type = "date" name = "date" id = "" value = "" placeholder = "" required>
                                <span>Time</span>
                                <input type = "time" name = "time" id = "" value = "" placeholder = "" required>
        
                                <input type="submit" name = "submit" value="Book Visit" class = "button">
                                
                            </form>
                            
        
                            
                        </div>
            
                        <!--Booking Image-->
                        <div class="booking-image">
                            <img src="Assets/img/room.png" alt="">
                        </div>
                </div>
        
                <!--NewsLetter-->
                <section class="newsletter container">
                    <h2>Any questions?</h2>
                    <form action = "">
                        <input type = "email" name = "" id = "email-box" placeholder = "yourmail@gmail.com">
                        <input type = "submit" value = "send" class = "btn">
                    </form>
                </section>
        
                <!--Footer-->
                <section class="footer" id = "footer">
                    <div class="footer-container container">
                        <h2>Real Estate</h2>
                        <div class="footer-box">
                            <h3>Quick Links</h3>
                            <a href="#">Agency</a>
                            <a href="#">Building</a>
                            <a href="#">Rates</a>
                        </div>
        
                        <div class="footer-box">
                            <h3>Locations</h3>
                            <a href="#">Nairobi</a>
                            <a href="#">Mombasa</a>
                            <a href="#">Kisumu</a>
                        </div>
        
                        <div class="footer-box">
                            <h3>Contacts</h3>
                            <a href="#">0712345678</a>
                            <a href="#">yourmail@gmail.com</a>
                            <div class = "social">
                                <a href = "#"><i class='bx bxl-instagram'></i></a>
                                <a href = "#"><i class='bx bxl-twitter'></i></a>
                                <a href = "#"><i class='bx bxl-facebook'></i></a>
                            </div>
                        </div>
                    </div>
                </section>
        
                <!--Copyright-->
                <div class="copyright">
                    <p>&#169; Group 9 All Rights Reserved</p>
        
                </div>
        
            </body>
        </html>
        
        
        