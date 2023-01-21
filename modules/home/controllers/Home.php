<?php

class Home extends Trongate {

    function index() {
        $data['page_headline'] = 'A little about us...';
        $data['view_module'] = 'Home';
        $data['view_file'] = 'home';
        $this->template('public', $data);
    }

}
