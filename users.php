<?php
   include("config.php");
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link href="resources/dt.css" rel="stylesheet">
      <link href="resources/style.css" rel="stylesheet">
      <link href="resources/all.css" rel="stylesheet">
      <script type="text/javascript" src="resources/dt.js"> </script>
   </head>
   <title> Users </title>
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
      <div class="table">
         <table id="fontux" class="table dataTable text-center table-bordered " data-responsive="table" id="example">
            <tr class="table-dark">
               <th>Fullname</th>
               <th>Birthday</th>
               <th>Gender</th>
               <th>Address</th>
               <th>Contact Number</th>
               <th>Email</th>
               <th>Department</th>
               <th>SSS#</th>
               <th>TIN#</th>
               <th>PhilHealth#</th>
               <th>Action</th>
            </tr>
            <tbody>
               <tr>
            <?php
                                 $list = $mysqli->query("SELECT * FROM tbl_user ");
                                 while ($row = $list->fetch_assoc()) {
                                 ?>
               <td><?php echo $row['fld_fname'] ." ". $row['fld_mname']." " .$row['fld_sname'] ; ?></td>
               <td><?php echo $row['fld_bdate']; ?></td>
               <td><?php echo $row['fld_gender']; ?></td>
               <td><?php echo $row['fld_barangay'] ." , ". $row['fld_city']." , " .$row['fld_province'] ; ?></td>
               <td><?php echo $row['fld_cnumber']; ?></td>
               <td><?php echo $row['fld_email']; ?></td>
               <td><?php echo $row['fld_dept']; ?></td>
               <td><?php echo $row['fld_sss']; ?></td>
               <td><?php echo $row['fld_tin']; ?></td>
               <td><?php echo $row['fld_phil']; ?></td>
               <td><a href="details.php?id=<?php echo $row['id']; ?>"><button class="form-control">Edit</button> <button name="delete-role" value="disabled" class="form-control"> DISABLE ACCESS</button></td>
                                 </tr>
               <?php } ?>
                                 </tbody>
           
         </table>
      </div>
      </div>


      <script type="text/javascript"> $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
   </body>
   <footer class="position-absolute bottom-0 start-50 translate-middle-x" id="fontux">
         <div class="container my-auto">
            <div ><span>Computer Programmer I - Practical Hands-on Exam</span></div>
         </div>
      </footer>
</html>