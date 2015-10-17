<?php

class Model_Command extends Model
{
	
	public function selectCommand()
	{
		if($_REQUEST[''] !== NULL){

			$result = $this->connect->query("SELECT * FROM command");
			
				if ($result && mysqli_num_rows($result)) {
					$numrows = mysqli_num_rows($result);
					$rowcount = 1;
				print "There are $numrows people in our command:<br /><br />";
			
				while ($row = mysqli_fetch_assoc($result)) {		
					while(list($key, $value) = each($row)) {
						print "<B>$key</B>: $value<br />";
					}
			
					print "<br />";
					++$rowcount;
				}
			}
			
			($result)? header('Location: '.$_SERVER['HTTP_REFERER']) : $this->mysqli->error;
		}

	}
}

