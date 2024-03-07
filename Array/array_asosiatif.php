<?php

function kendaraan()
{
    $mobil = array(
        [
            "merk" => "Toyota",
            "jenis" => "Supra",
            "pemilik" => "Okta",
            "daerah" => "gresik",
            "tahun" => 2002
        ],
        [
            "merk" => "BMW",
            "jenis" => "E36",
            "pemilik" => "Sora",
            "daerah" => "gresik",
            "tahun" => 1997
        ],
    );

    echo $mobil[1]["daerah"];
}

kendaraan();

echo "<br>";

function senjata()
{
    $pedang = array(
        [
            "merk" => "Samurai",
            "jenis" => "T100",
            "pemilik" => "Okta",
            "daerah" => "gresik",
            "tahun" => 1979
        ],
        [
            "merk" => "Katana",
            "jenis" => "E36",
            "pemilik" => "Sora",
            "daerah" => "gresik",
            "tahun" => 1944
        ],
    );

    echo $pedang[0]["merk"];
}

senjata();
