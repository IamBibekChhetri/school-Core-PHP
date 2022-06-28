<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$sectionsql = "SELECT * FROM section where id = '$id'";
$sectionresult = mysqli_query($conn,$sectionsql);
$sectionrow=mysqli_fetch_assoc($sectionresult);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Section</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Edit Section
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_section_process.php?id=<?php echo $sectionrow['id']; ?>" method = "Post">
                                        <div class="form-group">
                                            <label>Edit Section</label>
                                            <input class="form-control" value="<?php echo $sectionrow['sectionname']; ?>" name="editsectionname">
                                        </div>
                                      
                                       
                                        <a href="viewsection.php"><button type="submit" class="btn btn-primary">Update</button></a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

<?php
    include "include/footer.php";

?>