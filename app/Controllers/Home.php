<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_jadwal;

class Home extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function dashboard()
    {
        
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }
    public function jadwalvii()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('vii','id_vii');
        echo view('header');
        echo view('menu');
        echo view('jadwalvii', $data);
        echo view('footer');
}
    public function jadwalviii()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('viii','id_viii');
        echo view('header');
        echo view('menu');
        echo view('jadwalviii', $data);
        echo view('footer');
}
    public function jadwalix()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('ix','id_ix');
        echo view('header');
        echo view('menu');
        echo view('jadwalix', $data);
        echo view('footer');
}
     public function jadwalx()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('x','id_x');
        echo view('header');
        echo view('menu');
        echo view('jadwalx', $data);
        echo view('footer');
}
    public function jadwalxi()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('xi','id_xi');
        echo view('header');
        echo view('menu');
        echo view('jadwalxi', $data);
        echo view('footer');
}
     public function jadwalxii()
{
        $model = new M_jadwal();
        $data['frede'] = $model->tampil('xii','id_xii');
        echo view('header');
        echo view('menu');
        echo view('jadwalxii', $data);
        echo view('footer');
}
    public function tambahjadwalvii()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalvii');
        echo view('footer');
        
    }
    public function tambahjadwalviii()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalviii');
        echo view('footer');
        
    }
    public function tambahjadwalix()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalix');
        echo view('footer');
        
    }
    public function tambahjadwalx()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalx');
        echo view('footer');
        
    }
     public function tambahjadwalxi()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalxi');
        echo view('footer');
        
    }
     public function tambahjadwalxii()
    {
        echo view('header');
        echo view('menu');
        echo view('tambahjadwalxii');
        echo view('footer');
        
    }
    public function edit_jadwalvii($id){
    
        $model = new M_jadwal();
        $where=array('id_vii'=>$id);     
        $data['satu']=$model->getwhere('vii',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalvii',$data);
        echo view('footer');
}    
    public function edit_jadwalviii($id){
    
        $model = new M_jadwal();
        $where=array('id_viii'=>$id);     
        $data['satu']=$model->getwhere('viii',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalviii',$data);
        echo view('footer');
}    
    public function edit_jadwalix($id){
    
        $model = new M_jadwal();
        $where=array('id_ix'=>$id);     
        $data['satu']=$model->getwhere('ix',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalix',$data);
        echo view('footer');
}       
    public function edit_jadwalx($id){
    
        $model = new M_jadwal();
        $where=array('id_x'=>$id);     
        $data['satu']=$model->getwhere('x',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalx',$data);
        echo view('footer');
}    
    public function edit_jadwalxi($id){
    
        $model = new M_jadwal();
        $where=array('id_xi'=>$id);     
        $data['satu']=$model->getwhere('xi',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalxi',$data);
        echo view('footer');
}    
    public function edit_jadwalxii($id){
    
        $model = new M_jadwal();
        $where=array('id_xii'=>$id);     
        $data['satu']=$model->getwhere('xii',$where);

        echo view('header');
        echo view('menu'); 
        echo view('e_jadwalxii',$data);
        echo view('footer');
}    
    public function aksi_t_jadwalvii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c
        
        );
        $model->tambah('vii', $isi);
         return redirect()->to('home/jadwalvii');
    }
    public function aksi_t_jadwalviii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c
        
        );
        $model->tambah('viii', $isi);
         return redirect()->to('home/jadwalviii');
    }
     public function aksi_t_jadwalix()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c
        
        );
        $model->tambah('ix', $isi);
         return redirect()->to('home/jadwalix');
    }
     public function aksi_t_jadwalx()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->tambah('x', $isi);
         return redirect()->to('home/jadwalx');
    }
    public function aksi_t_jadwalxi()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->tambah('xi', $isi);
         return redirect()->to('home/jadwalxi');
    }
    public function aksi_t_jadwalxii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');


        $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->tambah('xii', $isi);
         return redirect()->to('home/jadwalxii');
    }
    public function aksi_e_jadwalvii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_vii'=>$id);
             $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c

        );
        $model->edit('vii', $isi,$where);
         return redirect()->to('home/jadwalvii');
}

 public function aksi_e_jadwalviii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_viii'=>$id);
             $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c

        );
        $model->edit('viii', $isi,$where);
         return redirect()->to('home/jadwalviii');
}
    public function aksi_e_jadwalix()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('mp');
        $c = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_ix'=>$id);
             $isi = array(

            'waktu' => $a,
            'mata_pelajaran' => $b,
            'nama_guru' => $c

        );
        $model->edit('ix', $isi,$where);
         return redirect()->to('home/jadwalix');
}
    public function aksi_e_jadwalx()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_x'=>$id);
             $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->edit('x', $isi,$where);
         return redirect()->to('home/jadwalx');
}
    public function aksi_e_jadwalxi()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_xi'=>$id);
             $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->edit('xi', $isi,$where);
         return redirect()->to('home/jadwalxi');
}
     public function aksi_e_jadwalxii()
    {
        $model = new M_jadwal();
        $a = $this->request->getPost('w');
        $b = $this->request->getPost('j');
        $c = $this->request->getPost('mp');
        $d = $this->request->getPost('ng');
        $id = $this->request->getPost('id');

        $where = array('id_xii'=>$id);
             $isi = array(

            'waktu' => $a,
            'jurusan' => $b,
            'mata_pelajaran' => $c,
            'nama_guru' => $d
        
        );
        $model->edit('xii', $isi,$where);
         return redirect()->to('home/jadwalxii');
}
    public function hapus_jadwalvii($id){

        $model = new M_jadwal();
        $where = array('id_vii' => $id);
        $model->hapus('vii', $where);
         return redirect()->to('Home/jadwalvii');
}

    public function hapus_jadwalviii($id){

        $model = new M_jadwal();
        $where = array('id_viii' => $id);
        $model->hapus('viii', $where);
         return redirect()->to('Home/jadwalviii');
}
    public function hapus_jadwalix($id){

        $model = new M_jadwal();
        $where = array('id_ix' => $id);
        $model->hapus('ix', $where);
         return redirect()->to('Home/jadwalix');
}
    public function hapus_jadwalx($id){

        $model = new M_jadwal();
        $where = array('id_x' => $id);
        $model->hapus('x', $where);
         return redirect()->to('Home/jadwalx');
}
    public function hapus_jadwalxi($id){

        $model = new M_jadwal();
        $where = array('id_xi' => $id);
        $model->hapus('xi', $where);
         return redirect()->to('Home/jadwalxi');
}
    public function hapus_jadwalxii($id){

        $model = new M_jadwal();
        $where = array('id_xii' => $id);
        $model->hapus('xii', $where);
         return redirect()->to('Home/jadwalxii');
}
}