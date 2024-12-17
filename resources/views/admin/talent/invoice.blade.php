<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        @page {
            margin: 0.5cm;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 22px;
            color: #555;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }
        .invoice-box table th, .invoice-box table td {
            padding: 5px;
        }
        .invoice-box table th {
            background-color: #f2f2f2;
        }
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.top table td.title {
            font-size: 55px;
            line-height: 55px;
            color: black;
        }
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        /* Totals styling */
        .totals-table {
            width: 100%;
            margin-top: 20px;
            text-align: right;
        }
        .totals-table td {
            padding: 5px;
            text-align: right;
        }

        .invoice-box .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #fff;
            background-color: #f5c441;
            padding: 10px 0;
        }
        .invoice-box .footer .footer-info {
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
        }
        .invoice-box .payment-signature-section .payment-method p {
            margin-block-start: 1px;
            margin-block-end: 1px;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <!-- Top Section -->
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            @if($tenant_id == 1)
                            <td>
                                <img src="{{ public_path('img/cleora-logo.png') }}" style="width:100%; max-width:250px;"><br>
                                PT. Summer Cantika Indonesia<br>
                            </td>
                            @elseif($tenant_id == 2)
                            <td>
                                <strong>AZRINA BEAUTY</strong><br>
                                @azrinabeauty<br>
                            </td>
                            @endif
                            <td class="title">
                                INVOICE<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td style="font-size: 15px;">
                                Invoice to: <br><br>
                                NIK: {{ $nik }}<br>
                                {{ $nama_talent }}<br>
                                Alamat: {{ $alamat_talent }}<br>
                                No HP: {{ $no_hp_talent }}
                            </td>
                            <td>
                                Invoice#<br>
                                Date: {{ $tanggal_hari_ini }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <!-- Talent Contents Table -->
        <table>
            <thead>
                <tr>
                    <th style="text-align: left;">Nama Akun</th>
                    <th style="text-align: left;">Quantity Slot</th>
                    <th style="text-align: left;">Deskripsi</th>
                    <th style="text-align: left;">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left; padding-top:20px; padding-bottom: 20px;">{{ $nama_akun }}</td>
                    <td style="text-align: left; padding-top:20px; padding-bottom: 20px;">{{ $quantity_slot }}</td>
                    <td style="text-align: left; padding-top:20px; padding-bottom: 20px;">{{ $deskripsi }}</td>
                    <td style="text-align: left; padding-top:20px; padding-bottom: 20px; font-size: 20px;">Rp {{ number_format($harga, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Totals Table -->
        <table class="totals-table">
            <tr>
                <td>Subtotal</td>
                <td>Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>{{ $pphLabel }}</td>
                <td>Rp {{ number_format($pph, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td><strong>TOTAL</strong></td>
                <td><strong>Rp {{ number_format($total, 0, ',', '.') }}</strong></td>
            </tr>
            @if($status_payment == 'Termin 1' || $status_payment == 'Termin 2' || $status_payment == 'Termin 3')
                <tr>
                    <td>Termin 1</td>
                    <td>Rp {{ number_format($total / 3, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Termin 2</td>
                    <td>Rp {{ number_format($total / 3, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Termin 3</td>
                    <td>Rp {{ number_format($total / 3, 0, ',', '.') }}</td>
                </tr>
            @elseif($status_payment !== 'Full Payment')
                <tr>
                    <td>Down Payment</td>
                    <td>Rp {{ number_format($down_payment, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Sisa</td>
                    <td>Rp {{ number_format($sisa, 0, ',', '.') }}</td>
                </tr>
            @endif
        </table>

        <!-- Payment and Signature section -->
        <table style="width: 100%; margin-top: 40px;">
            <tr>
                <!-- Payment Method -->
                <td style="width: 40%; vertical-align: top;">
                    <h3 style="margin: 0; padding: 0;">Payment Method</h3>
                    <p style="margin: 0; padding: 0;">Bank: <strong>{{ $bank }}</strong></p>
                    <p style="margin: 0; padding: 0;">Atas Nama: <strong>{{ $nama_account }}</strong></p>
                    <p style="margin: 0; padding: 0;">Account No: <strong>{{ $account_no }}</strong></p>
                    <p style="margin: 0; padding: 0;">No. NPWP: <strong>{{ $npwp }}</strong></p>
                </td>
                <!-- Signatures -->
                <td style="width: 30%; text-align: center; vertical-align: bottom;">
                    <div style="margin-top: 100px;">
                        <div style="border-top: 1px solid #555; width: 80%; margin: auto;"></div>
                        <p>{{ $nama_talent }}</p>
                    </div>
                </td>
                <td style="width: 30%; text-align: center;">
                    @if($ttd)
                        @php
                            $imagePath = storage_path('app/public/' . $ttd);
                            $imageData = base64_encode(file_get_contents($imagePath));
                            $src = 'data:image/png;base64,'.$imageData;
                        @endphp
                        <img src="{{ $src }}" style="width:50%; max-width:150px;">
                    @else
                        <div style="width:50%; max-width:150px; height:75px; margin:auto; border:1px solid #ccc; display:flex; align-items:center; justify-content:center;">
                            No Image
                        </div>
                    @endif
                    <div style="border-top: 1px solid #555; width: 80%; margin: auto;"></div>
                    <p>{{ $approval_name }}</p>
                </td>
            </tr>
        </table>
        Thank you for your business!
        <!-- Footer section -->
        <div class="footer">
            <div class="footer-info">
                <span>0857-9516-1088</span>
                <span>Ruko Garden City No 6, Cipagalo, Bojongsoang</span>
            </div>
        </div>
    </div>
</body>
</html>
