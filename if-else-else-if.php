<?php

$umur = 16;

// if = satu kondisi
if($umur > 17)
{
    echo "Sudah Dewasa";
}

// if, else = Dua Kondisi
if ($umur > 17)
{
    echo "<br> Sudah Dewasa";
}else{
    echo "<br> Belum Dewasa";
}
//  if,elseif, else
$nilai = 80;

if ($nilai >= 90)
{
    echo "<br> Nilai A";
}elseif($nilai >= 80)
{
    echo "<br> Nilai B";
}elseif($nilai >= 70)
{
    echo "<br> Nilai C";
}elseif($nilai >= 59)
{
    echo "<br> Nilai D";
}
?>