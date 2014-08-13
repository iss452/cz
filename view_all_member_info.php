<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Retrieving Member Data (view_all_member_info.php)</title>
</head>
<body>
<h1 align = "center"><strong>Retrieving Member Info</SMALL></strong></h1><br /> <br />

<?php

if (isset($_SESSION['id']))
   {
   include "inc_connect.php";

   mysql_select_db("dkokoska_cz_members") or die(mysql_error());

   $result = mysql_query("SELECT * FROM cz_members4")
         or die(mysql_error());

   echo"<table border = '15' width = '100%'>";
   echo"<tr>
    	<th bgcolor='#E0E0E0' colspan='15'>Members</th>
    	</tr>";
   echo"<tr>
      <th style = \"background-color:rgb(224,234,244)\">First Name</th>
      <th style = \"background-color:rgb(224,234,244)\">Last Name</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Location</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Office Address</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Office Hours</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Semester</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Phone</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Fax</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Email Address</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Academic Area</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Image</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Room</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>User Name</th>
      <th style = \"background-color:rgb(224,234,244)\">Title</th>Web Page</th>
    	</tr>";

   while($row = mysql_fetch_array($result))
      {
      $keys = array_keys($row);
      foreach ($keys as $key)
         {
         if (strlen($row[$key])==0)
            {
            $row[$key]="<center><small><i><b>N/A</b></i></small></center>";
            }
         }
    	echo "<tr>
         <td style = \"background-color:rgb(224,234,244)\">Title</th>$row[firstName]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[lastName]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[title]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[location]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[officeAddress]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[officeHours]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[semester]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[phone]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[fax]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[emailAddress]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[academicArea]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[image]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[room]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[userName]</td>
         <td style = \"background-color:rgb(224,234,244)\">$row[webPage]</td>
    	</tr>";
      }
   echo "</table>";
   }
 else
   {
   echo "You are not logged in. You cannot view this information.<p />\n";
   echo "Please <a href='member_login.html'>log in</a> to view this information.\n";
   }

?>

</body>
</html>