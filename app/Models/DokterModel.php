<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $allowedFields = ['nik', 'nip', 'nama', 'email', 'alamat', 'jenis_kelamin', 'image_profile', 'izin_praktek', 'tgl_mulai_bekerja', 'no_hp'];

    public function getDokter($id = false)
    {
        if (!$id) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }

    public function search($keyword)
    {
        return $this
            ->table('dokter')
            ->like('nik', $keyword)
            ->orLike('nip', $keyword)
            ->orLike('nama', $keyword)
            ->orLike('email', $keyword)
            ->orLike('alamat', $keyword)
            ->orLike('izin_praktek', $keyword)
            ->orLike('tgl_mulai_bekerja', $keyword)
            ->orLike('no_hp', $keyword);
    }
}
