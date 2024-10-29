<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Diagnosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .kop-surat {
            width: 100%;
            margin-bottom: 20px;
        }
        .kop-surat td {
            vertical-align: top;
        }
        .kop-surat img {
            max-width: 100px;
            height: auto;
        }
        .kop-surat .text {
            text-align: center;
            width: 100%;
        }
        .kop-surat h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .kop-surat p {
            margin: 0;
            font-size: 16px;
        }
        .form-laporan {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .form-laporan th, .form-laporan td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .form-laporan th {
            background-color: #f2f2f2;
        }
        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }
        .alert h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .alert p {
            margin: 5px 0;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
        }
        .footer div {
            margin-top: 40px;
        }
        .footer .signature {
            display: inline-block;
            width: 45%;
            text-align: center;
        }
        .footer .signature p {
            margin: 0;
        }
    </style>
</head>
<body>

    <table class="kop-surat">
        <tr>
            <td><img src="{{ url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHflH2XlQU0dxZMcy6esDT3_Ir2q7wQU1HvA&s') }}" alt="Logo Klinik"></td>
            <td class="text">
                <h1>KLINIK UTAMA ENGGAL WARAS</h1>
                <p>Jalan Raya Lintas Barat No. 662 Desa Gisting Bawah</p>
                <p>Kecamatan Gisting Kabupaten Tanggamus Lampung</p>
                <p>Telp. 085383852039</p>
            </td>
        </tr>
    </table>

    <hr>

    <h2 style="text-align: center;">LAPORAN HASIL DIAGNOSA</h2>
    <table>
        <tr>
            <td>No Diagnosa</td>
            <td>:</td>
            <td>{{ $no_diagnosa }}</td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>{{ $nama_pasien }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>{{ $umur }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>Tanggal Pemeriksaan</td>
            <td>:</td>
            <td>{{ $tanggal_pemeriksaan }}</td>
        </tr>
    </table>

    <table class="form-laporan">
        <tr>
            <th>No</th>
            <th>Gejala</th>
        </tr>
        @foreach ($gejala as $item)
            <tr>
                <td>{{ $item['no'] }}</td>
                <td>{{ $item['gejala'] }}</td>
            </tr>
        @endforeach
    </table>

    <div class="alert alert-success">
        <h4>Hasil Diagnosis:</h4>
        <div class="result-item">
            <p><strong>Penyakit:</strong> {{ $highest_diagnosis['nama_penyakit'] ?? 'Tidak ada data' }}</p>
            <p><strong>Probabilitas:</strong> {{ number_format($highest_diagnosis['probabilitas'] * 100, 2) ?? '0.00' }}%</p>
            <p><strong>Cara Penanganan:</strong> {{ $highest_diagnosis['cara_penanganan'] ?? 'Tidak ada data' }}</p>
        </div>
    </div>

    <div class="footer">
        <p>Mengetahui,</p>
        <div class="signature">
            <p>Petugas</p>  
            <br><br><br><br>
            <p>( ________________________ )</p>
        </div>
        <div class="signature">
            <p>Dokter Gigi</p>
            <br><br><br><br>
            <p>drg. Galuh Akbar Kistiyan</p>
        </div>
    </div>

</body>
</html>
