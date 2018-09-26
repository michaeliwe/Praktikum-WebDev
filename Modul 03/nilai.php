<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta id="description" content="Tugas Praktikum WAD">
    <meta id="keywords" content="WAD,Praktikum,HTML,CSS, JavaScript,PHP,Prodase">
    <meta id="author" content="Michaeliwe">
    <meta id="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/masterStyles.css" />
    <title>Index Nilai</title>
</head>

<body>
    <div class = "container2">
        <table width = "100%" border = "0">
            <tr>
                <td align = "center">
                    <table border="0" width="80%">
                        <tr>
                            <td colspan="7">
                                <table width="100%" border="0">
                                    <tr>
                                        <td rowspan="4">
                                            <img src="assets/images/foto.jpg" width="120px" height="150px">
                                        </td>
                                        <td rowspan="4" width="10px"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            Michael Addryan Liwe
                                        </td>

                                        <td rowspan="4" align="center">
                                            <h3>Nilai Akhir Semester Ganjil</h3>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            NIM
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            1202160197
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kelas
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            SI-40-04
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="30px" colspan="7"></td>
                        </tr>
                        <tr class="headerTabel">
                            <th>No</th>
                            <th width="22%">Lastname</th>
                            <th width="22%">Firstname</th>
                            <th width="22%">Fullname</th>
                            <th>SKS</th>
                            <th>Nilai Akhir</th>
                            <th>Indeks</th>
                        </tr>

                        <?php 

                            include "indexNilai.php";

                            for ($i=0; $i<count($namaMatkul); $i++) {

                                if ($i%2 == 0) {
                                    echo "<tr class = 'dataTabel'>";
                                    echo "<td>".($i+1)."</th>";
                                    echo "<td width = '22%'>".$namaMatkul[$i]."</th>";
                                    echo "<td width = '22%'>".$namaMatkulEn[$i]."</th>";
                                    echo "<td width = '22%' class = 'fullname'>".$namaMatkul[$i]."<br><i>(".$namaMatkulEn[$i].")</i></th>";
                                    echo "<td>".$sks[$i]."</th>";
                                    echo "<td>".$nilaiAkhir[$i]."</th>";
                                    echo "<td bgcolor=".$warna[$i].">".$indeks[$i]."</th>";
                                    echo "</tr>";
                                }
                                else {
                                    echo "<tr class = 'dataTabel2'>";
                                    echo "<td>".($i+1)."</th>";
                                    echo "<td width = '22%'>".$namaMatkul[$i]."</th>";
                                    echo "<td width = '22%'>".$namaMatkulEn[$i]."</th>";
                                    echo "<td width = '22%' class = 'fullname'>".$namaMatkul[$i]."<br><i>(".$namaMatkulEn[$i].")</i></th>";
                                    echo "<td>".$sks[$i]."</th>";
                                    echo "<td>".$nilaiAkhir[$i]."</th>";
                                    echo "<td bgcolor=".$warna[$i].">".$indeks[$i]."</th>";
                                    echo "</tr>";
                                }
                            }
                        ?>

                        <tr class = "dataTabel">
                            <th colspan = '4'>Total SKS</th>
                            <th colspan = '3'><?php echo array_sum($sks) ?></th>
                        </tr>
                        <tr class = "dataTabel2">
                            <th colspan = '4'>Rata - rata</th>
                            <th colspan = '3'><?php echo format(array_sum($nilaiAkhir) / count($nilaiAkhir)); ?></th>
                        </tr>
                        <tr class = "dataTabel">
                            <th colspan = '4'>IP Semester</th>
                            <th colspan = '3'><?php echo format($sksPoin);?></th>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<script src="assets/js/bootstrap.min.js"></script>