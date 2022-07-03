
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM level";
$result = mysqli_query($conn,$sql);
?>

<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right; ">Add Level:</button>
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Faculty Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Faculty</th>
                                            <th>Level</th>
                                            <th>Level Status</th>
                                            <th>action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){
                                                      $facultysql = "SELECT * FROM faculty WHERE id = '$row[faculty_id]'";
                                                      $facultyquery = mysqli_query($conn, $facultysql);
                                                      $facultyrow=mysqli_fetch_array($facultyquery);

                                                    ?>
                                                   
                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $facultyrow['name']; ?></td> 
                                    <td><?php echo $row["level"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>


                                            <td class="center"><a href="editlevel.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_level.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/leveldeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/levelactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                </td>
                                        
                                                <?php } ?>
                                    </tr>
                                    <?php } ?>
                                           <?php } ?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Level Add:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" action="level_add_process.php" method="Post">
      <div class="modal-body">
      <div class="form-group">
            <label>Select Faculty</label>
            <select class="form-control" name="selectfaculty">


            <?php
            
            $sql = "SELECT * FROM faculty where status = 'Active'";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){?>
                <option value=" <?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                <?php } ?>                                                
            </select>
        </div>
        <div class="form-group">
            <label>Enter Your Level</label>
            <input class="form-control" name="level" placeholder="Enter Level here" required>
        </div>
        <div class="form-group"> 
            <label>Status:</label><br>
            <label class="radio-inline">
            <input type="radio" name="status" id="optionsRadiosInline1" value="Active" required>Active
            </label>
            <label class="radio-inline">
            <input type="radio" name="status" id="optionsRadiosInline2" value="Deactive"required>Deactive
            </label>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    </div>
    </div>
  </div>
</div>


<?php 
include "include/footer.php"
?>

        
