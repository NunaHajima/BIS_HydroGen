<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserLogin; 

class Register extends ResourceController
{
    public function __construct() {
        $this->userlogin = new UserLogin();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        echo view('auth/register');
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
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $login = [
            "namaperusahaan" => $this->request->getPost('namaperusahaan'),
            "email" => $this->request->getPost('email'),
            "alamatperusahaan" => $this->request->getPost('alamatperusahaan'),
            "notelp" => (int) $this->request->getPost('notelp'),
            "password" => md5($this->request->getPost('password')),
        ];

        $this->userlogin->insert($login);
        return redirect()->to('/login');
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
