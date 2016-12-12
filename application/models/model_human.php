<?php
/**
 * Agent model
 */
class model_human extends CI_Model {

	function __construct() {
		$this->load->database();
		$this->load->helper('url_helper');
		$this->load->helper('url');
	}

	function getDaftarProvinsi() {
		$query = $this->db->get('provinsi');
		return $query->result();
	}
	function getDaftarKota($idProv) {
		$query = $this->db->where('id_prov', $idProv)->from('kota');
		return $query->get()->result();
	}
	function getDaftarKecamatan($idKota) {
		$query = $this->db->where('id_kota', $idKota)->from('kecamatan');
		return $query->get()->result();
	}
	function getDaftarKelurahan($idKec) {
		$query = $this->db->where('id_kec', $idKec)->from('kelurahan');
		return $query->get()->result();
	}
	function getNamaProvinsi($id) {
		$prov = $this->db->where('id_prov', $id)->from('provinsi')->get()->row();
		return $prov->nama;
	}
	function getNamaKota($id) {
		$kota = $this->db->where('id_kota', $id)->from('kota')->get()->row();
		return $kota->nama;
	}
	function getNamaKecamatan($id) {
		$kec = $this->db->where('id_kec', $id)->from('kecamatan')->get()->row();
		return $kec->nama;
	}
	function getNamaKelurahan($id) {
		$kel = $this->db->where('id_kel', $id)->from('kelurahan')->get()->row();
		return $kel->nama;
	}
	function simpan_data($data) {
		$this->db->insert('pegawai', $data);
	}

}
?>