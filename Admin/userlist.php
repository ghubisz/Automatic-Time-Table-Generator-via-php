<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="../includes/style_prac2.css" rel="stylesheet" type="text/css" />
    <title>Scheduling System</title>
    <style type="text/css">
        <!--
        .style25 {color: #330099; font-weight: bold; }
        .style4 {font-size: 11px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
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
                    <!-- Add School Year -->
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
            <li class=" cssMenui"><a class="  cssMenui" href="User Manual.pdf">Help</a></li>

            <li class=" cssMenui"><a class="  cssMenui" href="logout.php">Log out</a></li>
        </ul>

    </div>
    <div id="content">

        <div id="left">
            <div id="div">
                <form action="<?php echo $_SERVER[PHP_SELF] ?>" method="post" name="form1" id="form1" >
                    <div align="center">
                        <p></p>
                        <p>&nbsp;</p>
                        <p><strong>List of Users </strong><br />
                        </p>
                        <table width="90%" align="center" border="0" cellpadding="2">
                            <tr>
                                <td width="108" height="21" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">User </span></td>
                                <td width="216" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style25">Department</span></td>
                                <td width="19" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
                                <td width="16" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
                                <?php

                                function mysqli_result($result, $row, $field = 0) {
                                    // Adjust the result pointer to that specific row
                                    $result->data_seek($row);
                                    // Fetch result array
                                    $data = $result->fetch_array();

                                    return $data[$field];
                                }

                                // sending query
                                $result = mysqli_query($conn,"SELECT `user`.*, `dept`.`department` FROM
  			`user`,`dept` WHERE user.dept_id=dept.dept_id ");
                                if (!$result)
                                {
                                    die("Query to show fields from table failed");
                                }
                                $numberOfRows = MYSQLi_NUM_ROWS($result);

                                If ($numberOfRows == 0)
                                {
                                    echo 'Sorry No Record Found!';
                                }
                                else if ($numberOfRows > 0)
                                {
                                $i=0;

                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                                {
                                /*while ($i<$numberOfRows)
                                    {	*/

                                ######################
                                //$row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                ######################
                                if(($i%2)==0)
                                {
                                    $bgcolor ='#FFFFFF';
                                }
                                else
                                {
                                    $bgcolor ='@C0C0C0';
                                }




                                $user_id = MYSQLi_RESULT($result,$i,"user_id");
                                $username = MYSQLi_RESULT($result,$i,"username");
                                $userpass = MYSQLi_RESULT($result,$i,"userpass");
                                $Dept = MYSQLi_RESULT($result,$i,"department");

                                /*$user_id = $row["user_id"];
                                $username = $rows["username"];
                                $userpass =$rows["password"];
                                $Dept = $rows["department"]; */

                                //LAST TRIED METHOD#####
                                /* mysqli_data_seek($result, $i);
                                /*if( !empty($user_id) ) {
                                      while($finfo = mysqli_fetch_field( $result )) {
                                                                                    if( $user_id == $finfo->name ) {
                                                                                                              $f = mysqli_fetch_assoc( $result );
                                                                                                             $fetch =  $f[ $user_id ];
                                                                                                                    }
                                                                                    }
                              } else {
                                          $f = mysqli_fetch_array( $result );
                                          $fetch = $f[0];
                                     }      */


                                //#######
                                /* fetch row */
                                /*    		$row = mysqli_fetch_assoc($result);
                                            //printf ("City: %s  Countrycode: %s\n", $row[0], $row[1]);

                                            $user_id = $row["user_id"];
                                            $username = $rows["username"];
                                            $userpass =$rows["password"];
                                            $Dept = $rows["department"]; */
                                ####

                                ?>
                            </tr>
                            <tr bgcolor="<?php echo $bgcolor; ?>">
                                <td nowrap="nowrap"><?php echo $username; ?></td>
                                <td nowrap="nowrap"><?php echo $Dept; ?></td>
                                <td><a href="user-edit.php?user_id=<?php echo $user_id; ?>"> <img src='../images/b_edit.png' alt="edit record" width="16" height="16" /></a></td>
                                <td><a href="user-del.php?user_id=<?php echo $user_id; ?>"> <img src='../images/b_drop.png' alt="delete record" width="16" height="16" onclick="return confirm('<?php echo "Are you sure you want to delete file #". $user_id. "?"; ?>');" /></a></td>
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
                    </div>
                </form>
            </div>
            <h1>&nbsp;</h1>

        </div>
        <div id="program"></div>
        <div id="right">
            <h2>&nbsp;</h2>
            <p>&nbsp;</p>
        </div>
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

<script language="javascript" >
    /*		function SubmitForm(form)
            {
                var form = document.forms[0];
                if ((form.pLName.value.length <1) ||
                    (form.pFName.value.length <1) ||
                    (form.pMIName.value.length <1))
                    {
                     return false;
                    }
                else
                    {
                      return true;
                    }
            }
    */
    function optionList_SelectedIndex()
    {
        //----------------------------------------------------------------------------------------------------------
        /*HTML/JavaScript - Working with selectedIndex (select, options, selectedIndex, text, value)
        The selectedIndex number can be used to reference the selected option in the select list.
        Note: It is case sensitive.
        Make sure to capitalize the "I" in selectedIndex
        * selectedIndex - The number (base 0) of the item that is selected in the select list
        * value - For an option, what's in the value attribute.
          If the value attribute is not set, text should be returned [* refer below]
              o val1 is the value in the following HTML example
              o <option value="val1">sea one</option>
        * text - For an option, what's in between the option tags
              o sea two is the text in the following HTML example
              o <option value="val2">sea two</option>*/

        var selObj = document.getElementById('pdept');
        //var txtIndexObj = document.getElementById('txtIndex');
        var hidden_dept_id_ValueObj = document.getElementById('hidden_dept_id');
        var hidden_dept_TextObj = document.getElementById('hidden_dept');

        var selIndex = selObj.selectedIndex;
        //txtIndexObj.value = selIndex;
        hidden_dept_id_ValueObj.value = selObj.options[selIndex].value;
        hidden_dept_TextObj.value = selObj.options[selIndex].text;

        //var form = document.forms[0]; --> Option B
    <!-- //Passing the data from the databse residence [ID] to hidden field
        //Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->
        //----------------------------------------------------------------------------------------------------------
    }

    //Limitng Max number on textboxes
    //Source: http://javascript.internet.com/forms/limit-textarea.html
    function textCounter(field, countfield, maxlimit)
    {
        if (field.value.length > maxlimit) // if too long...trim it!
            field.value = field.value.substring(0, maxlimit);
        else
            countfield.value = maxlimit - field.value.length;
    }

    //Number only on Keypress
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>

<script language="javascript" >
    var form = document.forms[0];
    //purpose?: to retrieve what users last input on the field..
    form.pdept.value = ("<?PHP echo $_POST['hidden_dept_id']; ?>");

    //alert (form.pCityM.value);
</script>