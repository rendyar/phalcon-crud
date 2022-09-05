<?php

class Siswa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_siswa;

    /**
     *
     * @var string
     */
    public $nama_lengkap;

    /**
     *
     * @var string
     */
    public $kelas;

    /**
     *
     * @var string
     */
    public $jurusan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('Siswa');
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'id_siswa' => 'id_siswa', 
            'nama_lengkap' => 'nama_lengkap', 
            'kelas' => 'kelas', 
            'jurusan' => 'jurusan'
        );
    }

}
