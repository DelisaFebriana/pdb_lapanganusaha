<?php

namespace App\Controllers;

use App\Models\Pdbcat1Model;
use App\Models\LogModel; 
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class adminpdb extends ResourceController
{
    private $logModel;
    private $cat1Model;
    private $session;

    public function __construct() 
    {
        $this->session = \Config\Services::session();
        $this->cat1Model = new Pdbcat1Model();
        $this->logModel = new LogModel(); // Inisialisasi model
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

     private function logAction($data)
     {
        //  if (is_null($data['user_id'])) {
        //      throw new \Exception("User ID is null in logAction.");
        //  }
         
         $this->logModel->insert($data);
     }
     

    public function index()
    {
        $tahun = $this->request->getVar('tahun') ?? date('Y');
        $cat1 = $this->cat1Model->where('Tahun', $tahun)->findAll();
        $payload = ['cat1' => $cat1, 'tahun' => $tahun];
        echo view('admin/pdb', $payload);
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
        $cat1 = $this->cat1Model->find($id);

        if (!$cat1) {
            throw new \Exception("Data not found!");
        }

        echo view('admin/edit', ["cat1" => $cat1]);
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

    $this->cat1Model->update($id, $payload);

    $userId = $session->get('id');
    $logPayload = [
        'user_id' => $userId,
        'action' => 'update',
        'table_name' => 'cat1',
        'record_id' => $id,
    ];

    $this->logAction($logPayload);
    return redirect()->to('/adminpdb');
}

    public function delete($id = null)
    {
        // Hapus data dari model
        $this->cat1Model->delete($id);

        // Log aksi pengguna
        $userId = $this->session->get('user_id'); // Sesuaikan dengan cara Anda menyimpan ID pengguna
        $logPayload = [
        'user_id' => $userId,
        'action' => 'delete',
        'table_name' => 'cat1', // Ganti dengan nama tabel yang sesuai
        'record_id' => $id,
        ];
        $this->logAction($logPayload);

        // Redirect ke halaman adminpdb dan tampilkan pesan sukses
        return redirect()->to('/adminpdb')->with('success', 'Data berhasil dihapus!');
    }


    
}