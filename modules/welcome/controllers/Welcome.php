<?php
class Welcome extends Trongate {
 
    function index() {
        $data['view_module'] = 'Welcome';
        $data['view_file'] = 'welcome';
        $this->template('public', $data);
    }

}