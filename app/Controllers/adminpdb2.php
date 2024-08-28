<?php

namespace App\Controllers;

use App\Models\Pdbcat2Model;
use App\Models\LogModel; 
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class adminpdb2 extends ResourceController
{
    private $logModel;
    private $cat2Model;
    private $session;

    public function __construct() 
    {
        $this->session = \Config\Services::session();
        $this->cat2Model = new Pdbcat2Model();
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
        $cat2 = $this->cat2Model->where('Tahun', $tahun)->findAll();
        $payload = ['cat2' => $cat2, 'tahun' => $tahun];
        echo view('admin/pdb2', $payload);
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
        $cat2 = $this->cat2Model->find($id);

        if (!$cat2) {
            throw new \Exception("Data not found!");
        }

        echo view('admin/edit2', ["cat2" => $cat2]);
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
    
        $this->cat2Model->update($id, $payload);
    
        $userId = $session->get('id');
        $logPayload = [
            'user_id' => $userId,
            'action' => 'update',
            'table_name' => 'cat2',
            'record_id' => $id,
        ];
    
        $this->logAction($logPayload);
        return redirect()->to('/adminpdb2');
    }



    public function delete($id = null)
    {
        // Hapus data dari model
        $this->cat2Model->delete($id);

        // Log aksi pengguna
        $userId = $this->session->get('user_id'); // Sesuaikan dengan cara Anda menyimpan ID pengguna
        $logPayload = [
        'user_id' => $userId,
        'action' => 'delete',
        'table_name' => 'cat2', // Ganti dengan nama tabel yang sesuai
        'record_id' => $id,
        ];
        $this->logAction($logPayload);

        // Redirect ke halaman adminpdb dan tampilkan pesan sukses
        return redirect()->to('/adminpdb2')->with('success', 'Data berhasil dihapus!');
    }

    
}