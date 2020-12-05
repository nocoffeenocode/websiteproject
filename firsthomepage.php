<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malhar Home</title>
    <link rel="stylesheet" href="css/style.css">
    <style> body{
        font-size:larger 
    }
    </style>
    
</head>
<body>
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
                    <li><a href="table.php">My Appointments </a></li>
                    <li><a href="about.php">About Us </a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </div >
        </header>

        <section class="banner cycle-slideshow"> <!--Banner Slider-->
            <img src="Images/mentalhealth-1.png"  alt="Banner 1">
            <img src="Images/mentalhealth-2.png"  alt="Banner 2">
        </section>

        <section class="content-holder"><!--Content will be put here-->
            <article class="main-content">
                <main>
                    <h1>Welcome to our page!</h1>
                    <p >
                        The aim of this website is the focus on the most basic needs in the life of an individual, which is mental health. 
                        We hope to bridge the gap and provide necessary resources to the users to connect with the required therapists 
                        and counsellors in their vicinity in just a few steps. 
                    </p>
                    <p>
                        We acknowledge the stigma in our society towards mental illnesses, and the subsequent difficulty in gaining access to the right resources. 
                        Most people are not able to locate a therapist or counsellor in their locality due the fear of not knowing whom to ask. 
                        Some are scared to do so as they do not want their family members to gain knowledge of this. 
                        Most people who suffer from mental illness feel they are alone in this situation, 
                        and do not feel comfortable to reach out.
                    </p>
    
                    <p>
                        We believe that in times like these, a webiste that can provide access to the required materials
                        will be a very important tool.
                        
                        In times of Google and self-diagnosis, it will also provide a source of verifiable results and
                        a means of communication with experts on the matter. This will lead to better treatment, and a safer
                        approach to discovering about oneself and their illnesses.
                        
                        This idea was motivated by the current scenario where many try to downplay the
                        seriousness of their illness and treat themselves via online resources. There have also been cases 
                        of assumption and misdiagnoses. 
                    </p>
                </main>
            </article>

            <aside class="sidebar"><!--Sidebar-->
                <div>
                    <h4 id="a"> External Links </h4>
                    <ul id="a">
                        <li><a href="https://www.statista.com/chart/15390/global-suicide-rates/" target = "blank">Suicide Deaths 2016 </a></li>
                        <li><a href="https://www.statista.com/statistics/236567/number-of-suicides-in-selected-countries-by-gender/" target = "blank">Suicide Deaths by Gender </a></li> 
                        <li><a href="https://www.who.int/mental_health/prevention/suicide/suicideprevent/en/" target = "blank">Suicide Deaths by Economic Class </a></li> 
                    </ul>
                </div>
            </aside>
            <div class= "spacefix"></div>

            <footer class="main-footer">
                <div class="footer-menu"><!--Menu Options from header-->
                    
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