<?php
require_once "../connection.php";
session_start();
if(!isset($_SESSION['is_logged_in'])){
    header('Location: ../index.php');
}
if(isset($_SESSION['admin'])!='admin'){
    echo "<script>history.back()</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NCT Training Center </title>
<!-- ---------- icon -----------  -->
    <link rel="icon" href="include/nature.jpg">
        <!-- making element circle  -->
        <link href ="../css/owncss.css" rel = "stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">NCT Training Center</a>
            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <?php
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM user WHERE id = '$id'";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($query);
                    $name = $row['fullname'];
                    $fname = (explode(" ",$name));
                    $result = $fname[0];
                    ?>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> &nbsp; <?php echo $result; ?> &nbsp; <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li><a href="changepassword.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php" onclick=" return confirm('Are You sure you want to logout?');"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<!-- -------------------- Shortcut button ----------------------  -->

        <ul class="nav navbar-top-links navbar-right">
        <a href="taketeacherattendence.php"><button class="btn btn-info">Teacher Attendence</button></a>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <!-- <i class="fa fa-envelope fa-fw"></i>   -->
                        <i class="fa "></i>
                    </a>
                    
                </li>
        </ul>

<!-- -------------------- Shortcut button ----------------------  -->

            <ul class="nav navbar-top-links navbar-right">
            <a href="takestudentattendence.php"><button class="btn btn-primary">Students Attendence</button></a>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <!-- <i class="fa fa-envelope fa-fw"></i>   -->
                        <i class="fa "></i>
                    </a>
                    
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <!-- Faculty of students -->
                        <li>
                            <a href="viewfaculty.php"><i class="fa fa-bar-chart-o fa-fw"></i> Faculty</a>
                            
                            <!-- Level details  -->
                          <li>
                            <a href="viewlevel.php"><i class="fa fa-user fa-fw"></i> Level</span></a>
                           
                        </li>
                            <!-- /.nav-second-level -->
                        </li>


                        <!-- Semester details  -->
                        <li>
                            <a href="#"><i class="fa fa-frown-o fa-fw"></i> Semester<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addsemester.php">Add Semester</a>
                                </li>
                                <li>
                                    <a href="viewsemester.php">View Semester</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Section details  -->
                       <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Section<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addsection.php">Add Section</a>
                                </li>
                                <li>
                                    <a href="viewsection.php">View Section</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Course details  -->
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Course<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addcourse.php">Add Course</a>
                                </li>
                                <li>
                                    <a href="viewcourse.php">View Course</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Class details  -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Class<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addclass.php">Add Class</a>
                                </li>
                                <li>
                                    <a href="viewclass.php">View Class</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Students details  -->
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addstudent.php">Add Students</a>
                                </li>
                                <li>
                                    <a href="viewstudent.php">View Students</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!-- --------------  Author Details --------------- -->
                        <li>
                            <a href="viewauthor.php"><i class="fa fa-folder-open fa-fw"></i>Author</a>
                                                        
                        </li>


                        <!-- Books details  -->
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Books<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addbooks.php">Add Books</a>
                                </li>
                                <li>
                                    <a href="viewbooks.php">View Books</a>
                                </li>
                            </ul>
                        </li>

                        
                         <!-- Subject details  -->
                         <li>
                            <a href="#"><i class="fa fa-trophy fa-fw"></i> Subject<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addsubject.php">Add Subject</a>
                                </li>
                                <li>
                                    <a href="viewsubject.php">View Subject</a>
                                </li>
                            </ul>
                            
                        </li>
                    


                         
                            
                       <!-- Teacher details  -->
                       <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Teacher<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="teacheradd.php">Add Teacher</a>
                                </li>
                                <li>
                                    <a href="teacherview.php">View Teacher</a>
                                </li>
                            </ul>
                        </li>


                        <!-- Attendence details  -->
                       <li>
                            <a href="#"><i class="fa fa-trophy fa-fw"></i> Attendence<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="takestudentattendence.php">Take Students Attendence</a>
                                </li>
                                <li>
                                    <a href="viewstudentattendence.php">View Students Attendence</a>
                                </li>
                            </ul>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="taketeacherattendence.php">Take Teacher Attendence</a>
                                </li>
                                <li>
                                    <a href="viewteacherattendence.php">View Teacher Attendence</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>