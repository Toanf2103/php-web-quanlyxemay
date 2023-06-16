<?php
    class Xe {
        private $maXe;
        private $tenXe;
        private $hangXe;
        private $trangThai;
        private $bienSoXe;
        private $loaiXe;
        private $giaThue;
        private $moTa;
        private $hinhAnh;
        private $lich;
        public function getMaXe() {
            return $this->maXe;
        }
        
        public function setMaXe($maXe) {
            $this->maXe = $maXe;
        }
        
        public function getTenXe() {
            return $this->tenXe;
        }
        
        public function setTenXe($tenXe) {
            $this->tenXe = $tenXe;
        }
        
        public function getHangXe() {
            return $this->hangXe;
        }
        
        public function setHangXe($hangXe) {
            $this->hangXe = $hangXe;
        }
        
        public function getTrangThai() {
            return $this->trangThai;
        }
        
        public function setTrangThai($trangThai) {
            $this->trangThai = $trangThai;
        }
        
        public function getBienSoXe() {
            return $this->bienSoXe;
        }
        
        public function setBienSoXe($bienSoXe) {
            $this->bienSoXe = $bienSoXe;
        }
        
        public function getLoaiXe() {
            return $this->loaiXe;
        }
        
        public function setLoaiXe($loaiXe) {
            $this->loaiXe = $loaiXe;
        }
        
        public function getGiaThue() {
            return $this->giaThue;
        }
        public function getGiaThueString() {
            return number_format($this->giaThue, 0, ',', '.').'đ' ;
        }
        
        public function setGiaThue($giaThue) {
            $this->giaThue = $giaThue;
        }
        
        public function getMoTa() {
            return $this->moTa;
        }
        
        public function setMoTa($moTa) {
            $this->moTa = $moTa;
        }
        
        public function getHinhAnh() {
            return $this->hinhAnh;
        }
        
        public function setHinhAnh($hinhAnh) {
            
            $this->hinhAnh = $hinhAnh;
        }
        public function getLich() {
            return $this->lich;
        }
        
        public function setLich($lich) {
            $this->lich = $lich;
        }

        public function __toString() {
            return $this->maXe ."<br>" .$this->tenXe ."<br>" .$this->trangThai ."<br>" .$this->bienSoXe ."<br>" .$this->loaiXe ."<br>" .$this->giaThue ."<br>" .$this->moTa ."<br>" .$this->hinhAnh[0] ."<br>" .$this->hinhAnh[1] ."<br>";
        }
    }
?>