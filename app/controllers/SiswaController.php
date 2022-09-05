<?php

class SiswaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $siswa = Siswa::find();
        $this->view->data=$siswa;
    }

    public function createAction()
    {

    }

    public function storeAction()
    {
        $siswa = new Siswa();
        $siswa->nama_lengkap = $this->request->getPost("isi_nama");
        $siswa->kelas = $this->request->getPost("isi_kelas");
        $siswa->jurusan = $this->request->getPost("isi_jurusan");
        if (!$siswa->save()) {
            echo "Gagal Disimpan";
        }else{
            $this->response->redirect('siswa');
            return;
        }
    }

    public function editAction($id)
    {
        $siswa = Siswa::findFirstByidSiswa($id);
        $this->view->id = $siswa->id_siswa;
        $this->view->nama = $siswa->nama_lengkap;
        $this->view->kelas = $siswa->kelas;
        $this->view->jurusan = $siswa->jurusan;
    }

    public function updateAction()
    {
        $id = $this->request->getPost("id_siswa");
        $siswa = Siswa::findFirstByidSiswa($id);
        $siswa->nama_lengkap = $this->request->getPost("isi_nama");
        $siswa->kelas = $this->request->getPost("isi_kelas");
        $siswa->jurusan = $this->request->getPost("isi_jurusan");
        if (!$siswa->save()) {
        echo "Gagal Disimpan";
        }else{
            $this->response->redirect('siswa');
            return;
        }
    }

    public function deleteAction($id)
    {
        $siswa = Siswa::findFirstByidSiswa($id);
    
        if (!$siswa->delete()) {
        echo "Gagal Hapus Data";
        }else{
            $this->response->redirect('siswa');
            return;
        }
    }
}

