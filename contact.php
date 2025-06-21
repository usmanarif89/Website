<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<?php include 'menu.php'; ?>
   
     
    
    <div class="cont">
    <h1>Contact Us</h1>
    <hr>
      <form action="userinfo.php" method="post"> 
        <div class="form-group">
          <p>Name</p>
          <input type="text" name="user" >
        </div>
        <div class="form-group">
          <p>Mobile no</p>
          <input type="number" name="mobile" >
        </div>
        <div class="form-group"> 
          <p>Email</p>
          <input type="text" name="email">
          </div>
          <div class="form-group">
            <p>Comments</p>
           <textarea name="comment"></textarea>
          </div>
        <br>
          <button type="submit">submit</button>
        </form>
      </div>

 


       <footer>
        <div>
          <h1>PhoneNo</h1>
          <p>03218383028</p> 
        </div>
        <div>
          <h1>Location</h1>
          <p>Multan</p>
        </div>
        <div>
          <h1>Email</h1>
          <p>ua659543@gmail.com</p>
        </div>
       </footer>
</body>
</html>