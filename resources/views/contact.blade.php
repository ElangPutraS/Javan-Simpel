@extends('layout')

@section('body')
    <div class="ui card centered align" style="top: 40px">
        <div class="content">
            <label class="ui header">Form Kontak</label>
        </div>
        <div class="content">
            {{ html()->form('POST', route('contact.store'))->class(['ui form'])->open() }}
<!--            <form action="route" method="" class="ui form">-->
            <div class="field required">
                <label>Kategori</label>
                <select class="ui search dropdown" name="kategori">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Coba">Coba</option>
                </select>
            </div>
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
                <span style="color:red">{{ $errors->first('email') }}</span>
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
    </div>
@endsection
