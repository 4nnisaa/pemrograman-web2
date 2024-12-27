<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarProduk()
    {
        $produkModel = new ProdukModel();

        $data['produks'] = $produkModel->findAll();

        return view('admin/daftar-produk', $data);
    }

    public function daftarProdukTambah()
    {
        return view('admin/daftar-produk-tambah');
    }

    public function createProduk()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $produkModel = new ProdukModel();

        if ($produkModel->insert($data, false)) {
            return redirect()->to('admin/daftar-produk')->with('berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-produk')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarProdukEdit($id)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->find($id);
    
        if (!$produk) {
            return redirect()->to('admin/daftar-produk')->with('gagal', 'Data produk tidak ditemukan!');
        }
    
        return view('admin/daftar-produk-edit', ['produk' => $produk]);
    }
    
    public function changeProduk($id)
    {
        $produkModel = new ProdukModel(); 
        $existingproduk = $produkModel->find($id); 
    
        if (!$existingproduk) {
            return redirect()->to('admin/daftar-produk')->with('gagal', 'Data produk tidak ditemukan!');
        }
    
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('gambar');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path; 
        } else {
            $data['gambar'] = $existingproduk['gambar'];
        }
    
        if ($produkModel->update($id, $data)) {
            return redirect()->to('admin/daftar-produk')->with('berhasil', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to('admin/daftar-produk')->with('gagal', 'Data gagal diperbarui!');
        }
    }
    public function hapusProduk($id)
    {
        $produkModel = new \App\Models\ProdukModel();
    
        $produk = $produkModel->find($id);
    
        if ($produk) {
            $produkModel->delete($id);
    

            return redirect()->to('/admin/daftar-produk')->with('success', 'Produk berhasil dihapus.');
        }

        return redirect()->to('/admin/daftar-produk')->with('error', 'Produk tidak ditemukan.');
    }
    
    

    public function transaksi()
    {
        return view('admin/transaksi');
    }
 
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }
}