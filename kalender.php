

<table align="center" width="100px" border="0px" cellpadding="3" cellspacing="0"  style="border:none; background:none;">
<tr>
<td>
  <div align="center">
    <?php
//bulan sekarang
$month=date("m");
//Tahun sekarang
$year=date("Y");
//hari ini
$day=date("d");
//cek jumlah hari tahun sekarang
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
//style untuk table
echo '
<style>
td {
font-size:5;
font-family:verdana;
}
</style>
';
//table untuk menulis tanggal sekarang
echo '<table align="center" border="0" width="180px" cellpadding=2 cellspacing=1 style="border:0px solid #CCCCCC;background:white;"><tr><td align=center>';
echo date("D, d M Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
//table untuk menulis hari
echo '
<table align="center" border="0" width="70px" cellpadding=2 cellspacing=1 style="border:0px solid">
<tr bgcolor="white">
<td align=center><font color=red>Min</font></td>
<td align=center>Sen</td>
<td align=center>Sel</td>
<td align=center>Rab</td>
<td align=center>Kam</td>
<td align=center>Jum</td>
<td align=center><font color=blue>Sab</font></td>
</tr>
';
/*
mengecek tanggal 1 bulan sekarang ada pada hari ke berapa
kemudian tambahkan cell td sebanyak var $s
*/
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" width=\"10%\" align=center valign=middle bgcolor=\"#FFFFFF\">
</td>";
}
for ($d=1;$d<=$endDate;$d++) {
//mulai penulisan tanggal
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
//jika nilai $d (tanggal) adalah hari minggu (0) dibuat baris baru <tr>
//default warna huruf
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
//jika tanggal adalah hari minggu warna huruf merah
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sat") { $fontColor="blue"; }
//jika tanggal adalah hari sabtu warna huruf biru
//menulis tanggal
echo "<td style=\"font-family:arial;color:#333333\" width=\"10%\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
//jika tanggal adalah hari sabtu (6) akhiri baris </tr>
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }
}
//akhir table
echo '</table>';
?>
  </div>
  </td>
</tr>
</table>