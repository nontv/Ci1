<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        //$this->load->model('User_type_model');
    }
    public function index()
    {
        $users = $this->User_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }
    public function show($userID = "")
    {
        $user = $this->User_model->getUserByID($userID);
        $data = [
           'user' => $user->row()
       ];
        $this->load->view('layout/header');
        $this->load->view('user/show', $data);
        $this->load->view('layout/footer');
    }
    public function profile()
    {
        echo "U are now login!";
    }
    public function edit($userID)
    {
        $user = $this->User_model->getUserByID($userID);
        $data = [
           'user' => $user->row()
       ];
        $this->load->view('layout/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update($userID)
    {
        $user = $this->input->post();
        $result = $this->User_model->update($userID, $user);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }
    public function addUser()
    {
        $user_types = $this->User_type_model->getUserType();
        $data = [
            'user_types' => $user_types
        ];
        $this->load->view('layout/header');
        $this->load->view('user/add_user', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data = $this->input->post();
        $result = $this->User_model->insertUser($data);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }
    public function delete($userID)
    {
        $result = $this->User_model->delete($userID);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }
}