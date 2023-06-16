<?php
    class User {
        private $maTaiKhoan;
        private $taiKhoan;
        private $matKhau;
        private $email;
        private $phanQuyen;
        private $trangThai;
        private $hoTen;
        private $ngaySinh;
        private $cccd;
        private $sdt;
        private $diaChi;
        private $gioiTinh;
        private $avatar;
        
        public function getMaTaiKhoan() {
            return $this->maTaiKhoan;
        }
        
        public function setMaTaiKhoan($maTaiKhoan) {
            $this->maTaiKhoan = $maTaiKhoan;
        }
        
        public function getTaiKhoan() {
            return $this->taiKhoan;
        }
        
        public function setTaiKhoan($taiKhoan) {
            $this->taiKhoan = $taiKhoan;
        }
        
        public function getMatKhau() {
            return $this->matKhau;
        }
        
        public function setMatKhau($matKhau) {
            $this->matKhau = $matKhau;
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function getPhanQuyen() {
            return $this->phanQuyen;
        }
        
        public function setPhanQuyen($phanQuyen) {
            $this->phanQuyen = $phanQuyen;
        }
        
        public function getTrangThai() {
            return $this->trangThai;
        }
        
        public function setTrangThai($trangThai) {
            $this->trangThai = $trangThai;
        }
        
        public function getHoTen() {
            return $this->hoTen;
        }
        
        public function setHoTen($hoTen) {
            $this->hoTen = $hoTen;
        }
        
        public function getNgaySinh() {
            return $this->ngaySinh;
        }
        
        public function setNgaySinh($ngaySinh) {
            $this->ngaySinh = $ngaySinh;
        }
        
        public function getCccd() {
            return $this->cccd;
        }
        
        public function setCccd($cccd) {
            $this->cccd = $cccd;
        }
        
        public function getSdt() {
            return $this->sdt;
        }
        
        public function setSdt($sdt) {
            $this->sdt = $sdt;
        }
        
        public function getDiaChi() {
            return $this->diaChi;
        }
        
        public function setDiaChi($diaChi) {
            $this->diaChi = $diaChi;
        }
        
        public function getGioiTinh() {
            return $this->gioiTinh;
        }
        
        public function setGioiTinh($gioiTinh) {
            $this->gioiTinh = $gioiTinh;
        }
        
        public function getAvatar() {
            return $this->avatar;
        }
        
        public function setAvatar($avatar) {
            $this->avatar = $avatar;
        }

         
    }
?>