<?php
class Say_Hello_model extends CI_Model {
    public function getProfile($name) {
        return array("fullName"=>"Mehmet Özköse","age"=>"34");
    }
}
?>