<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Eka Septi Prasetyana","23.240.0054","3P41", "Teknik Informatika", 4.00, "Tulis, Batang");

    $mahasiswa1->nama = "Eka Septi Prasetyana";
    $mahasiswa1->nim = "23.240.0054";
    $mahasiswa1->kelas = "3P41";
    $mahasiswa1->jurusan = "Teknik Informatika";
    $mahasiswa1->ipk = 4.00;
    $mahasiswa1->alamat = "Tulis, Batang"; 

    echo "Nama : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "Kelas : $mahasiswa1->kelas <br>";
    echo "Jurusan : $mahasiswa1->jurusan <br>";
    echo "IPK : $mahasiswa1->ipk <br>";
    echo "Alamat : $mahasiswa1->alamat <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);

    echo "<br>";
    $mahasiswa2 = new mahasiswa("Jake","23.240.0055","3P41", "Teknik Informatika", 3.90, "Pekalongan");

    $mahasiswa2->nama = "Jake";
    $mahasiswa2->nim = "23.240.0055";
    $mahasiswa2->kelas = "3P41";
    $mahasiswa2->jurusan = "Teknik Informatika";
    $mahasiswa2->ipk = 3.90;
    $mahasiswa2->alamat = "Pekalongan"; 
    

    echo "NAMA : $mahasiswa2->nama <br>";
    echo "NIM : $mahasiswa2->nim <br>";
    echo "KELAS : $mahasiswa2->kelas <br>";
    echo "Jurusan : $mahasiswa2->jurusan <br>";
    echo "IPK : $mahasiswa2->ipk <br>";
    echo "Alamat : $mahasiswa2->alamat <br>";
  
    echo $mahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa2);
?>