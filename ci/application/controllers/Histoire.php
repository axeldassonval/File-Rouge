<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histoire extends CI_Controller
{
    public function villagegreen()
    {

        $this->load->view('header');
        $this->load->view('villagegreen');
        $this->load->view('footer');

    }
}

?>