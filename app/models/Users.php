<?php

use ActiveRecord\Model as ActiveRecord;

class Users extends ActiveRecord{
    
    private $name;
            
    function findById($id) 
    {
        try {
            $user = self::find($id);
            return $user;
        } catch (Exception $exc) {
            return false;
        }        
    }
    
    function findAll()
    {
        try 
        {
            $result = [];
            $data = self::find("all");
            
            foreach ($data as $value) { 
                array_push($result, $value->attributes());
            }
            
            return $result;
        } 
        catch (Exception $ex)
        {
            die($ex->getMessage());
            return false;
        }
    }
    
    function newUser($user)
    {
        $data = $this->create($user);
        if ($data)
        {
            //echo 'ok';
        }
        else
        {
            //echo 'erro';
        }
    }
}
