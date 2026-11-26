<?php
define('DEBUG_PBO', true); // Mengaktifkan log destructor
require 'Mahasiswa.php';

// 1. Uji Instansiasi & Polimorfisme
$m = new MahasiswaReguler('003', 'Budi', 'TI');
$b = new MahasiswaBeasiswa('004', 'Citra', 'SI');

// 2. Uji Overloading (__call)
echo $m->tampil() . '<br>';            // Output: 003 - Budi
echo $m->tampil('lengkap') . '<br>';   // Output: 003 - Budi - TI

// 3. Uji Encapsulation (Setter) & Polimorfisme UKT
$m->setNama('Budi Santoso');
echo $m->getNama() . ' - UKT: ' . tampilUKT($m) . '<br>';
echo $b->getNama() . ' - UKT: ' . tampilUKT($b) . '<br>';

// 4. Uji Destructor (mencatat pesan ke php_error.log)
unset($m, $b);
echo 'Selesai uji OOP. Cek php_error.log untuk melihat log destructor.';