<!DOCTYPE html>
<html>
<head>
    <title>Perjanjian Kerjasama</title>
    <style>
        @page {
            margin-top: 0.5in;
            margin-bottom: 0.5in;   
            margin-left: 1in;
            margin-right: 0.7in;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
            line-height: 1.3;
        }
        .header {
            margin-bottom: 20px;
        }
        .header-table {
            width: 100%;
            border-collapse: collapse;
        }
        .header-table td {
            vertical-align: top;
            border: none; /* Remove border for table cells */
        }
        .logo {
            width: 150px;
        }
        h1 {
            font-size: 20pt; /* Increased from 14pt to 17pt (3px larger) */
            margin: 0;
            font-weight: normal; /* Changed from bold to normal */
        }
        h2 {
            font-size: 15pt;
            text-align: center;
            margin: 20px 0;
            text-decoration: underline;
            font-weight: bold;
        }
        .company-info {
            font-size: 9pt;
            margin: 0;
        }
        .content-section {
            margin-top: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        .no-border td {
            border: none;
            padding: 2px;
        }
        .indent {
            padding-left: 20px;
        }
        .highlight {
            background-color: yellow;
        }
        .signature-section {
            margin-top: 50px;
        }
        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }
        .signature-table td {
            width: 50%;
            text-align: center;
            vertical-align: bottom;
            border: none; /* Remove border for table cells */
            padding: 5px; /* Add some padding for spacing */
        }
        .footer {
            position: fixed;
            bottom: 0.5in;
            right: 0.5in;
            font-size: 10pt;
        }

        /* Page-specific footers */
        .page1 .footer::after { content: "Page 1 of 4"; }
        .page2 .footer::after { content: "Page 2 of 4"; }
        .page3 .footer::after { content: "Page 3 of 4"; }
        .page4 .footer::after { content: "Page 4 of 4"; }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <!-- Page 1 -->
    <div class="page1">
        <div class="header">
            <table class="header-table">
                <tr>
                    <td style="width: 30%;">
                        <img src="{{ public_path('img/pt_sign.png') }}" alt="Company Logo" class="logo">
                    </td>
                    <td>
                        <h1>PT Summer Cantika Indonesia</h1>
                        <p class="company-info">
                            Ruko Garden City No. 05, Jl. Ciganitri, Ds. Cipagalo, Kec. Bojongsoang Kab. Bandung<br>
                            Prov. Jawa Barat, Kode Pos 40287<br>
                            clerinawijayaindonesia@gmail.com | 08517325324
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <h2>PERJANJIAN KERJASAMA</h2>

        <div class="content-section">
            <strong>Pihak Pertama</strong>
            <table class="no-border">
                <tr>
                    <td style="width: 30%;">Nama Perusahaan</td>
                    <td>: PT Summer Cantika Indonesia</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: Ruko Garden City No 05 ( Ruko Warna Pink ) Cipagalo, Bojongsoang, Bandung</td>
                </tr>
                <tr>
                    <td>Kontak resmi</td>
                    <td>: Fahry Husein</td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: 085173069356</td>
                </tr>
            </table>
        </div>

        <div class="content-section">
            <strong>Pihak Kedua</strong>
            <table class="no-border">
                <tr>
                    <td style="width: 30%;">Nama KOL</td>
                    <td>: {{ $talent->talent_name }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $talent->address }}</td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: {{ $talent->phone_number }}</td>
                </tr>
            </table>
        </div>

        <p class="indent">
            Berdasarkan prinsip kesetaraan dan saling menguntungkan, kedua belah pihak telah mencapai kesepakatan dalam hal melakukan endorsement di platform {{ $talent->platform }} untuk Pihak Pertama dengan KOL:
        </p>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Akun</th>
                    <th>Jumlah Followers</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align: center;">
                    <td>1.</td>
                    <td>{{ $talent->username }}</td>
                    <td>{{ number_format($talent->followers, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <div class="content-section">
            <strong>1. Isi</strong>
            <p class="indent">
                Pihak Pertama dengan ini telah mengkonfirmasi saudara/i {{ $talent->talent_name }} (untuk selanjutnya disebut Pihak Kedua) setelah bernegosiasi dan bersepakat bersama, dan menunjuk Pihak Kedua sebagai yang mempromosikan video endorsement dari Pihak Pertama.
            </p>
        </div>

        <div class="footer"></div>
    </div>

    <div class="page-break"></div>

    <!-- Page 2 -->
    <div class="page2">
        <div class="header">
            <table class="header-table">
                <tr>
                    <td style="width: 30%;">
                        <img src="{{ public_path('img/pt_sign.png') }}" alt="Company Logo" class="logo">
                    </td>
                    <td>
                        <h1>PT Summer Cantika Indonesia</h1>
                        <p class="company-info">
                            Ruko Garden City No. 05, Jl. Ciganitri, Ds. Cipagalo, Kec. Bojongsoang Kab. Bandung<br>
                            Prov. Jawa Barat, Kode Pos 40287<br>
                            clerinawijayaindonesia@gmail.com | 08517325324
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <table>
            <tr>
                <th>Brand</th>
                <th>Scope Of Work</th>
                <th>Masa Kerjasama</th>
                <th>Biaya Endorsement</th>
            </tr>
            <tr style="text-align: center;">
                <td>Cleora Beauty</td>
                <td>{{ $talent->scope_of_work }}</td>
                <td>{{ $talent->masa_kerjasama }}</td>
                <td>{{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        </table>

        <div class="content-section">
            <strong>2. Hak dan Kewajiban</strong>
            <ol>
                <li>PIHAK PERTAMA memberikan dan menyediakan produk yang telah disepakati dengan PIHAK KEDUA serta memberikan info terkait video yang diinginkan.</li>
                <li>PIHAK KEDUA wajib memposting sesuai dengan SoW diatas untuk brand dalam waktu {{ $talent->masa_kerjasama }}. </li>
                <li class="highlight">PIHAK KEDUA wajib mempertahankan video yang telah diunggah di platform terkait dan tidak diperkenankan untuk menghapus, menyunting, mengarsipkan atau menonaktifkan video tersebut dengan alasan apapun, kecuali video tersebut melanggar ketentuan hukum yang berlaku di Indonesia.</li>
                <li>PIHAK KEDUA harus menyerahkan perkiraan rencana draft promosi atau siaran langsung dan data yang terkait dengan produk kepada PIHAK PERTAMA sesuai jadwal yang disepakati.</li>
                <li>Jika PIHAK KEDUA tidak melakukan kewajiban seperti tidak memposting video sesuai jadwal yang telah disepakati bersama, tidak ada respon apapun mengenai kemuduran posting video atau membatalkan kerjasama secara sepihak maka PIHAK KEDUA wajib melakukan pengembalian dana secara materil dengan sejumlah sisa slot video yang belum terposting sebanyak 5x (lima kali) lipat dari nominal harga yang sudah disepakati.</li>
                <li>Apabila dalam pelaksanaan kerjasama terdapat hal-hal yang tidak sesuai dengan kesepakatan yang telah dibuat, maka pihak yang melanggar bersedia untuk menerima konsekuensi Hukum yang berlaku di Negara Kesatuan Republik Indonesia.</li>
            </ol>
        </div>

        <div class="footer"></div>
    </div>

    <div class="page-break"></div>

    <!-- Page 3 -->
    <div class="page3">
        <div class="header">
            <table class="header-table">
                <tr>
                    <td style="width: 30%;">
                        <img src="{{ public_path('img/pt_sign.png') }}" alt="Company Logo" class="logo">
                    </td>
                    <td>
                        <h1>PT Summer Cantika Indonesia</h1>
                        <p class="company-info">
                            Ruko Garden City No. 05, Jl. Ciganitri, Ds. Cipagalo, Kec. Bojongsoang Kab. Bandung<br>
                            Prov. Jawa Barat, Kode Pos 40287<br>
                            clerinawijayaindonesia@gmail.com | 08517325324
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="content-section">
            <strong>3. Biaya dan Pembayaran</strong>
            <p>Rekening yang ditunjuk dari pihak pengirim</p>
            <table class="no-border">
                <tr>
                    <td>Pengirim</td>
                    <td>: PT SUMMER CANTIKA INDONESIA</td>
                </tr>
                <tr>
                    <td>Rekening Pengirim</td>
                    <td>: 3372176463</td>
                </tr>
                <tr>
                    <td>Bank Pengirim</td>
                    <td>: BCA</td>
                </tr>
            </table>

            <p>Rekening yang ditunjuk dari Pihak Kedua</p>
            <table class="no-border">
                <tr>
                    <td>Penerima</td>
                    <td>: {{ $talent->nama_rekening }}</td>
                </tr>
                <tr>
                    <td>Rekening Penerima</td>
                    <td>: {{ $talent->no_rekening }}</td>
                </tr>
                <tr>
                    <td>Bank Penerima</td>
                    <td>: {{ $talent->bank }}</td>
                </tr>
                <tr>
                    <td>No. NPWP</td>
                    <td>: {{ $talent->no_npwp }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{ $talent->nik }}</td>
                </tr>
            </table>
        </div>

        <div class="content-section">
            <strong>4. Ketentuan dan Privasi</strong>
            <p>
                Sejak tanggal penandatanganan kontrak ini hingga akhir kontrak ini, semua ketentuan kontrak ini, dan semua materi dan informasi dari pihak lain (termasuk rahasia dagang, rencana perusahaan, kegiatan operasional, informasi keuangan dan rahasia dagang lainnya, dan lain-lain), Pihak Pertama dan Pihak Kedua tidak boleh mengungkapkan kepada pihak lainnya sebelum memperoleh persetujuan dari kedua belah pihak. Pihak yang mengungkapkan akan bertanggung jawab atas pelanggaran kontrak dan memberikan kompensasi kepada pihak lainnya atas kerugian ekonomi yang diakibatkannya.
            </p>
        </div>

        <div class="footer"></div>
    </div>

    <div class="page-break"></div>

    <!-- Page 4 -->
    <div class="page4">
        <div class="header">
            <table class="header-table">
                <tr>
                    <td style="width: 30%;">
                        <img src="{{ public_path('img/pt_sign.png') }}" alt="Company Logo" class="logo">
                    </td>
                    <td>
                        <h1>PT Summer Cantika Indonesia</h1>
                        <p class="company-info">
                            Ruko Garden City No. 05, Jl. Ciganitri, Ds. Cipagalo, Kec. Bojongsoang Kab. Bandung<br>
                            Prov. Jawa Barat, Kode Pos 40287<br>
                            clerinawijayaindonesia@gmail.com | 08517325324
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="content-section">
            <p>
                Kontrak ini ditandatangani oleh kedua belah pihak dan akan efektif setelah ditandatangani. Kontrak tambahan akan ditandatangani jika kontrak tidak mencakup hal-hal yang perlu direvisi atau diubah.
            </p>
        </div>

        <div class="signature-section">
            <p style="text-align: right;">{{ $tanggal_hari_ini }}</p>
            <table class="signature-table">
                <tr>
                    <td>Pihak Pertama</td>
                    <td>Pihak Kedua</td>
                </tr>
                <tr>
                    <td style="height: 80px;"></td>
                    <td style="height: 80px;">
                        <!-- You can add an image of the signature here if needed -->
                        <!-- <img src="{{ public_path('path/to/signature.png') }}" alt="Signature" style="height: 60px;"> -->
                    </td>
                </tr>
                <tr>
                    <td>Fahry Husein</td>
                    <td>{{ $talent->talent_name }}</td>
                </tr>
                <tr>
                    <td>CEO Office</td>
                    <td>KOL</td>
                </tr>
            </table>
        </div>

        <div class="footer"></div>
    </div>
</body>
</html>
