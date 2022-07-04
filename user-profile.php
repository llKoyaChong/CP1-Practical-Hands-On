<?php
   include("config.php");
   $id=$_GET['id'];
   
   if(isset($id)){
      $get_details = $mysqli->query("SELECT * FROM tbl_user WHERE id='$id' ");
      $details = $get_details->fetch_assoc();
      $username = $details['fld_username'];
      $password = $details['fld_password'];
      $userlevel = $details['fld_userlevel'];
      $fname = $details['fld_fname'];
      $mname = $details['fld_mname'];
      $sname = $details['fld_sname'];
      $bdate = $details['fld_bdate'];
      $gender = $details['fld_gender'];
      $barangay = $details['fld_barangay'];
      $city = $details['fld_city'];
      $province = $details['fld_province'];
      $cnumber = $details['fld_cnumber'];
      $email = $details['fld_email'];
      $dept = $details['fld_dept'];
      $sss = $details['fld_sss'];
      $tin = $details['fld_tin'];
      $phil = $details['fld_phil'];

   }
   $delrole = $mysqli->query("UPDATE tbl_user SET fld_userlevel='ACCOUNT DISABLED' WHERE id='$id' ");
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
                     <a class="nav-link" aria-current="page" href="register.php">Register</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="users.php">Users</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link ">Welcome Admin!</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div id="fontux">
         <div class="regcard" style="padding:50px;">
          <form action="update_details.php" method="post">
            <h1><i class="bi bi-person-circle"></i> Update </h1>
            <br>
            <div class="card-body">
               

                <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Username</label>
                     <input  type="text" class="form-control" name="username" value="<?php echo $username; ?> ">
                  </div>
                  <div class="col">
                     <label  class="form-label">Password</label>
                     <input  type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >User Type</label>
                     <select class="form-control" name="userlevel" require>
                        <option name="userlevel" value="<?php echo $userlevel; ?>"><?php echo $userlevel; ?></option>
                        <option name="userlevel" value="Admin">Admin</option>
                        <option name="userlevel" value="User">User</option>
                    </select>
                   
                  </div>
                 
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">First Name</label>
                     <input  type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" require>
                  </div>
                  <div class="col">
                     <label  class="form-label">Middle Name</label>
                     <input  type="text" name="mname" class="form-control" value="<?php echo $mname; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Last Name</label>
                     <input  type="text" name="lastname" class="form-control" value="<?php echo $sname; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Birthday</label>
                     <input  type="date" name="bdate" class="form-control" value="<?php echo $bdate; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Gender</label>
                     <select name="gender" class="form-control">
                     <option name="gender" value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                        <option name="gender" value="Male">Male</option>
                        <option name="gender" value="Female">Female</option>
                    </select>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Address</label>
                     <input  type="text" class="form-control" name="barangay" value="<?php echo $barangay; ?>" placeholder="Barangay" >
                  </div>
                  <div class="col">
                     <label  class="form-label" style="color:#ffffff;">City</label>
                     <input  type="text" class="form-control" name="city" value="<?php echo $city; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label"style="color:#ffffff;">Province</label>
                     <input  type="text" class="form-control" name="province" value="<?php echo $province; ?>" >
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Contact Number</label>
                     <input  type="text" name="cnumber" class="form-control" value="<?php echo $cnumber; ?>">
                  </div>
                  <div class="col">
                     <label  class="form-label">Email</label>
                     <input  type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Department</label>
                     <select name="dept" class="form-control">
                     <option name="dept" value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
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
                     <input  type="text" name="sssnum" class="form-control" value="<?php echo $sss; ?>">
                  </div>
                  <div class="col">
                     <label  class="form-label" >TIN Number</label>
                     <input  type="text" name="tinnum" class="form-control" value="<?php echo $tin; ?>" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >PhilHealth Number</label>
                     <input  type="text" name="philnum" class="form-control" value="<?php echo $phil; ?>">
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