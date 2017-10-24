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
         GROUP BY tb_topp.id DESC');
        $sth->execute();

        $data = $sth->fetchAll();
        return $data;
    }
    public function getAllLoss(){
        $sth = $this->DBH->prepare('SELECT tb_loss.*, tb_ref.kode AS kode FROM tb_loss
        INNER JOIN tb_ref ON tb_loss.ref = tb_ref.id
         GROUP BY tb_loss.id DESC');
        $sth->execute();

        $dataLoss = $sth->fetchAll();
        return $dataLoss;
    }
    public function get4(){
        $sth = $this->DBH->prepare('SELECT tb_topp.*, tb_ref.kode AS refnya FROM tb_topp
        INNER JOIN tb_ref ON tb_topp.ref = tb_ref.id
        GROUP BY tb_topp.id DESC');
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
    public function getTotalTankM(){
        $sth = $this->DBH->prepare('SELECT count(*) as totTankM FROM tb_tank WHERE status="99"');
        $sth->execute();

        $dataTotalTankM = $sth->fetchAll();
        return $dataTotalTankM;
    }
    public function getTotalRefM(){
        $sth = $this->DBH->prepare('SELECT count(*) as totRefM FROM tb_ref WHERE status="0"');
        $sth->execute();

        $dataTotalRefM = $sth->fetchAll();
        return $dataTotalRefM;
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
    public function getTotalLos() { //total top this day
        $sth = $this->DBH->prepare('SELECT tb_loss.id, DATE_FORMAT(tb_loss.time, "%Y-%m-%d"), SUM(tb_loss.qty_req) AS totallos 
        FROM tb_loss 
        WHERE DATE(TIME) = CURDATE()');
        $sth->execute();

        $dataTotalLos = $sth->fetchAll();
        return $dataTotalLos;
    }
   
    public function get($id) {
        $sth = $this->DBH->prepare('SELECT id,time,ref,qty_req,tank_asal Form tb_topp');
        $sth->execute(array($id));

        $data = $sth->fetchAll();
        return $data;
    }
}