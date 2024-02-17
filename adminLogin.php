<!-- admin login page --><!-- admin login page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/login.css">
   
</head>
<body>

        <div class="login-form">
            <form action="login" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="">
                            <h1> Login </h1>
                            <hr class="">
                            <label from="Username"><b>Username:-</b></lable>
                            <input class= "form-control"type="text"placeholder= "Enter username"name="uname" require>
                            <br></br>

                            <label from="password"><b>Password:-</b></label>
                            <input class=" form-control"type="text"placeholder="Enter password" name="Password" require>
                            <br></br>
                               <div class="login-btn">
                            <button type="SUBMIT">Login</button></div>
                            <br></br>
                            <label>
                                <input type="checkbox" checked="checked"name="remember"> Remember me </label>
        </div> 
        </div>           
        </div>
            </form>
        </div>
    </body>
</html>