<?php
class Topping extends DBConnect {
    protected $id;
    protected $time;
    protected $ref;
    protected $qty_req;
    protected $tank_asal;

    public function __construct(){
        parent::connect();
    }
    public function setTopping() {

    }
    public function getAll(){
        $sth = $this->DBH->prepare('SELECT tb_topp.*, tb_ref.kode AS kode FROM tb_topp
        INNER JOIN tb_ref ON tb_topp.ref = tb_ref.id
         GROUP BY tb_topp.id');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function get4(){
        $sth = $this->DBH->prepare('SELECT id,time,ref,qty_req,tank_asal FROM tb_topp ORDER BY id DESC');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function getTopActive(){
        $sth = $this->DBH->prepare('SELECT id FROM tb_tank WHERE status="201"');
        $sth->execute();

        $dataTopActive = $sth->fetchAll();
        return $dataTopActive;
    }
    public function getTopLain(){
        $sth = $this->DBH->prepare('SELECT id FROM tb_tank WHERE status="101"');
        $sth->execute();

        $dataTopLain = $sth->fetchAll();
        return $dataTopLain;
    }
    public function getLosActive(){
        $sth = $this->DBH->prepare('SELECT id FROM tb_tank WHERE status="202"');
        $sth->execute();

        $dataLosActive = $sth->fetchAll();
        return $dataLosActive;
    }
    public function getLosLain(){
        $sth = $this->DBH->prepare('SELECT id FROM tb_tank WHERE status="102"');
        $sth->execute();

        $dataLosLain = $sth->fetchAll();
        return $dataLosLain;
    }

    public function getTotalTop() { //total top this day
        $sth = $this->DBH->prepare('SELECT tb_topp.id, DATE_FORMAT(tb_topp.time, "%Y-%m-%d"), SUM(tb_topp.qty_req) AS totaltop 
        FROM tb_topp 
        WHERE DATE(TIME) = CURDATE()');
        $sth->execute();

        $dataTotalTop = $sth->fetchAll();
        return $dataTotalTop;
    }
    public function getTotalLos() {
        $sth = $this->DBH->prepare('SELECT SUM(qty_req) AS totallos
        FROM tb_los');
        $sth->execute();

        $dataTotalLos= $sth->fetchAll();
        return $dataTotalLos;
    }
    public function get($id) {
        $sth = $this->DBH->prepare('SELECT id,time,ref,qty_req,tank_asal Form tb_topp');
        $sth->execute(array($id));

        $data = $sth->fetchAll();
        return $data;
    }
}