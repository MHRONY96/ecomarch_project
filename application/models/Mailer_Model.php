<?php

Class Mailer_Model extends CI_Model {

    /**
     *  send_email
     *  @author Md. Hanif Rony
     * @parem-- $data - information to place in the mail
     * $templateName - html template to use in mail body
     * @return -- none
     * Modified by --- Hanif Rony
     * Date--- 27/11/2017
     */
    function send_email($data, $templateName)
    {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['admin_full_name']);
        $this->email->to($data['to_address']);
//        $this->email->cc($data['cc_address']);
//        $this->email->bcc($data['bcc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mail_scripts/' . $templateName, $data, TRUE);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
//        $this->email->clear();
    }

    public function update_new_password()
    {
        $new_password = $this->input->post('new_password', TRUE);
        $email_address = $this->input->post('email_address', TRUE);
        $this->db->set('password', md5($new_password));
        $this->db->where('email_address', $email_address);
        $this->db->update('tbl_customer');
    }

}
