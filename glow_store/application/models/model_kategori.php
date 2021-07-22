<?php 
class Model_kategori extends CI_Model
	{
		public function Skincare()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Skincare'));
			}
		public function Bodycare()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Bodycare'));
			}
		public function Serum()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Serum'));
			}
		public function Cosmetic()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Cosmetic'));
			}			
		public function Spot_treatment()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Spot treatment'));
			}
		public function Paket()
			{
				return $this->db->get_where("tb_barang",array('kategori' => 'Paket'));
			}
	}
?>