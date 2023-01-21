<?php
class CV extends Trongate {
 
    function index() {
        $data['view_module'] = 'CV';
        $data['view_file'] = 'cv';
        $this->template('public', $data);
    }

}