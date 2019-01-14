<?php


    foreach ($karyawan as $karyawan):
        echo $karyawan->id_karyawan;
        echo $karyawan->nama_karyawan;
        echo $karyawan->address;
        echo $karyawan->telp;
        echo "<br />";
    endforeach;