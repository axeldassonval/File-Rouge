<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller
{
    public function home()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
}

?>