@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Profil Pengguna</h1>
        </div>
        <div class="card-body">
            <img src="{{ asset($profile['profile_picture']) }}" alt="profile picture" width="150">
            <h3>{{ $profile['name'] }}</h3>
            <p>Email: {{ $profile['email'] }}</p>
            <p>Bio: {{ $profile['bio'] }}</p>

            @if(!empty($profile['skills']) && count($profile['skills']) > 0)
                <h5>Skills:</h5>
                <ul>
                    @foreach($profile['skills'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <p>Tidak ada skill yang ditampilkan</p>
            @endif
        </div>
    </div>
@endsection
