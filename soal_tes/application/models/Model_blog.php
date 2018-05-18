<?php

/**
* 
*/
class Model_blog extends CI_Model
{
	
function allblog() {
        return $this->db->query("SELECT * FROM posts p
									LEFT JOIN users u ON u.id=p.createBy
									LEFT JOIN comments c ON c.postId =  p.id
									WHERE p.id = 1");
    }

}