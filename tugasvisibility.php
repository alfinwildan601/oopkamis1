Tugas kamis:Alfin Wildan A,Zaki Adhitia
<?php
class namaAkun{
	public $nama ='apin123';
	private $sandi = 'jaki234';
    function cetak(){
		echo "Akses dari dalam class <br>";
		echo "nama : ".$this->nama."<br>";
		echo "sandi : ".$this->sandi."<br>";
}
}
$objek = new namaAkun();
$objek->cetak();
echo "<br> Pengaksesan dari luar class <br>";
echo "nama : ".$objek->nama."<br>"; // OK
echo "sandi : ".$objek->sandi."<br>";
?>