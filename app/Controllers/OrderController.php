<?php

namespace App\Controllers;

use App\Models\OrderModel;

class OrderController extends BaseController
{
    protected $ordersModel;
    public function __construct()
    {
        $this->ordersModel = new OrderModel();
    }

    public function index() {
        if(session()->get('email')) {
            $data = [
                'orders'=> $this->ordersModel->getOrdersByUserId(session()->get('user_id'))
            ];
            return view('dashboard', $data);
        }
        else return redirect()->to('login');
    }

    public function add() {
        return view('order/add');
    }

    public function processAdd() {
        $rules = [
            'nama_barang' => 'required',
            'berat_barang' => 'required',
            'panjang_barang' => 'required',
            'lebar_barang' => 'required',
            'tinggi_barang' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $orderData = [
            'user_id' => session()->get('user_id'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'berat_barang' => $this->request->getVar('berat_barang'),
            'panjang_barang' => $this->request->getVar('panjang_barang'),
            'lebar_barang' => $this->request->getVar('lebar_barang'),
            'tinggi_barang' => $this->request->getVar('tinggi_barang'),
            'status' => "Menunggu",
        ];
        $this->ordersModel->insert($orderData);

        return redirect()->to('dashboard')->with('success', 'Sukses menambahkan data.');
    }

    public function edit($id) {
        $order = $this->ordersModel->where(['id'=>$id])->first();
        if(empty($order)) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        if($order['user_id'] != session()->get('user_id')) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        $data = [
            'order' => $this->ordersModel->getOrdersById($id)
        ];
        return view('order/edit', $data);
    }

    public function update($id) {
        $order = $this->ordersModel->where(['id'=>$id])->first();
        if(empty($order)) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        if($order['user_id'] != session()->get('user_id')) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        $rules = [
            'nama_barang' => 'required',
            'berat_barang' => 'required',
            'panjang_barang' => 'required',
            'lebar_barang' => 'required',
            'tinggi_barang' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $orderData = [
            'id' => $id,
            'nama_barang' => $this->request->getVar('nama_barang'),
            'berat_barang' => $this->request->getVar('berat_barang'),
            'panjang_barang' => $this->request->getVar('panjang_barang'),
            'lebar_barang' => $this->request->getVar('lebar_barang'),
            'tinggi_barang' => $this->request->getVar('tinggi_barang'),
        ];
        $this->ordersModel->save($orderData);
        return redirect()->to('dashboard')->with('success', 'Data berhasil diubah.');
    }

    public function delete($id) {
        $order = $this->ordersModel->where(['id'=>$id])->first();
        if(empty($order)) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        if($order['user_id'] != session()->get('user_id')) {
            return redirect()->to('dashboard')->with('error', 'Operasi ilegal.');
        }
        $this->ordersModel->delete($id);
        return redirect()->to('dashboard')->with('success', 'Data berhasil dihapus.');
    }
}