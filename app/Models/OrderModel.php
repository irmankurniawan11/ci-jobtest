<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id','nama_barang', 'berat_barang', 'panjang_barang', 'lebar_barang', 'tinggi_barang', 'status'];

    public function getOrdersByUserId($user_id = null) {
        if($user_id == null) return $this->findAll();

        return $this->where(['user_id'=>$user_id])->findAll();
    }

    public function getOrdersById($id = null) {
        if($id == null) return $this->findAll();

        return $this->where(['id'=>$id])->first();
    }
}
