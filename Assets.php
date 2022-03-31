<?php
class Assets
{
    private $nama;
    private $tahun;
    private $nilai;
    protected $cetak;
    public function __construct($nama, $tahun, $nilai)
    {
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->nilai = $nilai;
    }
    public function cetak()
    {
        $this->cetak = [
            'nama' => $this->nama,
            'tahun' => $this->tahun,
            'nilai' => $this->nilai
        ];
    }
}
class Apartement extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
class Homestay extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
class Mobil extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
class Motor extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
class EmasMulia extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
class Berlian extends Assets
{
    private $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan)
    {
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak()
    {
        parent::cetak();
        $this->cetak['keterangan'] = $this->keterangan;
        return $this->cetak;
    }
}
