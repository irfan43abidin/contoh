<?
        // Penggunaan tipe data int, float dan string seta type castingnya
        $var = 2002 ; // var sebagai integer 
         print “Sekarang tahun $var.<br>”;
        $var = “dua ribu dua”; // var sebagai string
         print “Sekarang tahun $var.<br>”;
         $var = 2002.5; // var sebagai bilangan bulat / float
         print “Tahun $var, ada atau nggak ?”;
       ?>

     <? 
        // Penggunaan tipe data object
 class himp
 {
  var $divisi = "Divkom HME ITB";
  function ubah($str)
  {
   $this->divisi = $str;
  }
 }
 
 $hme = new himp;
 print $hme->divisi;
 print "<br>";
 $hme->ubah("Divisi Komputer HME ITB");
 print $hme->divisi;
    ?>
