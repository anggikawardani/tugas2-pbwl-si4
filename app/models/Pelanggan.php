<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_pelanggan JOIN tb_golongan ON tb_pelanggan.pel_id_gol=tb_golongan.gol_id 
                        JOIN tb_users ON tb_pelanggan.pel_id_user=tb_users.user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }
      
      public function getGol()
      {
            $sql = "SELECT * FROM tb_golongan ORDER BY gol_id ASC";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch())
            {
                  $data[] = $rows;
            }
            return $data;

      }

      public function getUser()
      {
            $sql = "SELECT * FROM tb_users ORDER BY user_id ASC";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch())
            {
                  $data[] = $rows;
            }
            return $data;

      }


      public function store()
      {
            if(isset($_POST['btn_tambah'])) {
            $nama = $_POST['pel_nama'];
            $gol = $_POST['pel_gol'];
            $no = $_POST['pel_no'];
            $alamat = $_POST['pel_alamat'];
            $hp = $_POST['pel_hp'];
            $ktp = $_POST['pel_ktp'];
            $seri = $_POST['pel_seri'];
            $meteran = $_POST['pel_meteran'];
            $aktif = $_POST['pel_aktif'];
            $user = $_POST['pel_user'];

            $sql = "INSERT INTO tb_pelanggan (pel_id_gol, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_seri, pel_meteran, pel_aktif, pel_id_user)
            VALUES (:pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, :pel_id_user)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pel_id_gol", $gol);
            $stmt->bindParam(":pel_nama", $nama);
            $stmt->bindParam(":pel_no", $no);
            $stmt->bindParam(":pel_alamat", $alamat);
            $stmt->bindParam(":pel_hp", $hp);
            $stmt->bindParam(":pel_ktp", $ktp);
            $stmt->bindParam(":pel_seri", $seri);
            $stmt->bindParam(":pel_meteran", $meteran);
            $stmt->bindParam(":pel_aktif", $aktif);
            $stmt->bindParam(":pel_id_user", $user);

            $stmt->execute();

            return true;
            }
      }
      public function edit($id)
      {
            $sql = "SELECT * FROM tb_pelanggan JOIN tb_golongan ON tb_pelanggan.pel_id_gol=tb_golongan.gol_id JOIN tb_users ON tb_pelanggan.pel_id_user=tb_users.user_id WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
      }

      public function update()
      {
            if(isset($_POST['btn_update'])) {
            $id = $_POST['pel_id'];
            $nama = $_POST['pel_nama'];
            $gol = $_POST['pel_gol'];
            $no = $_POST['pel_no'];
            $alamat = $_POST['pel_alamat'];
            $hp = $_POST['pel_hp'];
            $ktp = $_POST['pel_ktp'];
            $seri = $_POST['pel_seri'];
            $meteran = $_POST['pel_meteran'];
            $aktif = $_POST['pel_aktif'];
            $user = $_POST['pel_user'];

            $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user WHERE pel_id=:pel_id";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->bindParam(":pel_id_gol", $gol);
            $stmt->bindParam(":pel_nama", $nama);
            $stmt->bindParam(":pel_no", $no);
            $stmt->bindParam(":pel_alamat", $alamat);
            $stmt->bindParam(":pel_hp", $hp);
            $stmt->bindParam(":pel_ktp", $ktp);
            $stmt->bindParam(":pel_seri", $seri);
            $stmt->bindParam(":pel_meteran", $meteran);
            $stmt->bindParam(":pel_aktif", $aktif);
            $stmt->bindParam(":pel_id_user", $user);

            $stmt->execute();
            }
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);

            $stmt->execute();
      }

      public function resetID()
      {
            $sql = "ALTER TABLE tb_pelanggan AUTO_INCREMENT=0";
            $stmt = $this->db->prepare($sql);

            $stmt->execute();
      }
}