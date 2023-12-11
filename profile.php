<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>profile</title>
</head>
<body>
<header>
 
</header>
<div id="center">
<div id="center-set"> 
<h1 align='center' style="color:white;">Welcome <?php echo $loggedin_session; ?>,</h1>

<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st" style="position:relative;
right:10%;">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
    <style>
        .st1
        {
            position:relative;
           bottom:13rem;

        }
        .st2
        {
            position:relative;
            bottom:12.8rem;
        }
        .st3
        {
            position:relative;
            bottom:12.6rem;
        }
        a
        {
            color:white;
            font-size:20px;
            font-weight:600;
        }
       
    </style>
<div id="st" class="st1"><a href="logout.php" >Sign Out</a></div>
<div id="st" class="st2"><a href="index.php">Delete Account</a></div>
<div id="st" class="st3"><a href="welcome.php">Homepage</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>

</body>
</html>