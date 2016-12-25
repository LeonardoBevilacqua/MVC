<?php

use ActiveRecord\Model as ActiveRecord;

class Users extends ActiveRecord{
    function findById($id) 
    {
        $user = self::find($id);
        return $user;
    }
}
