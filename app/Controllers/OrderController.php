<?php

namespace App\Controllers;

class OrderController extends BaseController
{
    public function index()
    {
        return view('order/index');
    }

    public function add() {
        return view('order/add');
    }

    public function processAdd() {
        $rules = [
            'nama_barang' => 'required',
            'berat_barang' => 'required',
            'pjg_barang' => 'required',
            'lbr_barang' => 'required',
            'tgi_barang' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        return redirect()->to('dashboard')->with('success', 'Sukses menambahkan data.');
    }
}