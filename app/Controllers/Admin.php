<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class Admin extends ResourceController
{
    public function __construct() {
        $this->usermodel = new UserModel();
        helper('form');
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $products = $this->usermodel->paginate(10, 'products');

        $order = array(
            "products" => $products,
            "pager" => $this->usermodel->pager
        );

        echo view('Views/layouts/admin/index', $order);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('Views/layouts/admin/new');   
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $order = [
            "id" => uniqid(),
            "tanggal" => $this->request->getPost('tanggal'),
            "kodebarang" => $this->request->getPost('kodebarang'),
            "qty" => (int) $this->request->getPost('qty'),
            "beratsatuan" => (int) $this->request->getPost('beratsatuan'),
            "berattotal" => (int) $this->request->getPost('berattotal'),
            "lokasipltu" => $this->request->getPost('lokasipltu'),
            "hargasatuan" => (int)$this->request->getPost('hargasatuan'),
            "jumlahharga" => (int)$this->request->getPost('jumlahharga'),
            "keagen" => $this->request->getPost('keagen'),
            "dariagen" => $this->request->getPost('dariagen'),
            "ups" => $this->request->getPost('ups'),
            "sampaikantor" => $this->request->getPost('sampaikantor'),
            "tanggalpengiriman" => $this->request->getPost('tanggalpengiriman'),
        ];

        $this->usermodel->insert($order);
        return redirect()->to('/admin');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $product = $this->usermodel->find($id);
        
        if (!$product) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('Views/layouts/admin/edit', ["data" => $product]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $order = [
            "tanggal" => $this->request->getPost('tanggal'),
            "kodebarang" => $this->request->getPost('kodebarang'),
            "qty" => (int) $this->request->getPost('qty'),
            "beratsatuan" => (int) $this->request->getPost('beratsatuan'),
            "berattotal" => (int) $this->request->getPost('berattotal'),
            "lokasipltu" => $this->request->getPost('lokasipltu'),
            "hargasatuan" => (int)$this->request->getPost('hargasatuan'),
            "jumlahharga" => (int)$this->request->getPost('jumlahharga'),
            "keagen" => $this->request->getPost('keagen'),
            "dariagen" => $this->request->getPost('dariagen'),
            "ups" => $this->request->getPost('ups'),
            "sampaikantor" => $this->request->getPost('sampaikantor'),
            "tanggalpengiriman" => $this->request->getPost('tanggalpengiriman'),
        ];
        
        
        $this->usermodel->update($id, $order);
        return redirect()->to('/admin');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->usermodel->delete($id);
        return redirect()->to('/admin');
    }

    public function import()
    {
        $file = $this->request->getFile('file_excel');
        $ext = $file->getClientExtension();

        if($ext =='xlsx'){
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }else{
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        }

        $spreadsheet = $render->load($file);
        $sheet = $spreadsheet->getActiveSheet()->toArray();

        foreach($sheet as $x =>$excel){
            //skip judul tabel
            if($x == 0){
                continue;
            }
            $order =[
                'tanggal' => $excel['0'],
                'kodebarang' => $excel['1'],
                'qty' => $excel['2'],
                'beratsatuan' => $excel['3'],
                'berattotal' => $excel['4'],
                'lokasipltu' => $excel['5'],
                'hargasatuan' => $excel['6'],
                'jumlahharga' => $excel['7'],
                'keagen' => $excel['8'],
                'dariagen' => $excel['9'],
                'ups' => $excel['10'],
                'sampaikantor' => $excel['11'],
                'tanggalpengiriman' => $excel['12'],
            ];
            $this->usermodel->add($order);
            
        }
        session()->setFlashdata('pesan','Data berhasil di Import !!');
        return redirect()->to(base_url('/admin'));
    }
    public function importdata()
    {
        echo view('Views/layouts/admin/importdata');
    }
}

