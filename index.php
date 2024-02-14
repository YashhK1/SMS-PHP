<!-- Landing page for student and Admin -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        h2 {
            padding: 20px;
            height: 70px;
            text-align: center;
            color: white;

        }

        button {
            border-radius: 20%;
            margin: 10px;
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: white;
            background-color: black;

        }

        .button{
          display: flex;
          justify-content: center;
        }
        a{
            color: white;
            text-decoration:none;
        }

        .image{
            background-image: url("sms.webp");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100 ;
        
        }
        footer{
            text-align:center;
            padding:2%;

        }
    </style>
</head>
<body>
    <header>
    <div class="image">
        <img src=\assets\image\sms.webp" alt="">
        <div class="button">
            <button><a href="">Home</a></button>
            <button><a href="">admin login</a></button>
            <button><a href="">student login</a></button>
            <button><a href="">student signup</a></button>
        </div>
        <h2>Student Management System</h2>
    </div>
    </header>

    <section></section>

    <footer>
    <div class="footer">
        &copy; RTSoft LLP Gondia 2024
    </div>
    </footer>

</body>
</html>