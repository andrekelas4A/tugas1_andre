<?php 

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0){
        //echo "hello";
        $this ->judul = $judul;
        $this ->penulis = $penulis;
        $this ->penerbit = $penerbit;
        $this ->harga = $harga;

    }
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Naruto", "Masashi Nishimoto", "Erlangga", 100000);
$produk2 = new Produk("Uncharted", "NULL", "Faisal", 200000);
$produk3 = new Produk("Doraemon", "Nishimoto", "Erlangga", 500000);
$produk4 = new Produk();

//var_dump($produk1);
//var_dump($produk2);

echo $produk1 -> getLabel();
echo "<br>";
echo $produk2 -> getLabel();
echo "<br>";
echo $produk3 -> getLabel();
echo "<br>";
echo $produk4 -> getLabel();

?>