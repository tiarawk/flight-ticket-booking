<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

           $this->load->model('m_login');         

    }
    /*
    *Showing  Login page here 
    */
    function index()
    {
        
        $this->load->view('v_login'); 
    }
    

    /**
    * check the userusername and the password with the database
    * @return void
    */
    
    function validate()
    {  
    
       
         $userusername = $this->input->post('userusername');
         $password = $this->input->post('password');

         $is_valid = $this->m_loginl->validate($userusername, $password);



        
         if($is_valid)/*If valid userusername and password set */
         {
             $get_id = $this->m_login->get_id($userusername, $password);                
					
            foreach($get_id as $val)
                { 
                     $id=$val->id;
                     $username = $val->userusername;                  
                     $password = $val->password;                 
                     $type=$val->type;

                     if($type=='admin')
                     {
                        $data = array(
                        'admin_username' =>$username, 
                        'admin_password' => $password,
                        'admin_type'=>$type,
                        'admin_id'=>$id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the Admin datas in session */
                          redirect('admin/dashboard');
                     }
                    if($type=='staff')
                     {
                        
                        $data = array(
                        'staff_username' =>$username, 
                        'staff_password' =>$password,
                        'staff_type'=>$type,
                        'staff_id'=>$id,
                        'staff_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  staff datas values in session */
                          redirect('staff/dashboard');
                     }
                   
                    
            }       

         
        }
        else // incorrect userusername or password
        {

          
            $this->session->set_flashdata('msg1', 'Userusername or Password Incorrect!');
            redirect('login');
        }
   
    }

    /**
        * Unset the session, and logout the user.
        * @return void
    */      
    public function admin_logout()
    {
           
				$array_items = array(
				'admin_username', 
				'admin_password',
				'admin_type',
				'admin_id',
				'is_logged_in',
				);



        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Admin Signed Out Now!');
            redirect('login');

       
    }

    public function staff_logout()
    {
            $array_items = array(   
		
                        'staff_username',
                        'staff_password' ,
                        'staff_type',
                        'staff_id',
                        'staff_is_logged_in'
                        );



        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Staff Signed Out Now!');
            redirect('login');

       
    }



    
    
}    
  