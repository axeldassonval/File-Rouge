<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commande extends CI_Controller
{
    public function pannier()
    {
        $this->load->view('header');
        $this->load->view('pannier');
        $this->load->view('footer');

    }
}

?>