<?php
include "include/header.php";
require_once "../connection.php";
$id = $_SESSION['id'];
$signupsql = "SELECT * FROM user where id = '$id'";
$signupresult = mysqli_query($conn,$signupsql);
$signuprow=mysqli_fetch_assoc($signupresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="" action="post">
                                    <div class="form-group">
                                        <!-- <label>User Picture</label> -->
                                       
                                        <img src="../images/<?php echo $signuprow['userimage']; ?>" id="circle"><br>
                                        
                                        
                                    </div>

                                    <div class="form-group">
                                    <h2> <label ><?php echo $signuprow['fullname']; ?> </label></h2>
                                   
                                    </div>
                                    <div class="form-group">
                                            <h4><label><?php echo $signuprow['email']; ?></label></h4>
                                          
                                        </div>
                                        <a href="profile_edit.php"  class="btn btn-success" >Edit</a>
                                    </form>
                                </div>


<?php 
include "include/footer.php"
?>