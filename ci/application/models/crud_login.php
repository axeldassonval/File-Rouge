<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_login extends CI_Model
{
	protected $table = 'clients';


	public function email_employer($data)
	{
		$this->load->database();
		return $this->db->select('*')
			->from('personnels')
			->where("PER_EMAIL ='".$data."'")
			->get()
			->result();
	}

	public function email($data)
	{
		$this->load->database();
		return $this->db->select('*')
			->from('clients')
			->where("CLI_MAIL ='".$data."'")
			->get()
			->result();
	}

	public function panier($data)
	{
		$this->load->database();
		return $this->db->select('*')
			->from('commande')
			->where("CLI_ID ='".$data."'")
			->where("COM_CONFIRMER != 'oui'")
			->get()
			->result();
	}

	public function ancien_panier($data)
	{
		$this->load->database();
		return $this->db->select('*')
			->from('commande')
			->where("CLI_ID ='".$data."'")
			->where("COM_CONFIRMER = 'oui'")
			->get()
			->result();
	}

}

?>