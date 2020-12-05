<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="css(1)/style.css">

    
    
</head>
<body>
    
    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="https://www.colorhexa.com/536878.png" alt="">
            <h1>Welcome !</h1>
            <h3>Already have an account ?</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <input type="text" name="email" class="input-box" placeholder="User-email" required>
                <input type="password" name="pass" class="input-box" placeholder="Password" required>
                <input type="submit" name="login-btn" class="btn" value="Login">
           <div style="font-size: large ; color: red;"><center><?php
                if(isset($_GET["msg"]))

                    echo $_GET["msg"];
           ?></center></div>
           <div style="font-size: large ; color: red;"><center><?php
                if(isset($_GET["msgsign"]))

                    echo $_GET["msgsign"];
           ?></center></div>
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="https://www.colorhexa.com/536878.png" alt="">
            <h1>Welcome !</h1>
            <h3>Don't have an account ?</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
        </div>
        


        <div id="right-form" class="form form-hide">
            <h1>Signup</h1>
            <form name="signupform" onsubmit="return(validateSignup());" action="signup.php" method="post" >
                <input type="text" name="name" class="input-box" placeholder="Name">
                <input type="text" name="pnumber" class="input-box" pattern="[0-9]{10}" placeholder="Phone Number(10-digit)">
                <input type="email" name="useremail" class="input-box" placeholder="Email">
                <input type="password" name="userpass" class="input-box" placeholder="Password" required>
                <input type="password" name="confirm" class="input-box" placeholder="Confirm Password">
                <input type="submit" name="signup-btn" class="btn" value="Signup">

            </form>

        </div>
    </section>

    <script type="text/javascript">
    var left_cover = document.getElementById("left-cover");
    var left_form = document.getElementById("left-form");
    var right_cover = document.getElementById("right-cover");
    var right_form = document.getElementById("right-form");


    function switchSignup() {
        

        left_form.classList.add("form-hide");
        left_cover.classList.remove("cover-hide");
        right_cover.classList.add("cover-hide");
        right_form.classList.remove("form-hide");
    
    }
    
    function validateSignup(){
            var name=document.signupform.name;
            var password=document.signupform.userpass;
            var confirm=document.signupform.confirm;
            if(name.value==""){

                alert("Name cannot be blank");
                name.focus();
                return false;
            }
            
            if(document.signupform.useremail.value==""){

                alert("Email id cannot be blank")
                document.signupform.useremail.focus();
                return false;
            }

            if(document.signupform.pnumber.value==""){

                alert("phone number cannot be blank")
                document.signupform.pnumber.focus();
                return false;
            }
            

            if((confirm.value)!=(password.value)){
                alert("Passwords do not match")
                confirm.focus();
                return false;
            }
            return true;
    }

</script>
    

</body>
</html>