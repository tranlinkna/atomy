<?php
$installer = $this;

$connection = $installer->getConnection();

$regionTable = $installer->getTable('directory/country_region');

$regionsToIns = array(
    array('VN', 'VN-HN',    'TP.Hà Nội'),
    array('VN', 'VN-HCM',   'TP.Hồ Chí Minh'),
    array('VN', 'VN-AG',    'An Giang'),
    array('VN', 'VN-BR-VT', 'Bà Rịa-Vũng Tàu'),
    array('VN', 'VN-BL',    'Bạc Liêu'),
    array('VN', 'VN-BK',    'Bắc Kạn'),
    array('VN', 'VN-BG',    'Bắc Giang'),
    array('VN', 'VN-BN',    'Bắc Ninh'),
    array('VN', 'VN-BTR',   'Bến Tre'),
    array('VN', 'VN-BD',    'Bình Dương'),
    array('VN', 'VN-BD-D',  'Bình Định'),
    array('VN', 'VN-BP',    'Bình Phước'),
    array('VN', 'VN-BTH',   'Bình Thuận'),
    array('VN', 'VN-CM',    'Cà Mau'),
    array('VN', 'VN-CB',    'Cao Bằng'),
    array('VN', 'VN-CT',    'Cần Thơ'),
    array('VN', 'VN-DN',    'Đà Nẵng'),
    array('VN', 'VN-DL',    'Đắk Lắk'),
    array('VN', 'VN-DNO',   'Đắk Nông'),
    array('VN', 'VN-DB',    'Điện Biên'),
    array('VN', 'VN-DNA',   'Đồng Nai'),
    array('VN', 'VN-DTH',   'Đồng Tháp'),
    array('VN', 'VN-GL',    'Gia Lai'),
    array('VN', 'VN-HG',    'Hà Giang'),
    array('VN', 'VN-HNA',   'Hà Nam'),
    array('VN', 'VN-HT',    'Hà Tĩnh'),
    array('VN', 'VN-HD',    'Hải Dương'),
    array('VN', 'VN-HP',    'Hải Phòng'),
    array('VN', 'VN-HGA',   'Hậu Giang'),
    array('VN', 'VN-HB',    'Hòa Bình'),
    array('VN', 'VN-HY',    'Hưng Yên'),
    array('VN', 'VN-KH',    'Khánh Hòa'),
    array('VN', 'VN-KG',    'Kiên Giang'),
    array('VN', 'VN-KT',    'Kon Tum'),
    array('VN', 'VN-LC',    'Lai Châu'),
    array('VN', 'VN-LD',    'Lâm Đồng'),
    array('VN', 'VN-LS',    'Lạng Sơn'),
    array('VN','VN-LC',     'Lào Cai'),
    array('VN', 'VN-LA',    'Long An'),
    array('VN', 'VN-ND',    'Nam Định'),
    array('VN', 'VN-NGA',   'Nghệ An'),
    array('VN', 'VN-NB',    'Ninh Bình'),
    array('VN', 'VN-NTH',   'Ninh Thuận'),
    array('VN', 'VN-PHTH',  'Phú Thọ'),
    array('VN', 'VN-PHY',   'Phú Yên'),
    array('VN', 'VN-QB',    'Quảng Bình'),
    array('VN', 'VN-QN',    'Quảng Nam'),
    array('VN', 'VN-QNG',   'Quảng Ngãi'),
    array('VN', 'VN-QNI',   'Quảng Ninh'),
    array('VN', 'VN-QTR',   'Quảng Trị'),
    array('VN', 'VN-ST',    'Sóc Trăng'),
    array('VN', 'VN-SL',    'Sơn La'),
    array('VN', 'VN-TN',    'Tây Ninh'),
    array('VN', 'VN-THB',   'Thái Bình'),
    array('VN', 'VN-THNG',  'Thái Nguyên'),
    array('VN', 'VN-THH',   'Thanh Hóa'),
    array('VN', 'VN-TTH',   'Thừa Thiên Huế'),
    array('VN', 'VN-TG',    'Tiền Gianǵ'),
    array('VN', 'VN-TRV',   'Trà Vinh'),
    array('VN', 'VN-TQ',    'Tuyên Quang'),
    array('VN', 'VN-VL',    'Vĩnh Long'),
    array('VN', 'VN-VP',    'Vĩnh Phúc'),
    array('VN', 'VN-YB',    'Yên Bái'),
);

foreach ($regionsToIns as $row) {
    if (!($connection->fetchOne("SELECT 1 FROM `{$regionTable}` WHERE `country_id` = :country_id && `code` = :code", array('country_id' => $row[0], 'code' => $row[1])))) {
        $connection->insert($regionTable, array(
            'country_id' => $row[0],
            'code' => $row[1],
            'default_name' => $row[2]
        ));
    }
}
