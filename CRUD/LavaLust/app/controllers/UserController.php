<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
         
    }

    public function profile($username, $name){
        $data['username'] = $username;
        $data['name'] = $name;
       $this->call->view('profile', $data);
    }

    public function show(){
     
       $data['students']= $this->UserModel->all();
       $this->call->view('show',$data);
    }
    public function create() {
        
        if($this->io->method() == 'post') {
          $lastname = $this->io->post('lastname');
          $firstname = $this->io->post('firstname');    
            $email = $this->io->post('email');
            $data = array(
                'last_name' => $lastname,
                'first_name' => $firstname,
                'email' => $email
            );

            if($this->UserModel->insert($data)) {
             redirect('/user/show');
            } else {
                echo 'Error in inserting data.';
            }
           
        }else{
             $this->call->view('create');
        }
   
    }

    public function update($id) {
         $data['students']= $this->UserModel->find($id);
          
        if($this->io->method() == 'post') {
            $lastname = $this->io->post('lastname');
            $firstname = $this->io->post('firstname');    
              $email = $this->io->post('email');
              $data = array(
                  'last_name' => $lastname,
                  'first_name' => $firstname,
                  'email' => $email
              );
  
              if($this->UserModel->update($id,$data)) {
               redirect('/user/show');
              } else {
                  echo 'Error in updating data.';
              }
             
          }
       $this->call->view('update',$data);
    }

    public function delete($id) {
        if($this->UserModel->delete($id)) {
            redirect('/user/show');
        } else {
            echo 'Error in deleting data.';
        }
    }
}