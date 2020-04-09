<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller
{
    public function home()
    {
        $this->load->view('home');
    }
}

?>