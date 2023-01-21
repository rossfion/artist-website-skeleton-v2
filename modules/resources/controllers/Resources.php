<?php
class Resources extends Trongate {
 
    function index() {
        $data['view_module'] = 'Resources';
        $data['view_file'] = 'resources';
        $this->template('public', $data);
    }

}