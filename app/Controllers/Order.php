<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel; 

class Order extends ResourceController
{
    public function __construct() {
        $this->usermodel = new UserModel();
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

        echo view('Views/layouts/users/new', $order);
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
        echo view('Views/layouts/users/new');   
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $order = [
            "tanggal" => $this->request->getPost('tanggal'),
            "kodebarang" => $this->request->getPost('kodebarang'),
            "qty" => (int) $this->request->getPost('qty'),
            "lokasipltu" => $this->request->getPost('lokasipltu'),
        ];

        $this->usermodel->insert($order);
        return redirect()->to('/order');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

   
}
