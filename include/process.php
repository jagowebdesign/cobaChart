<?php
class Process extends Conn{

    public $year = 2017;
    public function show(){
        $sql ="SELECT * FROM selling";
		$stmt=$this->koneksi->prepare($sql);
		$stmt->execute();
		return $stmt;
    }
    public function getBulan(){
        $sql = "SELECT bulan FROM selling WHERE tahun='$this->year' order by id asc";
        $stmt=$this->koneksi->prepare($sql);
		$stmt->execute();
        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_COLUMN)) {
            $data[] = $row;
        }
        // // echo @$data['bulan'];
        
        return '"' . implode('", "', $data) . '"';
        // return $data;
        
    }
    public function getEarn(){
        $sql = "SELECT hasil FROM selling WHERE tahun='$this->year' order by id asc";
        $stmt=$this->koneksi->prepare($sql);
		$stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_COLUMN)) {
            $data[] = $row;
        }
        
        // echo '"' . $data[1] . '",';
        return '"' . implode('", "', $data) . '"';
        // return $data;
    }
    public function getYear(){
        $sql = "SELECT tahun FROM selling";
        $stmt=$this->koneksi->prepare($sql);
		$stmt->execute();
        $stmt->fetch(PDO::FETCH_ASSOC);
        return $stmt;
        
    }
}