<?php
/**
 * Agent model
 */
class model_supplier extends CI_Model {

	function __construct() {
		$this->load->database();
		$this->load->helper('url_helper');
		$this->load->helper('url');
	}

	// function getDaftarProvinsi() {
	// 	$query = $this->db->get('provinsi');
	// 	return $query->result();
	// }
	function getSupp() {
		$query = $this->db->from('supplier');
		return $query->get()->result();
	}
	function getSuppUnapprove() {
		$query = $this->db->where('status', "0")->from('supplier');
		return $query->get()->result();
	}
	function getSuppUnapproveId($id) {
		$query = $this->db->where('id_supplier', $id)->from('supplier');
		return $query->get()->result();
	}
	function approve($data, $id) {
		$this->db->where('id_supplier', $id)->update('supplier', $data);
	}
	function updateStatus($data, $id) {
		$this->db->where('id_supplier', $id)->update('supplier', $data);
	}
	function getKategoriPegawai($idPegawai) {
		$query = $this->db->where('id_pegawai', $idPegawai)->from('pegawai');
		return $query->get()->row()->kategori;
	}

}
?>