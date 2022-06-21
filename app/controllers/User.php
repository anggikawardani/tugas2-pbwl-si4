<?php

namespace App\Controllers;

use App\Core\Controller;

class User extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\User();
      }

      public function index()
      {
            $data = $this->model->all();
            $this->model->resetID();
            $this->user('user/index', $data);
      }

      public function create()
      {
            $this->user_tambah('user/create');
      }

      public function store()
      {
            $this->model->store();
            header('location:' . URL . '/user');
      }

      public function edit($id)
      {
            $data = $this->model->edit($id);
            $this->user_edit('user/edit', $data);
      }

      public function update()
      {
            $this->model->update();
            header('location:' . URL . '/user');
      }

      public function delete($id)
      {
            $this->model->delete($id);
            header('location:' . URL . '/user');
      }

      public function login()
      {
            $this->model->login();
      }

      public function logout()
      {
            $this->model->logout();
      }
}
