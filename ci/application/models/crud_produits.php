<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_produits extends CI_Model
{
	protected $table = 'produits';

	/**
	 *	Ajoute une news
	 */
	public function ajouter($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function produitID($id)
    {
        $detail=$this->db->where("PRO_ID",$id)->get($this->table); // requêtes
        return $detail->row();
    }

	/**
	 *	Éditer
	 */
	public function modification($id,$maj)
	{
		$this->db->update($this->table, $maj ,'PRO_ID='.$id);
	}

	/**
	 *	Supprime
	 */
	public function supprimer($id)
	{
		return $this->db->where('PRO_ID', (int) $id)
			->delete($this->table);
	}

	/**
	 *	Retourne une liste des produits
	 */
	public function liste()
	{
		$this->load->database();
		return $this->db->select('*')
			->from($this->table)
			->order_by('PRO_ID', 'desc')
			->get()
			->result();
	}

}

?>