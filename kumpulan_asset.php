<?php
require_once 'Assets.php';
$total = 0;
$arrApartement = [
    [
        'nama' => 'Apartement',
        'tahun' => 2020,
        'keterangan' => 'Type 2 bedroom',
        'nilai' => 1300000000
    ],
    [
        'nama' => 'Apartement',
        'tahun' => 2021,
        'keterangan' => 'Type 3 bedroom',
        'nilai' => 1000000000
    ],
];
$arrHomestay = [
    [
        'nama' => 'Homestay',
        'tahun' => 2020,
        'keterangan' => 'Kota Malang',
        'nilai' => 920000000
    ],
    [
        'nama' => 'Homestay',
        'tahun' => 2020,
        'keterangan' => 'Jember',
        'nilai' => 1000000000
    ]
];
$arrMobil = [
    [
        'nama' => 'Mobil',
        'tahun' => 2021,
        'keterangan' => 'Lamborghini Gallardo',
        'nilai' => 1300000000000
    ],
    [
        'nama' => 'Mobil',
        'tahun' => 2021,
        'keterangan' => 'New Ferrary',
        'nilai' => 4000000000000
    ],
];
$arrMotor = [
    [
        'nama' => 'Motor',
        'tahun' => 2020,
        'keterangan' => 'Yamaha R1',
        'nilai' => 700000000
    ],
    [
        'nama' => 'Motor',
        'tahun' => 2021,
        'keterangan' => 'Ducati 1000',
        'nilai' => 1000000000
    ],
];
$arrEmas = [
    [
        'nama' => 'Emas',
        'tahun' => 2022,
        'keterangan' => '4kg, 24karat',
        'nilai' => 2782800000
    ],
    [
        'nama' => 'Emas',
        'tahun' => 2022,
        'keterangan' => '1kg, 24karat',
        'nilai' => 927600000
    ],
];
$arrBerlian = [
    [
        'nama' => 'Berlian',
        'tahun' => 2022,
        'keterangan' => 'Round Diamond',
        'nilai' => 33000000
    ]
];
$arrData = [];
foreach ($arrApartement as $r) {
    $temp = new Apartement($r['nama'], $r['tahun'], $r['nilai'], $r['keterangan']);
    array_push($arrData, $temp->cetak());
}
foreach ($arrHomestay as $v) {
    $temp = new Homestay($v['nama'], $v['tahun'], $v['nilai'], $v['keterangan']);
    array_push($arrData, $temp->cetak());
}
foreach ($arrMobil as $m) {
    $temp = new Mobil($m['nama'], $m['tahun'], $m['nilai'], $m['keterangan']);
    array_push($arrData, $temp->cetak());
}
foreach ($arrMotor as $mo) {
    $temp = new Motor($mo['nama'], $mo['tahun'], $mo['nilai'], $mo['keterangan']);
    array_push($arrData, $temp->cetak());
}
foreach ($arrEmas as $l) {
    $temp = new EmasMulia($l['nama'], $l['tahun'], $l['nilai'], $l['keterangan']);
    array_push($arrData, $temp->cetak());
}
foreach ($arrBerlian as $b) {
    $temp = new Berlian($b['nama'], $b['tahun'], $b['nilai'], $b['keterangan']);
    array_push($arrData, $temp->cetak());
}
$thead = ['No', 'Nama', 'Tahun', 'Keterangan', 'Nilai'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Impian Assets</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center">Target Assets</h1>
                <hr>
                <table class="table table-primary table-hover">
                    <thead>
                        <tr>
                            <?php foreach ($thead as $t) { ?>
                                <th scope="col"><?= $t ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($arrData as $d) {
                            $total += $d['nilai']; ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $d['nama'] ?></td>
                                <td><?= $d['tahun'] ?></td>
                                <td><?= $d['keterangan'] ?></td>
                                <td>Rp<?= number_format($d['nilai'], 0, ',', '.') ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total Nilai</th>
                            <th>Rp<?= number_format($total, 0, ',', '.') ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>