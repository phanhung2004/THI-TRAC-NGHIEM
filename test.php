<?php
$bodethi = [
    [
        'id'=>1,
        'noidung'=> 'abc?',
        "Caudung" => 3,
        'dapan' => [
            1 =>'Đáp án 1'  ,
            2 => "Đáp án 2",
            3 => "Đáp án 3"  ,
            4 => "Đáp án 4"
            
        ]
    ],

];

foreach($bodethi as $index=>$cauhoi){
    $bodethi[$index]['dapan'] =  [
        1 =>'Đáp án 1'  ,
        2 => "Đáp án 2",
        3 => "Đáp án 3"  ,
        4 => "Đáp án 4"
        
    ];
}
//Chuyển sang chuỗi JSON
$bodethi = json_encode($bodethi);

var_dump($bodethi);


//chuyển lại bộ đề thi sang array
$bodethi = json_decode($bodethi, false);
var_dump($bodethi);
//Chuyển sang chuỗi JSON
$bodethi = json_encode($bodethi);