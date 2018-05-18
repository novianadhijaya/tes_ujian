<?php

class Biodata extends CI_Controller{
    
   public function biodata($parm_name = "", $parm_address = "", Array $parm_hobby, boolean $parm_is_married = FALSE, Array $parm_skill, $parm_school) {
    
    $val_school = "";
    if ($parm_school == "highSchool") {
        $val_school = $parm_school;
    } else if ($parm_school == "university") {
        $val_school = $parm_school;
    } else {
        $val_school = "";
    }

    $name = $parm_name;
    $address = $parm_address;
    $hobby = array($parm_hobby);
    $is_married = $parm_is_married;
    $skill = $array($parm_skill);
    $school = $val_school;

    $data = array(
        'name' => $param_name,
        'address' => $address,
        'hobby' => $hobby,
        'is_married' => $is_married,
        'school' => $school,
        'skill' => $skill
    );

    return echo json_encode($data);
}
}

