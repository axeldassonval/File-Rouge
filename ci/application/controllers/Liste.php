<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller
{
    public function produits()
    {
        $this->load->view('produits');
    }
}

?>