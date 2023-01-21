<?php

class Contact extends Trongate {

    function submit() {
        $submit = post('submit');
        if ($submit == 'Submit') {
            //look out, it's a validation situation!
            $this->validation_helper->set_rules('name', 'Name', 'required|min_length[3]|max_length[35]');
            $this->validation_helper->set_rules('email', 'Email', 'required|valid_email');
            $this->validation_helper->set_rules('message', 'Message', 'required');

            //run the validation tests
            $result = $this->validation_helper->run();

            if ($result == true) {
                echo 'well done';
                json($_POST);
            } else {
                $this->create();
            }
        }
    }

    function index() {
        $data['page_headline'] = 'Contact Page';
        //$data['form_location'] = str_replace('/contact', '/submit', current_url());
        $data['view_module'] = 'Contact';
        $data['view_file'] = 'contact';
        $this->template('public', $data);
    }

    function create() {
        $data = $this->_get_data_from_post();
        $data['form_location'] = str_replace('/create', '/submit', current_url());
        $data['view_module'] = 'Contact';
        $data['view_file'] = 'create';
        $this->template('public', $data);
    }

    function _get_data_from_post() {
        $data['name'] = post('name', true);
        $data['email'] = post('email', true);
        $data['message'] = post('message', true);
        return $data;
    }

}
