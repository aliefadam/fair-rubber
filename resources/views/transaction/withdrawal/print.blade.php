<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        * {
            line-height: 1;
            font-family: 'Times New Roman', Times, serif
        }

        #content {
            width: 771px;
        }

        .kop {
            width: 100%;
            padding: 10px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .kop img:first-child {
            width: 100px;
        }

        .kop img:last-child {
            width: 80px;
        }

        .kop .name h1 {
            font-weight: bold;
            text-align: center
        }

        .kop .name p {
            margin-top: 5px;
            font-style: italic;
        }

        hr {
            border: 1px solid black;
        }

        .detail {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .detail .item {
            display: flex;
            gap: 5px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .detail .item h1:first-child {
            width: 100px;
        }

        .detail .detail-right {
            height: fit-content;
            align-items: flex-start;
        }

        .detail .detail-right .item h1:first-child {
            width: 60px;
        }

        .content,
        .content-petani {
            margin-top: 30px;
        }

        .content .item,
        .content-petani .item {
            display: flex;
            gap: 5px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        table {
            margin-top: 10px;
            border: 1px solid black !important;
        }

        table th,
        table td {
            border: 1px solid black !important;
            padding: 10px;
        }

        .premi {
            display: flex;
            justify-content: space-between;
        }

        .premi .kode {
            background-color: rgb(255, 157, 0);
            font-weight: bold;
            font-size: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
        }

        .content-petani table {
            width: 100%;
        }

        .detail,
        .content,
        .content-petani {
            padding: 0 20px;
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body>

    <div id="content" class="mx-auto">
        <div class="kop">
            <img src="{{ asset('/imgs/header-left.jpg') }}" alt="">
            <div class="name">
                <h1>YAYASAN ADIL MAKMUR SEJAHTERA</h1>
                <h1>CIKULUR</h1>
                <p>Sekretariat Jl. Raya Cileles Km 12 Mandeg 42356</p>
            </div>
            <img src="{{ asset('/imgs/header-right.jpg') }}" alt="">
        </div>
        <hr>

        <div class="detail">
            <div class="detail-left">
                <div class="item">
                    <h1>KOLEKTOR</h1>
                    <h1>:</h1>
                    <h1>ACIP</h1>
                </div>
                <div class="item">
                    <h1>DESA</h1>
                    <h1>:</h1>
                    <h1>KAMPUNG JERUK</h1>
                </div>

            </div>
            <div class="detail-right">
                <div class="item">
                    <h1>BULAN</h1>
                    <h1>:</h1>
                    <h1>AGUSTUS 2024</h1>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="item">
                <h1>PREMI</h1>
                <h1>:</h1>
            </div>

            <div class="premi">
                <table>
                    <tr>
                        <th>Total Timbangan (KG)</th>
                        <th>Premi</th>
                        <th>Tanda Terima</th>
                    </tr>
                    <tr>
                        <td>1560</td>
                        <td>Rp. 780.000</td>
                        <td>Transfer</td>
                    </tr>
                </table>
                <div class="kode">
                    KODE 1
                </div>
            </div>
        </div>

        <div class="content-petani">
            <div class="item">
                <h1>PREMI PETANI</h1>
                <h1>:</h1>
            </div>

            <table>
                <tr>
                    <th>NO</th>
                    <th>Petani</th>
                    <th>Alamat</th>
                    <th>Timbangan (KG)</th>
                    <th>Premi</th>
                    <th>Tanda Terima</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Agus</td>
                    <td>Cikulur</td>
                    <td>410</td>
                    <td>Rp. 820.000</td>
                    <td>Transfer</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Erah</td>
                    <td>Kadurahayu</td>
                    <td>300</td>
                    <td>Rp. 600.000</td>
                    <td>Transfer</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rudi</td>
                    <td>Tajur</td>
                    <td>300</td>
                    <td>Rp. 600.000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rusman</td>
                    <td>Tajur</td>
                    <td>550</td>
                    <td>Rp. 1.100.000</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
