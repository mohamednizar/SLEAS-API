<?php

class User extends Model {

    protected $passwd;
    private $level;

  

    function get_user($id) {
        $user = $this->select($id)['User'];
        $this->name = $user['name'];
        $this->workplace_id = $user['workplace_id'];
        $this->sub_location_id =$user['sub_location_id'];
        $this->person_id = $user['person_id'];
	    return json_encode($this);
    }

}
