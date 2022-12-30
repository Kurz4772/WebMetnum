<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</head>

<body style="background-image: url(images/fab99806522f06ccf54923e21993c894.jpg); background-size: cover;">

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Hasil
                    </div>
                    <div class="card-body">
                        <?php
                        // Show Data

                        //membuat tabel 
                        function tabel($matriks)
                        {
                            echo "<table class='table table-bordered'>";
                            foreach ($matriks as $column) {
                                echo "<tr >";
                                echo "<td>$column[0]</td>";
                                echo "<td>$column[1]</td>";
                                echo "<td>$column[2]</td>";
                                echo "<td>$column[3]</td>";
                                echo "<tr>";
                            }
                            echo "</table>";
                            echo "<hr>";
                            echo "<br>";
                        }

                        //matriks

                        if (isset($_GET['btnhitung'])) {
                            $GypsumCasting = $_GET['GypsumCasting'];
                            $Rofing = $_GET['Rofing'];
                            $SemenPutih = $_GET['SemenPutih'];

                            $matriks = [
                                [1.5, 2.5, 0.75, $GypsumCasting],
                                [2, 3, 1.5, $Rofing],
                                [0.5, 1, 1, $SemenPutih]
                            ];
                            echo "Matriks Awal";
                            tabel($matriks);


                            //Langkah 1
                            for ($i = 0; $i <= count($matriks); $i++) {
                                $row0[0][$i] = $matriks[0][$i] / $matriks[0][0];
                            }

                            $matriks[0] = array_replace($matriks[0], $row0[0]);
                            echo "Membuat pivot pada persamaan 1";
                            tabel($matriks);


                            for ($i = 0; $i <= count($matriks); $i++) {
                                $row1[1][$i] = $matriks[1][$i] - ($matriks[1][0] * $matriks[0][$i]);
                                $row2[2][$i] = $matriks[2][$i] - ($matriks[2][0] * $matriks[0][$i]);
                            }

                            $matriks[1] = array_replace($matriks[1], $row1[1]);
                            $matriks[2] = array_replace($matriks[2], $row2[2]);
                            echo "Eliminasi pada persamaan 2 dan 3";
                            tabel($matriks);


                            //Langkah 2
                            for ($i = 1; $i <= count($matriks); $i++) {
                                $row1[1][$i] = $matriks[1][$i] / $matriks[1][1];
                            }

                            $matriks[1] = array_replace($matriks[1], $row1[1]);
                            echo "Membuat pivot pada persamaan 2";
                            tabel($matriks);

                            for ($i = 1; $i <= count($matriks); $i++) {
                                $row0[0][$i] = $matriks[0][$i] - ($matriks[0][1] * $matriks[1][$i]);
                                $row2[2][$i] = $matriks[2][$i] - ($matriks[2][1] * $matriks[1][$i]);
                            }
                            $matriks[0] = array_replace($matriks[0], $row0[0]);
                            $matriks[2] = array_replace($matriks[2], $row2[2]);
                            echo "Eliminasi pada persamaan 1 dan 3";
                            tabel($matriks);

                            //Langkah 3
                            for ($i = 2; $i <= count($matriks); $i++) {
                                $row2[2][$i] = $matriks[2][$i] / $matriks[2][2];
                            }

                            $matriks[2] = array_replace($matriks[2], $row2[2]);
                            echo "Membuat pivot pada persamaan 3";
                            tabel($matriks);


                            for ($i = 1; $i <= count($matriks); $i++) {
                                $row0[0][$i] = $matriks[0][$i] - ($matriks[0][2] * $matriks[2][$i]);
                                $row1[1][$i] = $matriks[1][$i] - ($matriks[1][2] * $matriks[2][$i]);
                            }
                            $matriks[0] = array_replace($matriks[0], $row0[0]);
                            $matriks[1] = array_replace($matriks[1], $row1[1]);
                            echo "Eliminasi pada persamaan 1 dan 2";
                            tabel($matriks);

                            echo "Kesimpulan";
                            echo "<ul type='disc'>";
                            echo "<li>Nilai X : " . $matriks[0][3] . "</li>";
                            echo "<li>Nilai Y : " . $matriks[1][3] . "</li>";
                            echo "<li>Nilai Z : " . $matriks[2][3] . "</li>";
                            echo "</ul>";
                        }


                        // //Jika Menggunakan Perulangan

                        // if (isset($_GET['btnhitung'])) {
                        //     $GypsumCasting = $_GET['GypsumCasting'];
                        //     $Rofing = $_GET['Rofing'];
                        //     $SemenPutih = $_GET['SemenPutih'];

                        //     $matriks =
                        //         array(
                        //             array(1.5, 2.5, 0.75, $GypsumCasting),
                        //             array(2, 3, 1.5, $Rofing),
                        //             array(0.5, 1, 1, $SemenPutih)
                        //         );
                        //     tampilkanMatrik($matriks);
                        // }

                        // function tampilkanMatrik($matriks)
                        // {
                        //     echo "<table class='table table-bordered'>";
                        //     $rows = count($matriks);

                        //     for ($i = 0; $i < $rows; $i++) {
                        //         $cols = count($matriks[$i]);
                        //         echo '<tr>';
                        //         for ($j = 0; $j < $cols; $j++) {
                        //             echo '<td>';
                        //             echo $matriks[$i][$j] . '   ';
                        //             echo '</td>';
                        //         }
                        //         echo '</tr>';
                        //     }
                        //     echo '</table>';
                        //     echo '<hr>';
                        // }


                        // for ($i = 0; $i < count($matriks); $i++) {
                        //     $persamaan_pivot = $i + 1;
                        //     echo 'Persamaan ' . $persamaan_pivot . ' menjadi pivot dan ';
                        //     $pivot = $matriks[$i][$i];
                        //     for ($j = 0; $j < count($matriks) + 1; $j++) {
                        //         $matriks[$i][$j] = $matriks[$i][$j] / $pivot;
                        //     }


                        //     for ($k = 0; $k < count($matriks); $k++) {
                        //         if ($k != $i) {
                        //             $pivot = $matriks[$k][$i];
                        //             for ($l = 0; $l < count($matriks) + 1; $l++) {
                        //                 $matriks[$k][$l] = $matriks[$k][$l] - $pivot * $matriks[$i][$l];
                        //             }
                        //         }
                        //         $persamaan_ubah = $k + 1;
                        //         echo 'Persamaan ' . $persamaan_ubah . ' telah dirubah';
                        //         tampilkanMatrik($matriks);
                        //     }
                        //     echo "Kesimpulan";
                        //     echo "<ul type='disc'>";
                        //     echo "<li>Nilai X : " . $matriks[0][3] . "</li>";
                        //     echo "<li>Nilai Y : " . $matriks[1][3] . "</li>";
                        //     echo "<li>Nilai Z : " . $matriks[2][3] . "</li>";
                        //     echo "</ul>";
                        // }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>