<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Pendaftaran Mahasiswa</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 align="center">FORM PENDAFTARAN MAHASISWA STIE-STMIK IBBI</h2>
        <h6 align="center">Bekal Terbaik Menuju Masa Depan Gemilang </h6>
        <form action="{{ isset($data)
                            ?route('regmahasiswa.update',["id" => $data->id])
                            :route('regmahasiswa.simpan') }}" method="POST">
                            @csrf
        <hr>
            <div class="form-groub">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" placeholder="Masukkan Nim Anda" id="nim"
            name="nim" value={{ isset($data)?$data->nim:"" }}>
            </div>
            <div class="form-groub">
            <label for="nama">NAMA MAHASISWA</label>
            <input type="text" class="form-control" placeholder="Nama Mahasiswa" id="nama" name="nama"
            value={{ isset($data)?$data->nama:"" }}>
            </div>
            <div class="form-groub">
            <label for="jeniskelamin">JENIS KELAMIN</label>
            <input type="text" class="form-control" placeholder="Jenis Kelamin" id="jeniskelamin" name="jeniskelamin"
            value={{ isset($data)?$data->jeniskelamin:"" }}>
            </div>
            <div class="form-groub">
            <label for="agama">AGAMA</label>
            <input type="text" class="form-control" placeholder="Agama" id="agama" name="agama"
            value={{ isset($data)?$data->agama:"" }}>
            </div>
            <div class="form-groub">
            <label for="kewarganegaraan">KEWARGANEGARAAN<b>(WNI/WNA)</b></label>
            <input type="text" class="form-control" placeholder="Kewarganegaraan" id="kewarganegaraan" name="kewarganegaraan"
            value={{ isset($data)?$data->kewarganegaraan:"" }}>
            </div>
            <div class="form-groub">
            <label for="jurusan">JURUSAN</label>
            <input type="text" class="form-control" placeholder="Jurusan Anda" id="jurusan" name="jurusan"
            value={{ isset($data)?$data->jurusan:"" }}>
            </div>
            <div class="form-groub">
            <label for="jenjang">JENJANG<b>(S1 STMIK,S1 STIE,D III STIE,D1 STIE)</b></label>
            <input type="text" class="form-control" placeholder="Jenjang" id="jenjang" name="jenjang"
            value={{ isset($data)?$data->jenjang:"" }}>
            </div>
            <div class="form-groub">
            <label for="tahunakademik">TAHUN AKADEMIK</label>
            <input type="text" class="form-control" placeholder="Masukkan Tahun Akademik" id="tahunakademik" name="tahunakademik"
            value={{ isset($data)?$data->tahunakademik:"" }}>
            </div>
            <div class="form-groub">
            <label for="ttl">TEMPAT / TANGGAL LAHIR</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat/Tanggal Lahir" id="ttl" name="ttl"
            value={{ isset($data)?$data->ttl:"" }}>
            </div>
            <div class="form-groub">
            <label for="alamat">ALAMAT</label>
            <input type="text" class="form-control" placeholder="Maukkan Alamat Anda" id="alamat" name="alamat"
            value={{ isset($data)?$data->alamat:"" }}>
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="kota">KOTA</label>
                <input type="text" class="form-control" id="kota" name="kota"
                value={{ isset($data)?$data->kota:"" }}>
                </div>
                 <div class="col-md-4 mb-3">
                <label for="kodepos">KODE POS</label>
                <input type="text" class="form-control" id="kodepos" name="kodepos"
                value={{ isset($data)?$data->kodepos:"" }}>
                </div>
                <div class="col-md-4 mb-3">
                <label for="telepon">TELEPON</label>
                <input type="text" class="form-control" id="telepon" name="telepon"
                value={{ isset($data)?$data->telepon:"" }}>
            </div>
            </div>
            <div class="form-groub">
            <label for="namasekolah">NAMA SMU/SMK</label>
            <input type="text" class="form-control" placeholder="Nama SMU/SMK" id="namasekolah" name="namasekolah"
            value={{ isset($data)?$data->namasekolah:"" }}>
            </div>
            <div class="form-groub">
            <label for="tahunmasuk">TAHUN MASUK</label>
            <input type="text" class="form-control" placeholder="Masukkan Tahun Masuk" id="tahunmasuk" name="tahunmasuk"
            value={{ isset($data)?$data->tahunmasuk:"" }}>
            </div>
            <div class="form-groub">
            <label for="namaorangtua">NAMA ORANG TUA</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Orang Tua" id="namaorangtua" name="namaorangtua"
            value={{ isset($data)?$data->namaorangtua:"" }}>
            </div>
            <div class="form-groub">
            <label for="alamatorangtua">ALAMAT ORANG TUA</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Orang Tua" id="alamatorangtua" name="alamatorangtua"
            value={{ isset($data)?$data->alamatorangtua:"" }}>
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="kota1">KOTA</label>
                <input type="text" class="form-control" id="kota1" name="kota1"
                value={{ isset($data)?$data->kota1:"" }}>
                </div>
                 <div class="col-md-4 mb-3">
                <label for="kodepos1">KODE POS</label>
                <input type="text" class="form-control" id="kodepos1" name="kodepos1"
                value={{ isset($data)?$data->kodepos1:"" }}>
                </div>
                <div class="col-md-4 mb-3">
                <label for="telepon1">TELEPON</label>
                <input type="text" class="form-control" id="telepon1" name="telepon1"
                value={{ isset($data)?$data->telepon1:"" }}>
            </div>
            </div>
            <div class="form-groub">
            <label for="waktukuliah">WAKTU KULIAH</label>
            <input type="text" class="form-control" placeholder="Waktu Kuliah" id="waktukuliah" name="waktukuliah"
            value={{ isset($data)?$data->waktukuliah:"" }}>
            </div>
            <div class="form-groub">
            <label for="pilihmatkul">PENGAMBILAN MATA KULIAH AGAMA YANG DIINGINKAN<b>(ISLAM,BUDDHA,KRISTEN/KATOLIK,HINDU)</b></label>
            <input type="text" class="form-control" placeholder="Mata Kuliah Agama" id="pilihmatkul" name="pilihmatkul"
            value={{ isset($data)?$data->pilihmatkul:"" }}>
            </div>
            <hr>
            <input type="submit" value="Create" class="btn btn-primary btn-block">
        </form>
        <hr>
    </div>
    <div class="container-fluid-xl">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr align="center">
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Kewarganegaraan</th>
                    <th>Jurusan</th>
                    <th>Jenjang</th>
                    <th>Tahun Akademik</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>telepon</th>
                    <th>Nama SMU/SMK</th>
                    <th>Tahun Masuk</th>
                    <th>Nama Orang Tua</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Telepon</th>
                    <th>Waktu Kuliah</th>
                    <th>Mata kuliah Agama</th>
                    <th colspan=2>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regmahasiswa as $item) 
                <tr align="center">
                    <th>{{$item->nim}}</th>
                    <th>{{$item->nama}}</th>
                    <th>{{$item->jeniskelamin}}</th>
                    <th>{{$item->agama}}</th>
                    <th>{{$item->kewarganegaraan}}</th>
                    <th>{{$item->jurusan}}</th>
                    <th>{{$item->jenjang}}</th>
                    <th>{{$item->tahunakademik}}</th>
                    <th>{{$item->ttl}}</th>
                    <th>{{$item->alamat}}</th>
                    <th>{{$item->kota}}</th>
                    <th>{{$item->kodepos}}</th>
                    <th>{{$item->telepon}}</th>
                    <th>{{$item->namasekolah}}</th>
                    <th>{{$item->tahunmasuk}}</th>
                    <th>{{$item->namaorangtua}}</th>
                    <th>{{$item->kota1}}</th>
                    <th>{{$item->kodepos1}}</th>
                    <th>{{$item->telepon1}}</th>
                    <th>{{$item->waktukuliah}}</th>
                    <th>{{$item->pilihmatkul}}</th>
                    <th><a href="{{route('regmahasiswa.tampil',["id" => $item->id])}}" 
                            class="btn btn-warning btn-block" >Rubah</a></th>
                    <td><a href="{{ route('regmahasiswa.hapus',["id" => $item->id]) }}"
                            class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>