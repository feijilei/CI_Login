<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class GoRegister extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('registermodel', '', TRUE);
        }

        function index()
        {
            //This method will have the credentials validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('sex', 'Gender', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|callback_validateEmail');
            $this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|');
            $this->form_validation->set_rules('birthday', 'Date of Birth', 'required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[members.user]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|xss_clean|min_length[6]|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                //Field validation failed.  User redirected to register page
                $this->load->view('register/register_view');
            } else {
                $this->check_database();
                $this->load->view('register/home_view');
                $this->output->set_header('refresh:2;url=login');
            }
        }

        function check_database()
        {
            //Field validation succeeded.  Validate against database
            if ($sex = $this->input->post('sex') == 1) {
                $sex = 'F';
            } else {
                $sex = 'M';
            }

            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $full_name = $this->input->post('full_name');
            $birthday = $this->input->post('birthday');
            $username = $this->input->post('username');
            //query the database
            $result = $this->registermodel->register($username, $password, $sex, $email, $full_name, $birthday);
            if ($result) {
                $this->send($email);
                return TRUE;
            } else {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                return false;
            }
        }

        function validateEmail($email)
        {
            $this->load->helper('email');
            if ((!valid_email($email))) {
                $this->form_validation->set_message('validateEmail', 'The E-Mail you entered is invalid');
                return false;
            }
            return true;
        }

        function send($email)
        {
            $this->load->library('email');

            $this->email->from('kutaliatato@gmail.com', 'System');
            $this->email->to($email);
            $this->email->subject('Password Recovery');
            $this->email->message('Your New Password is ######');
            if ($this->email->send()) {
                echo "Check Your Inbox";
            } else {
                echo $this->email->print_debugger();
            }
        }
    }

?>