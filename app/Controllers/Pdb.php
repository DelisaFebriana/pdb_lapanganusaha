<?php

namespace App\Controllers;

use App\Models\Pdbcat1Model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Pdb extends ResourceController
{
    private $cat1Model;

    public function __construct() {
        $this->cat1Model = new Pdbcat1Model();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $tahun = $this->request->getVar('tahun') ?? date('Y');
        $cat1 = $this->cat1Model->where('Tahun', $tahun)->findAll();
        $payload = ['cat1' => $cat1, 'tahun' => $tahun];
        echo view('pdb', $payload);
    }

    public function downloadExcel()
    {
        // Ambil data untuk diunduh
        $tahun = $this->request->getVar('tahun') ?? date('Y');

        // Ambil data sesuai dengan tahun yang dipilih
        $cat1 = $this->cat1Model->where('Tahun', $tahun)->findAll();

        // Buat Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header tabel
        $sheet->setCellValue('A1', 'PDB Lapangan Usaha');
        $sheet->setCellValue('B1', 'Triwulan I');
        $sheet->setCellValue('C1', 'Triwulan II');
        $sheet->setCellValue('D1', 'Triwulan III');
        $sheet->setCellValue('E1', 'Triwulan IV');
        $sheet->setCellValue('F1', 'Tahunan');
        $sheet->setCellValue('G1', 'Tahun');

        // Isi data ke dalam tabel
        $row = 2;
        foreach ($cat1 as $item) {
            $sheet->setCellValue('A' . $row, $item['Lapangan_Usaha']);
            $sheet->setCellValue('B' . $row, $item['Triwulan_I']);
            $sheet->setCellValue('C' . $row, $item['Triwulan_II']);
            $sheet->setCellValue('D' . $row, $item['Triwulan_III']);
            $sheet->setCellValue('E' . $row, $item['Triwulan_IV']);
            $sheet->setCellValue('F' . $row, $item['Tahunan']);
            $sheet->setCellValue('G' . $row, $item['Tahun']);
            $row++;
        }

        // Buat file Excel
        $writer = new Xlsx($spreadsheet);
        $fileName = 'PDB_Lapangan_Usaha_' . $tahun . '.xlsx';

        // Set header untuk mengunduh file
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        // Kirim file ke browser untuk diunduh
        $writer->save('php://output');
        exit();
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
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
    
}