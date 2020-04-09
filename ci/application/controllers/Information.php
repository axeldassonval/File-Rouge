<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller
{
    public function infos()
    {
        $this->load->view('infos');
    }
}

?>