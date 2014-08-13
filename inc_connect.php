<?php

$DBConnect = mysql_connect("localhost", "cz_members", "");  //assigns connection information to a variable

//uses a conditional statement to test the connection to the server
if (!$DBConnect)
	{
	echo "<p>Could not connect to the server " . mysql_error() . "</p>\n";
	}
else
	{
		//echo "<p>Connected to the server.</p>\n";

		$DBName = 'cz_members';


		$DBSelect = mysql_select_db($DBName, $DBConnect);

			if ($DBSelect)
			{
				//echo "Database selected";
			}
			else
			{
			echo "Cannot select database";
    		}

	}
?>
