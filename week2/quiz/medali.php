<?php
/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */

function perolehan_medali($arr)
{
    if ($arr ==null) {
        return "Array Empty / Array Kosong";
    } else {
        $negara = [];
        for ($i=0; $i <count($arr) ; $i++) {
            array_push($negara, $arr[$i][0]);
        }
        $negara = array_values(array_unique($negara));
        $medali;
        $all = array();
        for ($i=0; $i <count($negara) ; $i++) {
            $medali = [
                "negara" => $negara[$i],
                "emas" => 0,
                "perak" => 0,
                "perunggu" => 0
            ];
            array_push($all, $medali);
        }
        for ($i=0; $i <count($arr) ; $i++) {
            for ($a=0; $a <count($negara) ; $a++) {
                if ($arr[$i][0]==$negara[$a]) {
                    $med = $arr[$i][1];
                    switch ($med) {
                        case 'emas':
                            $all[$a]['emas']++;
                            break;
                        case 'perak':
                            $all[$a]['perak']++;
                            break;
                        case 'perunggu':
                            $all[$a]['perunggu']++;
                            break;
                        
                    }
                }
            }
        }
    }
    return $all;
}


 // TEST CASES
 echo "<pre>";
 print_r(perolehan_medali(
     array(
    array('Indonesia', 'emas'),
    array('India', 'perak'),
    array('Korea Selatan', 'emas' ),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas'),
    array('Brazil', 'perak')
   )
 ));
 echo "</pre>";
/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */

 print_r(perolehan_medali([])); // no data