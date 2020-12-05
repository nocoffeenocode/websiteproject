<?php
session_start();
$conn = mysqli_connect('localhost','root','','projecttest');

$id=$_GET['edit'];
$update=true;
$result=$conn->query("SELECT * FROM appointments WHERE id='$id'");
  if(mysqli_num_rows($result)==1){
    $row=$result->fetch_array();
    $name=$row['doc'];
    $date=$row['date'];
    $time=$row['time'];
    $type=$row['type'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="css/style.css">
    <style> body{
        font-size:larger 
    }
    </style>
    
</head>
<body>

    <?php 
    
    if(!isset($_SESSION["userid"])){
             header("location: logout1.php");
            }
    ?>
    <div class="container-main">
        <header>
            <div class="logo">
                <a href="homepage.html">   <!--This is the logo-->   
                <img src="Images/Logo.png" height="100" width="250" alt="Malhar Logo">
                </a>
            </div>
            <div class="search">
                <form> <!--This is the searchbar-->   
                    <input type="search" name="search" placeholder="Search Content">
                    <input type="submit" name = "submit">
                </form>
            </div>
            <div class= "spacefix"></div> <!--The spacing to align the logo and search-->
            <div class = "topmenu">
                <ul> <!--This is the links for nav menu on top-->   
                    <li><a href="homepage.php">Home </a></li>
                    <li><a href="resources.php">Resources </a></li>
                    <li><a href="therapists.php">Therapists </a></li>
                    <li><a href="appointment.php">Appointments </a></li>
                    <li><a href="table.php">Appointment Records </a></li>
                </ul>
            </div >
        </header>

        <section class="content-holder"><!--Content will be put here-->
            <article class="main-content">
                <main>
                    <pr>Please Enter your Appointment Details:</pr>
                        <br>
                        <pr style="font-size: small;">Note: These appointments will have to be confirmed from the Doctor's End depending on their availabilty.
                        </pr>

                        <br>
                        <br>
                        
                        
                        <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="doctor">Doctor name:</label><br>
                        <input type="text" name="doctor" value="<?php echo $name;?>">
                        
                        <br>
                        <br>
                        
                        <label for="time">Enter Time Slot Wanted: </label> <br>
                        <input type="time" name="time" value="<?php echo $time;?>"> <br>
                        <label for="date">Select Date: </label> <br>
                        <input type="date" name="date" value="<?php echo $date;?>">
                        
                        
                        
                        <br>
                        <br>
                        
                        <input type="checkbox" name="offer" value="Student">I am a Student<br>
                        <input type="checkbox" name="offer" value="City">I live in Mumbai
                        
                        <br>
                        <br>
                        
                        <label for="session">Session Type</label> <br>
                        <select id="session" name="session" value="<?php echo $type;?>">
                          <option value="online">Online</option>
                          <option value="text">Text Based</option>
                          <option value="phone">Phone Call</option>
                          <option value="physical">In Person</option>
                        </select>
                        
                        <br>
                        <br>
                        
                         <div style="text-align: center">
                        <input type="submit" value="Update" style="margin: auto;
                                padding: 10px 25px;
                                background-color: darkcyan;
                                color: #fff;
                                border: none;
                                font-size: 20px;
                                border-radius: 10px;
                                box-shadow: 10px 10px 20px #a8a8a8;
                                transition: box-shadow 0.5s;
                                outline: none;
                                text-align: center;
                                 " >
                        </div>
                        
                        </form>
                        

                </main>
            </article>

            <aside class="sidebar"><!--Sidebar-->
                <div>
                    <h4> External Links </h4>
                    <ul>
                        <li><a href="https://www.statista.com/chart/15390/global-suicide-rates/" target = "blank">Suicide Deaths 2016 </a></li>
                        <li><a href="https://www.statista.com/statistics/236567/number-of-suicides-in-selected-countries-by-gender/" target = "blank">Suicide Deaths by Gender </a></li> 
                        <li><a href="https://www.who.int/mental_health/prevention/suicide/suicideprevent/en/" target = "blank">Suicide Deaths by Economic Class </a></li> 
                    </ul>
                </div>
            </aside>
            <div class= "spacefix"></div>

            <footer class="main-footer">
                <div class="footer-menu"><!--Menu Options from header-->
                    <h4> Footer </h4>
                    <ul> <!--This is the links for nav menu on top-->   
                        <li><a href="homepage.php">Home </a></li>
                        <li><a href="resources.php">Resources </a></li>
                        <li><a href="therapists.php">Therapists </a></li>
                        <li><a href="appointment.php">Appointments </a></li>
                        <li><a href="table.php">Appointment Records </a></li>
                    </ul>
                </div>
                <div class="contact"><!--Contact Info-->
                    <address class="contact-address">
                        <h4>Contact us at: </h4>
                        <p>Email: <a href="mailto:email@site.com">email@site.com</a></p>
                        <p>Phone: <a href="tel:1231231231">1231231231</a></p>
                        <p>Email: <a href="mailto:email@site.com">email@site.com</a></p>
                        <p>Phone: <a href="tel:1231231231">9876543210</a></p>
                    </address>
                </div>
                <div class= "spacefix"></div>
                <div><!--copyright (cause it looks cool)-->
                    <p>
                        <small>Copyright &copy; All Rights Reserved</small>
                    </p>
                </div>
            </footer>
        </section>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
</body>
</html>