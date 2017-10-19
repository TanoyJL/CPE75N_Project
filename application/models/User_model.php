<?php  
class User_model extends CI_Model{
 

 	public function __construct()
        {
                $this->load->database();
        }


	public function checkloginauth($username, $password)
 		{
		   $this ->db-> select('username, password , sport');
		   $this ->db-> where('username', $username);
		   $this ->db-> where('password', $password);
		   $this ->db-> limit(1);
		   $query = $this ->db-> get('coachuser');
		   $data = $query->row_array();
		 
		   if($query -> num_rows() == 1)
		   {
		     	if($data['sport'] == 'futsal'){

		     		 redirect('futsal/view');
		     	}
		     	if($data['sport'] == 'football'){

		     		 redirect('football/view');
		     	}
		     	else if($data['sport'] == 'lawntennis'){

		     		 redirect('lawntennis/view');
		     	}
		   }
		   else
		   {
		   

		     redirect('users/login_coach');
		   }
		}

}