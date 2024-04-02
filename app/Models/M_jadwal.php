<?php

namespace App\Models;
use CodeIgniter\Model;

Class M_jadwal extends Model
{
   
    public function registerUser($data)
    {
        return $this->insert($data);
    }

	public function tampil($tabel){
		return $this->db->table($tabel)
		                // ->orderby($id,'desc') 
		                ->get()
		                ->getResult();
	}	         
	public function joinwhere($tabel,$tabel2,$on,$where){
		return $this->db->table($tabel)
		                ->join($tabel2,$on,'left')
		                ->getwhere($where)
		                ->getRow();
	}         
    public function getwhere($tabel,$where){
		return $this->db->table($tabel)
		                ->getwhere($where)
		                ->getRow();

	}
	
	public function tambah($tabel,$isi){
		return $this->db->table($tabel)
		                ->insert($isi);
	}
	public function edit($tabel,$isi,$where){
	 return $this->db->table($tabel)->update($isi,$where);
	}
   public function hapus($tabel, $where) {
    return $this->db->table($tabel)
                    ->where($where) 
                    ->delete();     
    }}
