<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
            try {
                $data = $this->connect()->query("SELECT * FROM  portfolio");
                $result=[];
                $i=0;
                $count = $data->num_rows - 1;
                while ($i<=$count){
                    $result[]=mysqli_fetch_assoc($data);
                    $i++;
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }

            return $result;
        }

}
