<?php
class Portfolio extends Trongate {
 
    function index() {
        $data['page_headline'] = 'Artist Portfolio';
        $data['view_module'] = 'Portfolio';
        $data['view_file'] = 'portfolio';
        $this->template('public', $data);
    }

}