<?php

    include_once 'DB.php';
    
    class Order {
 
        public function orderget($idorders){
            return DB::Select("SELECT basket.id, goods.goodname, basket.counts, goods.price FROM basket INNER JOIN goods ON  basket.idgoods = goods.id_goods WHERE basket.idorders = :idorders", ['idorders' => $idorders] );
        }
        
        public function orderclose($iduser, $idorder, $orderuser, $orderadress ){
            $statusorder = '1';
            DB::Update('UPDATE orders SET statusorder = :statusorder, orderuser = :orderuser, orderadress = :orderadress WHERE (id = :id)  and (idusers = :idusers)',['statusorder' => $statusorder, 'orderuser' => $orderuser, 'orderadress' => $orderadress,'id' => $idorder, 'idusers' => $iduser]);
            $idorder = null;
            DB::Update('UPDATE users SET lastidorder = :lastidorder WHERE (id = :id)',['lastidorder' => $idorder, 'id' => $iduser]);
        }

        public function orderview(){
        	return DB::Select('SELECT orders.id, users.name, users.login, orders.statusorder, orders.orderuser, orders.orderadress FROM orders INNER JOIN users ON  orders.idusers = users.id WHERE (orders.statusorder >= 1)');
        }
        		
		public function chorderstatus($idorder){
        	if(DB::Update('UPDATE orders SET statusorder = "2" WHERE (id = :id)', ['id' => $idorder])){
                echo "Доставлен";
            }
    	}
}

