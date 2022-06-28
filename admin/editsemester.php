<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$semestersql = "SELECT * FROM semester where id = '$id'";
$semesterresult = mysqli_query($conn,$semestersql);
$semesterrow=mysqli_fetch_assoc($semesterresult);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Semester</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Edit Semester
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_semester_process.php?id=<?php echo $semesterrow['id']; ?>" method = "Post">
                                        <div class="form-group">
                                            <label>Edit Semester</label>
                                            <input class="form-control" value="<?php echo $semesterrow['semestername']; ?>" name="editsemester">
                                        </div>
                                      
                                       
                                        <a href="viewsemester.php"><button type="submit" class="btn btn-primary">Update</button></a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

<?php
    include "include/footer.php";

?>