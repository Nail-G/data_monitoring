@extends('layout.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"
            href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css') }}">

        <title>Document</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .profile-container {
                max-width: 600px;
                margin-top: 20%;
                margin-left: 37%;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .profile-picture {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin-bottom: 20px;
            }

            .profile-name {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .profile-description {
                font-size: 16px;
                color: #888;
                margin-bottom: 20px;
            }

            .profile-contact {
                font-size: 16px;
            }

            .profile-contact-item {
                margin-bottom: 10px;
            }

            .profile-contact-item .label {
                font-weight: bold;
            }
        </style>
    </head>

    <body>

        <div class="profile-container">
            {{-- @foreach ($profileadmin as $data) --}}

            <div class="profile-contact">
                <h1 class="profile-name"> {{ Auth::user()->name }}</h1>
                <p class="profile-description">{{ Auth::user()->role }}</p>
                <div class="profile-contact-item">
                    <span>Nama:</span> {{ Auth::user()->name }}
                </div>
                <div class="profile-contact-item">
                    <span>Email:</span> {{ Auth::user()->email }}
                </div>
            </div>
            {{-- @endforeach --}}
        </div>


    </body>

    </html>
@endsection
