<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Database;
 
class LoginController extends BaseController
{

    protected $db;

    public function __construct()
    {
		helper('custom');
        $db = db_connect();
    }
        
    // public function index()
    // {
    //     return view('login');
    // } 
   
    public function authenticate()
    {
        
		helper('custom');
        $session = session();
        $db = db_connect();
        // if(isset($_POST['user']) && $_POST['pass']){
            // $email = $_POST['user'];
            // $password = $_POST['pass'];
            $email = $this->request->getVar('user');
            $password = md5($this->request->getVar('pass'));
          
            $query = $db->table('login')->where('email', $email)->get();
         
            $user = $query->getRow();
             
            if (is_null($user)) {
                return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
            }
        
          
            // $pwd_verify = password_verify($password, $user->password);
          
            if ($password != $user->password) {
                return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
            }
            
            $ses_data = [
                'id' => $user->id,
                'email' => $user->email,
                'isLoggedIn' => TRUE
            ];
           
            $session->set($ses_data);
            return redirect()->to('/');
        // }
    }
    
 
    public function logout() {
        session_destroy();
        return redirect()->to('/login');
    }
}