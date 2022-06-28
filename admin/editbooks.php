<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$bookssql = "SELECT * FROM books where id = '$id'";
$booksresult = mysqli_query($conn,$bookssql);
$booksrow=mysqli_fetch_assoc($booksresult);
?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Books Regestration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Edit Faculty 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_book_process.php?id=<?php echo $booksrow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Faculty</label>
                                            <select class="form-control" name="selectfaculty">
                                            <?php
                                            
                                            $sql = "SELECT * FROM faculty";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $booksrow['faculty_id']?'selected':''; ?>><?php echo $row['name'];?></option>
                                                <?php } ?> 
                                                
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Class Add -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                           2 .  &nbsp;  Edit Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-group">
                                            <label>Select Class</label>
                                            <select class="form-control" name="selectclass">
                                            <?php
                                            
                                            $sql = "SELECT * FROM class";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $booksrow['class_id']?'selected':''; ?>><?php echo $row['class'];?></option>
                                                <?php } ?> 
                                                
                                       
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ------------------------------------  Select Subject ------------------------------- -->
                                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                           3 .  &nbsp; Select Subject 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Edit Subject</label>
                                            <select class="form-control" name="selectsubject">
                                            <?php
                                            
                                            $sql = "SELECT * FROM subject";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $booksrow['subject_id']?'selected':''; ?>><?php echo $row['subjectName'];?></option>
                                                <?php } ?>
                                                
                                            
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- -------------------------------------- Creating Auther Here --------------------------  -->

<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           4 .  &nbsp;   Auther Name 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="form-group">
                                            <label>Edit Auther Name</label>
                                            <select class="form-control" name="authorname">
                                            <?php
                                            
                                            $sql = "SELECT * FROM author";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $booksrow['author_id']?'selected':''; ?>><?php echo $row['authorname'];?></option>
                                                <?php } ?>
                                                
                                            
                                            </select>                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ----------------------------------- Creating Published date -------------------------  -->

<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           5 .  &nbsp;   Published In 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Edit Published Date</label>
                                            <input class="form-control" name="publishdate" value="<?php echo $booksrow['publish_date']; ?>" placeholder="Edit published date here" type="date">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- ---------------------------------------------  pdf file --------------------------------- -->
<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           6 .  &nbsp;   PDF File
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                    <div class="form-group">
                                            <label>Choose PDF File</label>
                                            <input class="form-control" name="pdf" value="<?php echo $booksrow['pdf']; ?>" type="file">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>






<?php
    include "include/footer.php";

?>