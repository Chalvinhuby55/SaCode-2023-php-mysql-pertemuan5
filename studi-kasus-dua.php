<?php

$data = [
    [
        "nama" => "Agus",
        "alamat" => "P4",
        "jk" => "L"
    ],
    [
        "nama" => "Axel",
        "alamat" => "Sentani",
        "jk" => "L"
    ],
    [
        "nama" => "Fatty",
        "alamat" => "P3",
        "jk" => "p"
    ]
];

foreach($data as $peserta)
{
    echo $peserta['nama']."<br>";
    echo $peserta['alamat']."<br>";
    if($peserta['jk'] === 'P'){
        $jk = 'Perempuan';
    }else{
        $jk = "Laki-laki";
    }
    echo $jk."<br>";
    echo "<br> <br>";
}