<?php

class Model_Admin extends Model
{
    public function getContentOne($table)
    {
        try {
            $data = $this->connect()->query("SELECT * FROM  $table");
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
    
    public function getContent($table, $url)
    {
        try {
            $data = $this->connect()->query("SELECT * FROM  $table WHERE url='$url'");
            $result_one = mysqli_fetch_assoc($data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return $result_one;
    }
    
    public function updateContent()
    {
        $data = 'ok';
        header('location:/');
        
        return $data;
    }
}

