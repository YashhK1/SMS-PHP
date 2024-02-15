<!-- Student Registration Page  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
      .center {

        margin: auto;
        width: 50%;

      }
      .center .form-control{
        width: 380px;
      }
    
    </style>
</head> 
<body>
  
<div> 

     <?php
      
         if(isset($_POST['create'])){
             $fullname      = $_POST['Full name'];
             $fathername    = $_POST['Father name'];
             $mothername    = $_POST['Mother name'];
             $address       = $_POST['Address'];
             $email         = $_POST['Email'];
             $mobileno      = $_POST['Monile no'];
             $dob           = $_POST['DOB'];
             $category      = $_POST['Category'];  
             $course        = $_POST['Course'];

             echo $fullname , " ", $fathername," " , $mothername , " " , $address , " " , $email , " ", $mobileno, " " , $dob , " ", $category , " " ,  $course ," ";
             
         }
      
     ?>

  </div>



  <div>

    <form action="registration.php" method="post">

<div class="center">
        
    
    <h1>REGISTRATION</h1>
     
     <hr style="width:380px;"> 
        <label for="fullname"><b>Full Name:- </lable>         
        <input class="form-control" type="text" name="Full-name"  required>

        <label for="fathername"><b>Father Name:-</label>
        <input class="form-control" type="Father Name" name="Father-name"  required>

        <label for="mothername"><b>Mother Name:-</label>
        <input class="form-control" type="Mother Name" name="Mother-name" required>

        <label for="address"><b>Address:-</label>
        <input class="form-control" type="Address" name="Address" required>

        <label for="email"><b>Email:-</label>
        <input class="form-control" type="email" name="Email" required>

        <label for="mobileno"><b>Mobile No:-</label>
        <input class="form-control" type="number" name="Mobile No"  required>
        

        <label for="dob"><b>DOB:-</label>
        <input class="form-control" type="date" name="DOB"  required>
        
        <label for="category"><b>Category:-</label>
        <input class="form-control" type="Category" name="Category"  required>
  
        
        <label for="course"><b>Course</label>
        <input class="form-control" type="Course" name="Course"  required>

        <hr>

        <input class="btn btn-primary" type="submit" name="create" value = "submit">       
       </div>
     </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 </body>
</html>