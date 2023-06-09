<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="../includes/style_prac2.css" rel="stylesheet" type="text/css" />
    <title>Scheduling System</title>
    <style type="text/css">
        <!--
        .style3 {font-family: Georgia, "Times New Roman", Times, serif}
        .style20 {font-family: Georgia, "Times New Roman", Times, serif; font-size: x-small; }
        .style21 {font-size: x-small}
        .style22 {font-family: Geneva, Arial, Helvetica, sans-serif}
        .style30 {font-family: "Courier New", Courier, monospace}
        .style4 {font-size: 11px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .style28 {color: #0000FF}
        .style25 {color: #330099; font-weight: bold; }
        -->
    </style>
</head>
<?php
include("../includes/session.php");
require ("../includes/DBConnection.php");
?>
<body>
<div id="container">
    <div id="header">
        <div id="logo_w2"><img src="../images/logo copy.jpg" alt="s" width="717" height="160" /></div>
        <ul class="cssMenu cssMenum">
            <li class=" cssMenui"><a class="  cssMenui" href="admin.php"><img src="../images/homepage.gif" />Home</a></li>
            <li class=" cssMenui"><a class="  cssMenui" href="#"><span>Search</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul class=" cssMenum">
                    <li class=" cssMenui"><a class="  cssMenui" href="search_teacher.php"><img src="../images/User (1).ico" />Teacher Schedule</a></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="search_course.php"><img src="../images/user-group.ico" /> Student Schedule</a></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="search_room.php"><img src="../images/school-icon.png" />Room Schedule</a></li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
            <li class=" cssMenui"><a class="  cssMenui" href="#"><span>Add entry</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul class=" cssMenum">
                    <li class=" cssMenui"><a class="  cssMenui" href="user.php"><span><img src="../images/user.ico" />User</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="user.php"><img src="../images/folder-new.ico" />Add</a></li>

                            <li class=" cssMenui"><a class="  cssMenui" href="userlist.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="faculty-a.php"><span><img src="../images/User (1).ico" />Teacher</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="faculty-a.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="facultylist-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="student-a.php"><span><img src="../images/courses.JPG" />Course</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="student-a.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="student-list-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>

                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="subject-a.php"><span><img src="../images/Summer-user.ico" />Subject</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="subject-a.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="subjectlist-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>

                    <li class=" cssMenui"><a class="  cssMenui" href="room-a.php"><span><img src="../images/school-icon.png" />Room</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="room-a.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="roomlist-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="dept-a.php"><span><img src="../images/dept.jpg" />Department</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->

                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="dept-a.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="deptlist-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <<<<<<< HEAD
                    <!-- Add School Year -->
                    =======
                    <li class=" cssMenui"><a class="  cssMenui" href="year-a.php"><span><img src="../images/sy .jpg" /> </span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        >>>>>>> refs/remotes/pganeshGapps/master
                        <ul class=" cssMenum">

                            <li class=" cssMenui"><a class="  cssMenui" href="year-a.php "><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="yearlist-a.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>


            <li class=" cssMenui"><a class="  cssMenui" href="#"><span>About us</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul class=" cssMenum">
                    <li class=" cssMenui"><a class="  cssMenui" href="about_sched.php"><img src="../images/scheduling.png" />Scheduling System</a></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="about_dev.php"><img src="../images/dev.png" />Developer</a></li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
            <li class=" cssMenui"><a class="  cssMenui" href="help.php">Help</a></li>

            <li class=" cssMenui"><a class="  cssMenui" href="logout.php">Log out</a></li>
        </ul>

    </div>
    <div id="content">

        <div id="left">
            <form action="<?php echo $_SERVER[PHP_SELF] ?>" name="form1" method="post" >
                <div align="center">
                    <p><br />
                    </p>
                    <p>List of  Rooms</p>
                    <table width="90%" height="75" border="0" align="center" cellpadding="2">
                        <tr>

                            <td width="141" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">Room </span></td>
                            <td width="117" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">IsNKN?</span></td>
                            <td width="112" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">Capacity</span></td>

                            <td width="195" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">Description</span></td>
                            <td width="26" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
                            <td width="16" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
                            <?php

                            // sending query
                            $result = mysqli_query($conn,"SELECT * FROM room");
                            if (!$result)
                            {
                                die("Query to show fields from table failed");
                            }
                            $numberOfRows = MYSQLi_NUM_ROWS($result);

                            function mysqli_result($result, $row, $field = 0) {
                                // Adjust the result pointer to that specific row
                                $result->data_seek($row);
                                // Fetch result array
                                $data = $result->fetch_array();

                                return $data[$field];
                            }


                            If ($numberOfRows == 0)
                            {
                                echo 'Sorry No Record Found!';
                            }
                            else if ($numberOfRows > 0)
                            {
                            $i=0;
                            while ($i<$numberOfRows)
                            {
                            if(($i%2)==0)
                            {
                                $bgcolor ='#FFFFFF';
                            }
                            else
                            {
                                $bgcolor ='@C0C0C0';
                            }


                            $room_id = mysqli_result($result,$i,"room_id");
                            $room= mysqli_result($result,$i,"room_name");
                            $desc= mysqli_result($result,$i,"room_desc");
                            $isNKN= mysqli_result($result,$i,"room_isNKN");
                            $room_size= mysqli_result($result,$i,"room_size");

                            ?>
                        </tr>
                        <tr bgcolor="<?php echo $bgcolor; ?>">
                            <td nowrap="nowrap"><?php echo $room; ?></td>
                            <td nowrap="nowrap"><?php echo $isNKN; ?></td>
                            <td nowrap="nowrap"><?php echo $room_size; ?></td>
                            <td nowrap="nowrap"><?php echo $desc; ?></td>
                            <td><a href="room-edit-a.php?Room=<?php echo $room_id; ?>"> <img src='../images/b_edit.png' alt="edit record" width="16" height="16" /></a></td>
                            <td><a href="room-del-a.php?Room=<?php echo $room_id; ?>"> <img src='../images/b_drop.png' alt="delete record" width="16" height="16" onclick="return confirm('<?php echo "Are you sure you want to delete ". $room. "?"; ?>');" /></a></td>
                        </tr>
                        <?php
                        $i++;
                        }
                        }
                        ?>
                        <tr>
                            <td></tr></td>
                        </tr>
                    </table>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </form>
        </div>
        <div id="program"></div>
        <div id="right"></div>
        <p>&nbsp;</p>
        <div id="footerline">
            <p align="center"><span class="style4"><a href="help.php">Help</a> | <a href="about_sched.php">Scheduling 	                                System</a>
                            </span>
            </p>
        </div>
    </div>

    <div id="footer">Four Dark Riders</div>
</div>
</body>
</html>