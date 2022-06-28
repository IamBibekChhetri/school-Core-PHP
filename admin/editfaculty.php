<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$facultysql = "SELECT * FROM faculty where id = '$id'";
$facultyresult = mysqli_query($conn,$facultysql);
$facultyrow=mysqli_fetch_assoc($facultyresult);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Faculty</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Edit Faculty
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_faculty_process.php?id=<?php echo $facultyrow['id']; ?>" method = "Post">
                                        <div class="form-group">
                                            <label>Edit Faculty</label>
                                            <input class="form-control" value="<?php echo $facultyrow['name']; ?>" name="editfacultyname">
                                        </div>
                                      
                                       
                                        <a href="viewfaculty.php"><button type="submit" class="btn btn-primary">Update</button></a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

<?php
    include "include/footer.php";

?>