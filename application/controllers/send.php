<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Send extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('checkemail', '', TRUE);
        }

        function index()
        {
            //This method will have the credentials validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|callback_validateEmail');

            if ($this->form_validation->run() == FALSE) {
                //Field validation failed.  User redirected to login page
                $this->load->view('reset/reset_view');
            } else {
                if ($this->check_database()) {
                    redirect('login', 'refresh');
                } else {
                    $this->load->view('reset/reset_view');
                }

                //Go to private area
//                redirect('login', 'refresh');
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


        function check_database()
        {
            //Field validation succeeded.  Validate against database
            $email = $this->input->post('email');

            //query the database
            $result = $this->checkemail->check($email);

            if ($result) {
                $send = $this->send($email);
                if ($send) {
                    return true;
                } else {
                    return false;
                }
            } else {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                return false;
            }
        }

        function send($email)
        {
            $this->email->from('tato@innotec.ge', 'System');
            $this->email->to($email);
            $this->email->subject('Password Recovery');
            $this->email->message('Your New Password is ######');
            if ($this->email->send()) {
                echo "Check Your Inbox";
            } else {
//                echo $this->email->print_debugger();
                echo "can't send email";
            }
        }
    }

?>