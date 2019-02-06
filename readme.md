<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://drive.google.com/file/d/1AmexPu9OEQEz1cHfvVOHHIx3-47mlJm/view?usp=sharing"><img alt="Tutorial Laravel 1"></a>
<a href="https://drive.google.com/file/d/1WpHAgdv4zVrgAnV1u64Mbl31C65LyVC/view?usp=sharing"><img alt="Tutorial Laravel 2"></a>
<a href="https://drive.google.com/file/d/1wLjs3QIaYI3o9mIikLBJOluA_7QTm6rQ/view
?usp=sharing"><img alt="Tutorial Login"></a>
<a href="https://drive.google.com/file/d/1-
qb34ta4QJFzmekmiUAK84CzW6Cy7IXR/view?usp=sharing"><img alt="Tutorial Upload"></a>
</p>

## Tutorial Laravel 1

Tutorial Laravel 1 menjelaskan bagaimana langkah awal untuk kita membuat project pada laravel, untuk file nya bisa di klik tombol di atas untuk mengikuti step per step nya.<br>
Disarankan untuk memakai **PHP 7** agar tidak terjadi error atau project anda tidak akan tampil dan untuk mendownload PHP  bisa di link berikut ini [Download XAMPP](https://www.apachefriends.org/download.html)
kembali lagi ke tutorial 1, untuk mengkonfigurasi env pada laptop atau komputer anda jika tidak mempunyai file2 laravel bisa di unduh dengan composer, link berikut ini [Download Composser](https://getcomposer.org/Composer-Setup.exe)<br>
dan jika semua sudah di configurasi maka sudah dapat di kerjakan project anda dari membuat template hingga isi tabel.
**Langkah Langkah :**
- klik tombol view pada resourced dengan membuat folder template dan kelas
- didalam folder template membuat file footer.blade.php dan header.blade.php dan dalam folder kelas membuat file index.blade.php
- untuk template agar lebih menarik silakan klik berikut ini [AdminLTE](
https://codeload.github.com/almasaeed2010/AdminLTE/zip/v2.3.11)
- kemudian isi file tersebut sebagai berikut : 
  1. header.blade.php Line 1 s/d 391
  2. index.blade.php Line 392 s.d 432
  3. footer.blade.php Line 433 s/d 654 
- kemudian membuka cmd
- pastikan env kalian sudah diconfigurasi jika tidak akan mempengaruhi untuk membuat tabel migration
- pada cmd membuat Controller
- jika sudah pastikan pada Route/web.php dikonfigurasi juga agar hasil dari controller dapat terpanggil
- seperti langkah diatas jika ingin membuat table buka cmd dan ketik untuk migration
- jika sudah ketik php artisan migrate agar data table bisa di migrate
- kemudian untuk agar tersambung ke database ketik kembali di cmd untuk Seeder
- kemudian membuat model Kelas pada cmd
- kemudian jika sudah membuat model buka di App/Kelas untuk menyambungkan hasil database
**Langkah membuat CUD**
- jika sudah mengikuti langkah diatas maka kita dapat membuat Create, Update, dan Delete
- pada Controller dipastikan untuk membuat fungsi create, update, dan delete
- kemudian konfigurasi di Route\web.php
- kemudian membuat validasi agar terlihat notifikasi dimana data yang di tambah, diubah, dan dihapus
- untuk Update dan Delete sama seperti pada Create 



## Tutorial Laravel 2

Pada Laravel 2 ini tidak berbeda jauh dengan Laravel 1 dan *hanya* meneruskan saja bagaimana cara kita bisa join dengan tabel kelas agar dapat terhubung, disini memang terdapat banyak kendala tetapi yang dapat kita lakukan dengan sabar, disini sama seperti tutorial laravel 1 dengan mengawali membuat tabel migration kemudian di migrat, dan kemudian di Seed agar tabel tersebut langsung ada pada database, di Route kemudian web.php nya di isi agar hasil dari controller dapat tersambungkan. kemudian memodifikasi pada folder view agar tampilan tersebut lebih terlihat rapi dan userfrindly.

## Tutorial Login

Pada tutorial login disini seperti biasa langkah langkah nya
- Membuat tabel migration pada cmd
- Membuat Mode User pada cmd
- kemudain jika sudah pada CMD di Seeder agar tersambung pada database
- Memodifikasi Login Controller agar semua tersambung
- Membuat Tombol Logout
- Membuat Authentikasi agar menampilkan notifikasi untu masuk


## Tutorial Upload 

Langkah Terakhir yaitu membuat Upload Foto agar pada table siswa disini menampilkan orang2 yang terdaftar
langkanya yaitu :
- Mengkonfigurasi Storage 
- membuat form upload pada form.blade.php pada folder siswa
- membuat field foto pada database agar tersambung
- mengedit Model Siswa agar dapat tersambung
- Mengedit Controller 
- mengedit tampilan index siswa agar terlihat foto yang diupload

Untuk Langkah langkah ini mungkin sampai disini yang saya jelaskan lebih lanjut silakan untuk mendownload hasil file yang sudah di unggah, penulis berharap agar tidak hanya sampai disini untuk belajar laravel silakan banyak website yang menjelaskan lebih tentang laravel agar semakin mengerti. 



