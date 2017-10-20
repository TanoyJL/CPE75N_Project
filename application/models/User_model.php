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
		     	if($data['sport'] == 'basketball'){

		     		 redirect('basketball/view');
		     	}
		     	if($data['sport'] == 'womensvoleyball'){

		     		 redirect('WVT/view');
		     	}
		     	if($data['sport'] == 'mensvoleyball'){

		     		 redirect('mensvoleyball/view');
		     	}
		     	if($data['sport'] == 'badminton'){

		     		 redirect('badminton/view');
		     	}
		     	if($data['sport'] == 'tabletennis'){

		     		 redirect('tabletennis/view');
		     	}
		     	if($data['sport'] == 'chess'){

		     		 redirect('chess/view');
		     	}
		     	if($data['sport'] == 'taekwondo'){

		     		 redirect('taekwondo/view');
		     	}
		     	if($data['sport'] == 'karatedo'){

		     		 redirect('karatedo/view');
		     	}
		     	if($data['sport'] == 'swimming'){

		     		 redirect('swimming/view');
		     	}
		     	if($data['sport'] == 'trackandfield'){

		     		 redirect('trackandfield/view');
		     	}
		     	else if($data['sport'] == 'lawntennis'){

		     		 redirect('lawntennis/view');
		     	}
		     	else if($data['sport'] == 'head'){

		     		 redirect('headcoach/view');
		     	}
		   }
		   else
		   {
		   

		     redirect('users/login_coach');
		   }
		}

	

}