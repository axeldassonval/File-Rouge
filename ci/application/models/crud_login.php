<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_client extends CI_Model
{
	protected $table = 'clients';

	/**
	 *	Ajoute une news
	 */
	public function ajouter($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function clientID($id)
    {
        $detail=$this->db->where("CLI_ID",$id)->get($this->table); // requêtes
        return $detail->row();
    }

	/**
	 *	Éditer
	 */
	public function modification($id,$maj)
	{
		$this->db->update($this->table, $maj ,'CLI_ID ='.$id);
	}

	/**
	 *	Supprime
	 */
	public function supprimer($id)
	{
		return $this->db->where('CLI_ID', (int) $id)
			->delete($this->table);
	}

	/**
	 *	Retourne une liste des client
	 */
	public function liste()
	{
		$this->load->database();
		return $this->db->select('*')
			->from($this->table)
			->order_by('CLI_ID', 'desc')
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
			->and("COM_CONFIRMER != oui")
			->get()
			->result();
	}

	public function ancien_panier($data)
	{
		$this->load->database();
		return $this->db->select('*')
			->from('commande')
			->where("CLI_ID ='".$data."'")
			->and("COM_CONFIRMER = oui")
			->get()
			->result();
	}

}

?>