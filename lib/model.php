<?php 
	class model
	{
	    public function test_data($data)
	    {
	    	$data = trim($data);
	    	$data = stripslashes($data);
	    	$data = strip_tags($data);
	    	$data = htmlspecialchars($data);
	    	return $data;
	    }
	}
 ?>