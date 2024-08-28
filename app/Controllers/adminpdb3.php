<?php

namespace App\Controllers;

use App\Models\Pdbcat3Model;
use App\Models\LogModel; 
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class adminpdb3 extends ResourceController
{
    private $logModel;
    private $cat3Model;
    private $session;

    public function __construct() 
    {
        $this->session = \Config\Services::session();
        $this->cat3Model = new Pdbcat3Model();
        $this->logModel = new LogModel(); // Inisialisasi model
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

     private function logAction($data)
    {
        $this->logModel->insert($data);
    }

    public function index()
    {
        $tahun = $this->request->getVar('tahun') ?? date('Y');
        $cat3 = $this->cat3Model->where('Tahun', $tahun)->findAll();
        $payload = ['cat3' => $cat3, 'tahun' => $tahun];
        echo view('admin/pdb3', $payload);
    }
    
    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */

    public function edit($id = null)
    {
        $cat3 = $this->cat3Model->find($id);

        if (!$cat3) {
            throw new \Exception("Data not found!");
        }

        echo view('admin/edit3', ["cat3" => $cat3]);
    }

    public function update($id = null)
    {
        // Inisialisasi session
        $session = \Config\Services::session();
    
        // Debugging data form
        $postData = $this->request->getPost();
        $payload = [
            "Lapangan_Usaha" => $postData['Lapangan_Usaha'],
            "Triwulan_I" => $postData['Triwulan_I'],
            "Triwulan_II" => $postData['Triwulan_II'],
            "Triwulan_III" => $postData['Triwulan_III'],
            "Triwulan_IV" => $postData['Triwulan_IV'],
            "Tahunan" => $postData['Tahunan'],
            "Tahun" => $postData['Tahun'],
        ];
    
        $this->cat3Model->update($id, $payload);
    
        $userId = $session->get('id');
        $logPayload = [
            'user_id' => $userId,
            'action' => 'update',
            'table_name' => 'cat3',
            'record_id' => $id,
        ];
    
        $this->logAction($logPayload);
        return redirect()->to('/adminpdb3');
    }



    public function delete($id = null)
    {
        // Hapus data dari model
        $this->cat3Model->delete($id);

        // Log aksi pengguna
        $userId = $this->session->get('user_id'); // Sesuaikan dengan cara Anda menyimpan ID pengguna
        $logPayload = [
        'user_id' => $userId,
        'action' => 'delete',
        'table_name' => 'cat3', // Ganti dengan nama tabel yang sesuai
        'record_id' => $id,
        ];
        $this->logAction($logPayload);

        // Redirect ke halaman adminpdb dan tampilkan pesan sukses
        return redirect()->to('/adminpdb3')->with('success', 'Data berhasil dihapus!');
    }

    
}