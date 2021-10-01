<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('model_user');
    }

    public function index()
    {
        echo $this->session->flashdata('message');
    }

	public function Login() 
    {   

        // form validation

        // aturan
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if($this->form_validation->run() == false){

            $data = [
                'title'=>'Login',
            ];
            $this->load->view("layout_top", $data);
    
            $this->load->view("auth_view_login");
    
            $this->load->view('layout_bottom');
        } else {
            
            $data = [
                'email'=> $this->input->post('email'),
                'password'=> $this->input->post('password')
            ];
            $user = $this->db->get_where('users',[ 'email' => $data['email']] )->row_array();
            
            // exist / ada
            if($user){
                //



            }else{
    
            $this->session->set_flashdata('message', '<div>Email Tidak terdaftar</div>');
            redirect('auth');
    
            } 

        }

	}
	public function registration() 
    {   


        //form validation

        //aturan
        $this->form_validation->set_rules('name', 'Name' , 'required');
        $this->form_validation->set_rules('email', 'Email' , 'required|trim|valid_email|is_unique[users.email]' , [
            'is_unique'=>'Email Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[6]|matches[password_match]', [
            'matches'=>'password nya berbeda',
            'min_length'=>'password tidak boleh di bawah 6 karakter'
        ]);
        $this->form_validation->set_rules('password_match', 'Password_match' , 'required|trim|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender',"required");
        if( $this->form_validation->run() == false){
            
            $data = [
                'title'=>'Daftar'
            ];

            // MENAMPILKAN VIEW
            $this->load->view("layout_top", $data);
            $this->load->view("auth_view_register");
            $this->load->view('layout_bottom');
        }else{

            // mengecek gender untuk foto profil default
            if($this->input->post('gender') == 'pria'){
                $default_profil_image = "default_profil_pria.jpg";
            }else{
                $default_profil_image = "default_profil_wanita.jpg";
            }

            $register_data = [
                'name'=>            htmlspecialchars( $this->input->post('name', true)),
                'email'=>           htmlspecialchars( $this->input->post('email', true)),
                'password'=>        password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gender'=>          $this->input->post('gender'),
                'profil_image'=>    $default_profil_image,
                'verified'=>       '1',
                'user_role'=>       '2',
                'date_created'=>    time()
            ];

            // memasukan ke database
            $this->model_user->registration($register_data);
            $this->session->set_flashdata('message', '<div>Login Berhasil</div>');
            redirect('auth');
        }


	}
}
