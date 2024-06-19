<html>
<head>
 <style>
   body
   {
     background-image:url("dac.jpg") ;
     background-position:center;
     background-size:cover;
     height:100vh;
     margin:0;
     padding:0;
   }
   .login-form
   {
     text-align:center;
     width:270px;
     margin:8% auto 0;
     padding:20px;
     background-image: ;
   }
   .input
   {
     border-radius:10px;
     padding:8px;
     margin:10px 0;
     border:2px solid white;
   }
   h1
   {
     color:white;
   }
   p
   {
     color:white;
   }
   button
   {
     border-radius:10px;
     padding:5px;
     width:50%;
     background-color:#f79d00;
   }
   a
   {
     color:lightskyblue;
   }
 </style>
</head>
<body>

 <div class="login-form">
<form action="aut.php" method="POST">
  <h1>Login</h1>
  <input type="userid" placeholder="userid" class="input" name="userid" required/><br><br>
  <input type="password" placeholder="password" class="input" name="password" required/><br><br>
  <p>Forget Password</p><br>
  <button type="submit" target="reg.php">Submit</button>
</form>
 </div>
</body>
</html>