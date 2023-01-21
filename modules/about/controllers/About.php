<?php

class About extends Trongate {

    function index() {
        $data['page_headline'] = 'Artist Statement';
        $data['view_module'] = 'About';
        $data['view_file'] = 'about';
        $this->template('public', $data);
    }

}
