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
        -->
    </style>
</head>
<?php
include("../includes/session.php");
require ("../includes/dbconnection.php");

if (isset($_POST['cmdSubmit']))
{

    if (trim($_POST['txtcourse']) == ""){ $flagcourse = 'Required Field.';}




    if (($flagcourse == "") &&  ($flagdept == ""))
    {


        $course= $_POST['txtcourse'];
        $major= $_POST['txtmajor'];
        $department = 1;


        mysql_query ("INSERT INTO course(course_yrSec, major, dept_id)
					VALUES('$course','$major','$department')") or die(mysql_error());
        echo "Your file has been saved in the database..";
        header(
            "Location: student-list-educ.php");

    }


}

?>
<body>
<div id="container">
    <div id="header"><img src="../images/logo copy.jpg" alt="s" width="717" height="160" />
        <div id="logo_w2"></div>
        <ul class="cssMenu cssMenum">
            <li class=" cssMenui"><a class="  cssMenui" href="index.php"><img src="../images/homepage.gif" border="0" />Home</a></li>
            <li class=" cssMenui"><a class="  cssMenui" href="#"><span>Search</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul class=" cssMenum">
                    <li class=" cssMenui"><a class="  cssMenui" href="search_teacher.php"><img src="../images/User (1).ico" />Teacher Schedule</a></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="search_course.php"><img src="../images/user-group.ico" /> Student Schedule</a></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="search_room.php"><img src="../images/school-icon.png" />Room Schedule</a></li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
            <li class=" cssMenui"><a class="  cssMenui" href="#"><span>Add entry</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul class=" cssMenum">
                    <li class=" cssMenui"><a class="  cssMenui" href="faculty-educ.php"><span><img src="../images/User (1).ico" />Teacher</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="faculty-educ.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="facultylist-educ.php"><img src="../images/folder.ico" />View</a></li>
                        </ul>
                        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
                    <li class=" cssMenui"><a class="  cssMenui" href="student-educ.php"><span><img src="../images/courses.JPG" />Course</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul class=" cssMenum">
                            <li class=" cssMenui"><a class="  cssMenui" href="student-educ.php"><img src="../images/folder-new.ico" />Add</a></li>
                            <li class=" cssMenui"><a class="  cssMenui" href="student-list-educ.php"><img src="../images/folder.ico" />View</a></li>
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
                    <p>Add Course</p>
                    <table border="0" align="center" >
                        <tr >
                            <td width="166" height="34" ><div align="right" class="style3">Course Year and Section </div></td>
                            <td width="215" ><input type="text" name="txtcourse" id="txtcourse" value="<?php echo $faculty_name; ?>" /></td>
                            <td width="132"><span class="style20"><?php echo $flagcourse; ?>&nbsp;</span></td>
                        </tr>
                        <tr >
                            <td height="34" ><div align="right" class="style3">Major</div></td>
                            <td><input type="text" name="txtmajor" id="txtmajor" value= "<?php echo $acad_rank; ?>"/></td>
                            <td ><span class="style20">&nbsp;</span></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p align="center"><span class="style30">
                    <input type="submit" name="cmdSubmit" value="Submit" />
                  &nbsp;
                  <input type="submit" name="cmdClear" value="Clear" />
                </span></p></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div id="program"></div>
        <div id="right">
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p><a href="yearsem-a.php"></a><a href="yearsem-a.php"></a><a href="yearsem-a.php"></a></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <div id="footerline">
            <p align="center"><span class="style4"><a href="help.php">Help</a> | <a href="about_dev.php">Developer</a>| <a href="about_sched.php">Scheduling System</a>| <a href="contact.php">Contact Us</a>| <a href="www.chmsc.edu.ph">CHMSC </a></span></p>
        </div>
    </div>

    <div id="footer">Copyright © 2009 </div>
</div>
</body>
</html>