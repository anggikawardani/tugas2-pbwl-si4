<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Golongan();
      }

      public function index()
      {
            $data = $this->model->all();
            $this->model->resetID();
            $this->golongan('golongan/index', $data);
      }

      public function create()
      {
            $this->golongan_tambah('golongan/create');
      }

      public function store()
      {
            $this->model->store();
            header('location:' . URL . '/golongan');
      }

      public function edit($id)
      {
            $data = $this->model->edit($id);
            $this->golongan_edit('golongan/edit', $data);
      }

      public function update()
      {
            $this->model->update();
            header('location:' . URL . '/golongan');
      }

      public function delete($id)
      {
            $this->model->delete($id);
            header('location:' . URL . '/golongan');
      }
}
