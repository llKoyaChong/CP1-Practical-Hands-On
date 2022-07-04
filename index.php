<?php
session_start();
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="resources/style.css" rel="stylesheet">
   </head>
   <title> Login </title>
   <body>
      <container>
         <div id="fontux" class="position-absolute top-50 start-50 translate-middle d-flex justify-content-center" >
            <div class="card logincard" style="padding:50px;">
               <h1 id="fontux"> Login </h1>
               <div class="card-body ">
                  <form class="needs-validation" action="connect.php"  method="post">
                     <div class="mb-3">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                     </div>
                     <div class="mb-3">
                        <label  for="exampleInputPassword1" class="form-label ">Password</label>
                        <input type="password" class="form-control" name="password"  required>
                     </div>
                      <input type="submit" class="submit form-control" name="submit" value="Login" >
                  </form>
               </div>
               
         <hr>
               <label class="footer"> Computer Programmer I - Practical Hands-on Exam </label>
            </div>
            
         </div>
       
      </container>
   </body>
</html>