<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body style="background-color: azure !important;">

    <div class="ui card centered align" style="top: 40px">
        <div class="content">
            <label class="ui header">Form Kontak</label>
        </div>
        <div class="content">
            {{ html()->form('POST', route('contact.store'))->class(['ui form'])->open() }}

            <div class="field required">
                <label>Nama</label>
                {{ html()->input('text', 'nama', old('nama'))->placeholder('Your name') }}
                @error('nama')
                    <span style="color:red">Mohon mengisi field nama</span>
                @enderror
            </div>
            <div class="field required">
                <label>Email</label>
                {{ html()->email('email', old('email'))->placeholder('Your e-mail address') }}
                @error('email')
                <span style="color:red">Mohon mengisi field email</span>
                @enderror
            </div>
            <div class="field required">
                <label>Judul</label>
                {{ html()->input('text', 'judul', old('judul'))->placeholder('Title') }}
                @error('judul')
                <span style="color:red">Mohon mengisi field judul</span>
                @enderror
            </div>
            <div class="field required">
                <label>Pesan</label>
                {{ html()->input('text', 'pesan', old('pesan'))->placeholder('Message') }}
                @error('pesan')
                <span style="color:red">Mohon mengisi field pesan</span>
                @enderror
            </div>


            {{ html()->submit('Submit')->class('ui green button') }}

            {{ html()->form()->close() }}
        </div>
    <div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js" type="text/javascript"></script>
</html>
