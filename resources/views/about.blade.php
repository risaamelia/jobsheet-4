@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')

    <div class="container my-5">
        <h1 class="text-center mb-4">Tentang Saya</h1>
        <div class="mb-5">
            <h2 class="tect-center">Pribadi Saya</h2>
            <p> 
Hai! Aku Risa Amelia, tinggal di Semarang dan saat ini bersekolah di SMK N 1 Sayung, jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Sebagai anak pertama, aku selalu berusaha menjadi kebanggaan keluarga dan terus belajar untuk meraih impian.  
Aku punya dua hobi utama: traveling dan kulineran. Buat aku, setiap perjalanan adalah petualangan baru, dan setiap makanan punya cerita tersendiri. Aku suka menjelajahi tempat-tempat baru, mencicipi berbagai kuliner khas, dan mengabadikan momen-momen berharga dalam perjalanan.  
Motivasi hidupku: "Jangan takut mencoba, karena setiap langkah kecil hari ini adalah awal dari pencapaian besar di masa depan."* Aku percaya bahwa dengan usaha dan tekad yang kuat, tidak ada yang tidak mungkin.  
Terima kasih sudah mampir, salam kenal! 😊✨  

            </p>
        </div>
        <div class="mb-5">
            <h2 class="text-center">Hubungi Saya</h2>
            <p class="text-center">
                jika anda penasaran dengan saya, tekan untuk hubungi saya :
            </p>
            <div class="text-center">
                <a href="{{ route('contact')}}" class="btn btn-primary btn-lg">hubungi saya</a>
            </div>
        </div>
    </div>
    @endsection