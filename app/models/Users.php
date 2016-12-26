<?php

use ActiveRecord\Model as ActiveRecord;

class Users extends ActiveRecord{
    function findById($id) 
    {
        try {
            $user = self::find($id);
            return $user;
        } catch (Exception $exc) {
            return false;
        }        
    }
}
