<?php
class Login extends Controller
{
    public function index()
    {

        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();
            $admin =new Admins();
           
            if ($row = $user->where('email', $_POST['email'])) {

                $row = $row[0];
                // print_r($row) ;
                if (password_verify($_POST['password'], $row->password_hash)) {

                    Auth::authenticate($row);
                    if (Auth::check_verified()) {
                        // if($row->usertype=="reg_user"){
                             $this->redirect('/profile');
                        //}
                       
                    } else {
                        $this->redirect('/email_verify');
                    }

                }

            }
            else if ($row = $admin->where('email', $_POST['email'])) {

                $row = $row[0];
                
                if (password_verify($_POST['password'], $row->password_hash)) {

                    Auth::authenticate($row);
                    
                    
                             $this->redirect('/admin');
                    
                       
                    
                }

            }
            $errors['email'] = "Incorrect email or password";
        }

        $this->view('login', [
            'errors' => $errors,
        ]);
    }
}
