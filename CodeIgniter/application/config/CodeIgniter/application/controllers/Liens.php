<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller {

	public function index(){
		$this->load->database();
		$this->load->helper('url');

		$model["liste"] = $this->db->query('SELECT * FROM liens');//Pour effectuer une requête

		// $sql = "insert into liens (titre, url, description) values ( ?, ?, ? )";
		// $this->db->query($sql, array('AFPA', 'http://www.afpa.fr/', 'Association ...')); //Pour transmettre des données à la requête

		$this->load->view('liens/liste', $model);
	}

	public function liste(){
		$this->load->database();
		$this->load->helper('url');

		$model["liste"] = $this->db->query('SELECT * FROM liens');//Pour effectuer une requête

		// $sql = "insert into liens (titre, url, description) values ( ?, ?, ? )";
		// $this->db->query($sql, array('AFPA', 'http://www.afpa.fr/', 'Association ...')); //Pour transmettre des données à la requête

		$this->load->view('liens/liste', $model);
	}

	public function ajout(){
		$this->load->helper('url');
		$this->load->view('liens/ajout');
		

	}

	public function script_ajout(){
		$data = $this->input->post();//permet de récupérer les données envoyées par le formulaire
		$this->load->database();//permet de se connecter à la base de données		
		$str = $this->db->insert_string('liens',$data);//génère une chaine de caractères représentant une requête d’insertion.
		//var_dump($str);
		$this->db->simple_query($str);//exécute le requête d’action

		$this->load->helper('url');// charge le module permettant d’utiliser la fonction redirect
		redirect(site_url("liens/liste"));
	}

	public function modif($id){
	    $this->load->database();
	    $this->load->helper('url');
	   	//$liste = $this->db->query("select * from liens where id=?", array($id));
	   	$liste = $this->db->query("select * from liens where id=" .$id);
	    $model["lien"] = $liste->row(); // première ligne du résultat
	   	$this->load->view('liens/modif', $model);
	 }

	public function script_modif(){
        $data = $this->input->post();
        $this->load->database();
        $id = $this->input->post("id");
       
        $str = $this->db->update_string('liens', $data, "id=".$id);
        //var_dump($str);
        $this->db->query($str);

        $this->load->helper('url');
        redirect(site_url("liens/liste"));
    }

    public function supprime($id){
    	$this->load->database();
    	$this->load->helper('url');
    	$liste = $this->db->query("select * from liens where id=" .$id);
	    $model["lien"] = $liste->row(); 
	   	$this->load->view('liens/supprime', $model);
    }

    public function script_supprime(){
    	$id = $this->input->post("id");

    	$this->load->database();
    	$this->db->query("delete from liens where id=" .$id);
    	
    	$this->load->helper('url');
    	redirect(site_url("liens/liste"));

    }

    // public function detail($id, $nom){
    // 	var_dump($id);
    // 	var_dump($titre);
    // 	$this->load->view('liens/detail');
    // }
}
?>