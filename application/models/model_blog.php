<?php

class Model_Blog extends Model
{
    
    public function getPosts()
    {
        try {
            $data = $this->connect()->query("SELECT * FROM  posts");
            $result=[];
            while ($result[]=mysqli_fetch_assoc($data)){
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return $result;
    }
    
    public function getContentOneNews($url)
    {
        try {
            $data = $this->connect()->query("SELECT * FROM  posts WHERE url='$url'");
            $result_one = mysqli_fetch_assoc($data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return $result_one;
    }
}