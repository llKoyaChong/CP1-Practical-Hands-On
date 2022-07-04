<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="resources/style.css" rel="stylesheet">
   </head>
   <title> Register </title>
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
            <h1><i class="bi bi-person-circle"></i> Register </h1>
            <br>
            <div class="card-body">
                <form action="create.php" method="post">

                <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Username</label>
                     <input  type="text" class="form-control" name="username" >
                  </div>
                  <div class="col">
                     <label  class="form-label">Password</label>
                     <input  type="password" name="password" class="form-control">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >User Type</label>
                     <select class="form-control" name="userlevel" require>
                        <option disabled selected>-Select-</option>
                        <option name="userlevel" value="Admin">Admin</option>
                        <option name="userlevel" value="User">User</option>
                    </select>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">First Name</label>
                     <input  type="text" name="fname" class="form-control" require>
                  </div>
                  <div class="col">
                     <label  class="form-label">Middle Name</label>
                     <input  type="text" name="mname" class="form-control" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Last Name</label>
                     <input  type="text" name="lastname" class="form-control" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Birthday</label>
                     <input  type="date" name="bdate" class="form-control" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Gender</label>
                     <select name="gender" class="form-control">
                        <option disabled selected>-Select-</option>
                        <option name="gender" value="Male">Male</option>
                        <option name="gender" value="Female">Female</option>
                    </select>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Address</label>
                     <input  type="text" class="form-control" name="barangay" placeholder="Barangay">
                  </div>
                  <div class="col">
                     <label  class="form-label" style="color:#ffffff;">City</label>
                     <input  type="text" class="form-control" name="city" placeholder="City">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label"style="color:#ffffff;">Province</label>
                     <input  type="text" class="form-control" name="province" placeholder="Province" >
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col order-first">
                     <label  class="form-label">Contact Number</label>
                     <input  type="text" name="cnumber" class="form-control">
                  </div>
                  <div class="col">
                     <label  class="form-label">Email</label>
                     <input  type="email" name="email" class="form-control">
                  </div>
                  <div class="col order-last">
                     <label  class="form-label">Department</label>
                     <select name="dept" class="form-control">
                        <option disabled selected>-Select-</option>
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
                     <input  type="text" name="sssnum" class="form-control" >
                  </div>
                  <div class="col">
                     <label  class="form-label" >TIN Number</label>
                     <input  type="text" name="tinnum" class="form-control" >
                  </div>
                  <div class="col order-last">
                     <label  class="form-label" >PhilHealth Number</label>
                     <input  type="text" name="philnum" class="form-control">
                  </div>
                  
               </div>
    <!-- <input class="form-control btn btn-primary" type="submit" value="Submit"> -->
    <button type="submit" name="submit" class="form-control btn btn-primary">Submit </button>
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