<?php
   include("session.php");
   session_start()
   ?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="resources/style.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
   </head>
   <title> Update </title>
   <body>
      <nav id="fontux" class="navbar navbar-expand-lg">
         <div class="container-fluid">
            <a class="navbar-brand dost" href="home.php">
               <image class="dostlogo" src="resources/image/dosthome.png">
            </a>
            </button>
            <div class="justify-content-end">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="user-profile.php">Profile</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="">Welcome User!</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div id="fontux">
         <div class="regcard" style="padding:50px;">
          <form action="user-update.php" method="post">
            <h1><i class="bi bi-person-circle"></i> Update </h1>
            <br>
            <div class="card-body">
               

                <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Username</label>
                     <input  type="text" class="form-control" name="username" value="<?php echo $userrow['fld_username']; ?> " disabled>
                  </div>
                  <div class="col">
                     <label  class="form-label">Password</label>
                     <input  type="password" name="password" class="form-control" value="<?php echo  $userrow['fld_password']; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >User Type</label>
                     <select class="form-control" name="userlevel" require disabled>
                        <option name="userlevel" value="<?php echo  $userrow['fld_userlevel']; ?>"><?php  $userrow['fld_userlevel']; ?></optiondisabled>
                        <option name="userlevel" value="Admin">Admin</option>
                        <option name="userlevel" value="User">User</option>
                    </select>
                   
                  </div>
                 
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">First Name</label>
                     <input  type="text" name="fname" class="form-control" value="<?php echo  $userrow['fld_fname']; ?>" require>
                  </div>
                  <div class="col">
                     <label  class="form-label">Middle Name</label>
                     <input  type="text" name="mname" class="form-control" value="<?php echo  $userrow['fld_mname'];; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Last Name</label>
                     <input  type="text" name="lastname" class="form-control" value="<?php echo  $userrow['fld_sname'];; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Birthday</label>
                     <input  type="date" name="bdate" class="form-control" value="<?php echo  $userrow['fld_bdate'];; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Gender</label>
                     <select name="gender" class="form-control">
                     <option name="gender" value="<?php echo $gender; ?>"><?php echo  $userrow['fld_gender'];; ?></option>
                        <option name="gender" value="Male">Male</option>
                        <option name="gender" value="Female">Female</option>
                    </select>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Address</label>
                     <input  type="text" class="form-control" name="barangay" value="<?php echo  $userrow['fld_barangay']; ?>" placeholder="Barangay" >
                  </div>
                  <div class="col">
                     <label  class="form-label" style="color:#ffffff;">City</label>
                     <input  type="text" class="form-control" name="city" value="<?php echo  $userrow['fld_city'];; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label"style="color:#ffffff;">Province</label>
                     <input  type="text" class="form-control" name="province" value="<?php echo  $userrow['fld_province'];; ?>" >
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Contact Number</label>
                     <input  type="text" name="cnumber" class="form-control" value="<?php echo  $userrow['fld_cnumber'];; ?>">
                  </div>
                  <div class="col">
                     <label  class="form-label">Email</label>
                     <input  type="email" name="email" class="form-control" value="<?php echo  $userrow['fld_email']; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Department</label>
                     <select name="dept" class="form-control" disabled>
                     <option name="dept" value="<?php echo $dept; ?>"><?php echo  $userrow['fld_dept'];; ?></option>
                        <option name="dept" value="ITSM">ITSM</option>
                        <option name="dept" value="RSTL">RSTL</option>
                        <option name="dept" value="FAS">FAS</option>
                        <option name="dept" value="ORD">ORD</option>
                        <option name="dept" value="COA">COA</option>
                    </select>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">SSS Number</label>
                     <input  type="text" name="sssnum" class="form-control" value="<?php echo  $userrow['fld_sss']; ?>">
                  </div>
                  <div class="col">
                     <label  class="form-label" >TIN Number</label>
                     <input  type="text" name="tinnum" class="form-control" value="<?php echo  $userrow['fld_tin'];; ?>" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >PhilHealth Number</label>
                     <input  type="text" name="philnum" class="form-control" value="<?php echo  $userrow['fld_phil'];; ?>">
                  </div>
                  
               </div>
    <!-- <input class="form-control btn btn-primary" type="submit" value="Submit"> -->
    <button type="submit" name="submit" class="form-control btn btn-primary">Update </button>
    <input type="text" value="<?php echo $id; ?>" name="id" hidden>
</form>
            </div>
         </div>
      </div>
      </div>
<br>
   </body>
   <footer class="position-absolute start-50 translate-middle-x" id="fontux">
         <div class="container my-auto">
            <div ><span>Computer Programmer I - Practical Hands-on Exam</span></div>
         </div>
      </footer>
</html>