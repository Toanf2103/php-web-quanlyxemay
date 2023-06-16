<?php
class Order {
    private $maThue;
    private $maKH;
    private $trangThai;
    private $maNVDuyet;
    private $ngayBD;
    private $ngayKT;
    private $ngayDuyet;
    private $ghiChu;
    private $chiTiet;
    private $tongTien;
    private $soNgayThue;

   


    public function getMaThue() {
        return $this->maThue;
    }

    public function setMaThue($maThue) {
        $this->maThue = $maThue;
    }

    public function getMaKH() {
        return $this->maKH;
    }

    public function setMaKH($maKH) {
        $this->maKH = $maKH;
    }

    public function getTrangThai() {
        return $this->trangThai;
    }

    public function setTrangThai($trangThai) {
        $this->trangThai = $trangThai;
    }

    public function getMaNVDuyet() {
        return $this->maNVDuyet;
    }

    public function setMaNVDuyet($maNVDuyet) {
        $this->maNVDuyet = $maNVDuyet;
    }

    public function getNgayBD() {
        return $this->ngayBD;
    }

    public function setNgayBD($ngayBD) {
        $this->ngayBD = $ngayBD;
    }

    public function getNgayKT() {
        return $this->ngayKT;
    }

    public function setNgayKT($ngayKT) {
        $this->ngayKT = $ngayKT;
    }

    public function getNgayDuyet() {
        return $this->ngayDuyet;
    }

    public function setNgayDuyet($ngayDuyet) {
        $this->ngayDuyet = $ngayDuyet;
    }

    public function getGhiChu() {
        return $this->ghiChu;
    }

    public function setGhiChu($ghiChu) {
        $this->ghiChu = $ghiChu;
    }

    public function getChiTiet() {
        return $this->chiTiet;
    }

    public function setChiTiet($chiTiet) {
        $this->chiTiet = $chiTiet;
    }
    public function getTongTien() {
        return $this->tongTien;
    }

    public function setTongTien($tongTien) {
        $this->tongTien = $tongTien;
    }
    public function getTongTienString() {
        return number_format($this->tongTien, 0, ',', '.').'đ' ;
    }

    public function setSoNgayThue($soNgayThue) {
        $this->soNgayThue = $soNgayThue;
    }
    public function getSoNgayThue() {
        return $this->soNgayThue;
    }

    
}

?>