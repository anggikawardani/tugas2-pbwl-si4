<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Pelanggan();
      }

      public function index()
      {
            $data = $this->model->all();
            $this->model->resetID();
            $this->pelanggan('pelanggan/index', $data);
      }

      public function create()
      {
            $data = $this->model->getGol();
            $data2 = $this->model->getUser();
            $this->pelanggan_tambah('pelanggan/create', $data, $data2);
      }

      public function store()
      {
            $this->model->store();
            header('location:' . URL . '/pelanggan');
      }

      public function edit($id)
      {
            $data = $this->model->edit($id);
            $data2 = $this->model->getGol();
            $data3 = $this->model->getUser();
            $this->pelanggan_edit('pelanggan/edit', $data, $data2, $data3);
      }

      public function update()
      {
            $this->model->update();
            header('location:' . URL . '/pelanggan');
      }

      public function delete($id)
      {
            $this->model->delete($id);
            header('location:' . URL . '/pelanggan');
      }
}
