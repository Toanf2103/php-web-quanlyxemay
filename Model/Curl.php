<?php
    class MyCurl {
        private $ch; // Biến chứa cURL handle
        private $hosting = 'http://localhost:5000/';
        public function __construct() {
            // Khởi tạo cURL handle
            $this->ch = curl_init();
        }

        public function setOption($option, $value) {
            // Thiết lập tùy chọn cho cURL handle
            curl_setopt($this->ch, $option, $value);
        }

        public function setUrl($url) {
            // Thiết lập url
            curl_setopt($this->ch, CURLOPT_URL, $this->hosting.$url);
        }

        public function execute() {
            // Gửi request và lấy kết quả
            $response = curl_exec($this->ch);

            // Kiểm tra lỗi (nếu có)
            if (curl_errno($this->ch)) {
                $error = curl_error($this->ch);
                // Xử lý lỗi tại đây
            }

            // Trả về kết quả
            return $response;
        }

        public function close() {
            // Đóng cURL handle
            curl_close($this->ch);
        }
    }
?>