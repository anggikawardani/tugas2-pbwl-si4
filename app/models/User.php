<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }

      
      public function store()
      {
            if(isset($_POST['btn_tambah'])) {
                  $email = $_POST['user_email'];
                  $password = $_POST['user_password'];
                  $nama = $_POST['user_nama'];
                  $alamat = $_POST['user_alamat'];
                  $hp = $_POST['user_hp'];
                  $pos = $_POST['user_pos'];
                  $role = $_POST['user_role'];
                  $aktif = $_POST['user_aktif'];

                  $sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_alamat, user_hp, user_pos, user_role, user_aktif)  
                          VALUES (:user_email, :user_password, :user_nama, :user_alamat, :user_hp, :user_pos, :user_role, :user_aktif)";

                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":user_email", $email);
                  $stmt->bindParam(":user_password", $password);
                  $stmt->bindParam(":user_nama", $nama);
                  $stmt->bindParam(":user_alamat", $alamat);
                  $stmt->bindParam(":user_hp", $hp);
                  $stmt->bindParam(":user_pos", $pos);
                  $stmt->bindParam(":user_role", $role);
                  $stmt->bindParam(":user_aktif", $aktif);
      
                  $stmt->execute();
      
                  return true;
            }
           
      }

      public function edit($id)
      {
            $sql = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
      }

      public function update()
      {
            if(isset($_POST['btn_update'])) {

                  $id = $_POST['user_id'];
                  $email = $_POST['user_email'];
                  $password = $_POST['user_password'];
                  $nama = $_POST['user_nama'];
                  $alamat = $_POST['user_alamat'];
                  $hp = $_POST['user_hp'];
                  $pos = $_POST['user_pos'];
                  $role = $_POST['user_role'];
                  $aktif = $_POST['user_aktif'];

                  $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, user_aktif=:user_aktif WHERE user_id=:user_id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":user_id", $id);
                  $stmt->bindParam(":user_email", $email);
                  $stmt->bindParam(":user_password", $password);
                  $stmt->bindParam(":user_nama", $nama);
                  $stmt->bindParam(":user_alamat", $alamat);
                  $stmt->bindParam(":user_hp", $hp);
                  $stmt->bindParam(":user_pos", $pos);
                  $stmt->bindParam(":user_role", $role);
                  $stmt->bindParam(":user_aktif", $aktif);
      
                  $stmt->execute();
      
                  return true;
            }
      }

      public function delete($id)
      {

                  $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":user_id", $id);

                  $stmt->execute();
      }

      public function login()
      {
            if(isset($_POST['btn_masuk'])){
                  $email = $_POST['email'];
                  $password = $_POST['password'];
          
                  $sql = "SELECT * FROM tb_users WHERE user_email= :user_email AND user_password= :user_password";
          
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":user_email", $email);
                  $stmt->bindParam(":user_password", $password);
                  $stmt->execute();
              
                  $row = $stmt->rowCount();
      
          
                  if($row == 1){
                        $_SESSION['email'] = $email;
                        header('location:' .URL. '/dashboard');
                  }else{
                        $_SESSION['error'] = 'Email atau Password Salah !';
                        header ('Location: '.URL);
                  }
              }
      }

      public function logout()
      {
            session_destroy();
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            
            echo 'Anda telah keluar';
            header('Refresh: 2; URL = '.URL);
      }

      public function resetID()
      {
            $sql = "ALTER TABLE tb_users AUTO_INCREMENT=0";
            $stmt = $this->db->prepare($sql);

            $stmt->execute();
      }

}
