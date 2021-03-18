<?php

    include_once 'DB.php';
    
    class Admin {

        public function checkuseradmin($iduser){
            return DB::GetRow('SELECT users.roleadmin FROM users WHERE id = :id', ['id' => $iduser]);
        }

        public function addgooddb($goodname, $price, $idcategory, $goodimage){
            return DB::Insert('INSERT INTO goods (`goodname`, `price`, `goodstatus`, `id_category`, `goodimage`)  VALUES (:goodname, :price,:goodstatus , :id_category, :goodimage)', 
                ['goodname' => $goodname, ':price' => $price, ':goodstatus' => '0', 'id_category' => $idcategory, ':goodimage' => $goodimage]);

        }

        public function goodimg($idgood, $goodimage){
            DB::Update('UPDATE goods SET goodimage = :goodimage WHERE (id_goods = :id_goods)',['goodimage' => $goodimage, 'id_goods' => $idgood]);
        }
}

