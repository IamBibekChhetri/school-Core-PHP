<?php
include "include/header.php";
require_once "../connection.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM user where id = '$id'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
                                    <form r ole="form" action="update_profile.php" method="Post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <!-- <label>User Picture</label> -->
                                        
                                        <img src="../images/<?php echo $row['userimage']; ?>"height="100px" id="circle">
                                        <input type="file"  name="userimage">
                                        <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
                                        
                                    </div>

                                    <div class="form-group">
                                    <h2> <input value="<?php echo $row['fullname']; ?>"  name="fullname" required></h2>
                                   
                                    </div>
                                    <div class="form-group">
                                            <h4><input value="<?php echo $row['email']; ?>" name="email" required></h4>
                                          
                                        </div>
                                        <button type="submit" class="btn btn-success" >Update</button>
                                    </form>
                                </div>


<?php 
include "include/footer.php"
?>