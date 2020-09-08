<?php
$Swakelola2019 = $swakelola2019['data'];

// foreach ($Swakelola2019 as $key => $value) {
// 	if ($Swakelola2019[$key]['status_aktif'] == "tidak") {
// 		unset($Swakelola2019[$key]);
// 	}elseif ($Swakelola2019[$key]['status_umumkan'] == "belum") {
// 		unset($Swakelola2019[$key]);
// 	}
// }

$subtotal = 123456789;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
 
rupiah($subtotal);

// foreach($Swakelola2019 as $elementKey => $element) {
//     foreach($element as $valueKey => $value) {
//         if($value == "tidak" || $value == "belum"){
//             //delete this particular object from the $array
//             unset($Swakelola2019[$elementKey]);
//         }
//     }
// }

// $arr = json_encode(array_values($Swakelola2019));

// foreach ($Swakelola2019 as $key) {
// 	$result[]=$Key[$key];
// }



// for ($i=0; $i < count($Swakelola2019); $i++) { 
// 	if ($Swakelola2019[$i]['status_aktif' == "tidak"]) {
// 		unset($Swakelola2019[$i]);
// 	}elseif ($Swakelola2019[$i]['status_umumkan' == "belum"]) {
// 		unset($Swakelola2019[$i]);
// 	}
// }


// $values = array_values($Swakelola2019);

// for ($i=0; $i < count($Swakelola2019); $i++) { 
// 	array_unshift($values, NULL);
// 	unset($values[0]);
// }



// function multi_array_search_with_condition($array, $condition)
// {
//     $foundItems = array();

//     foreach($array as $item)
//     {
//         $find = TRUE;
//         foreach($condition as $key => $value)
//         {
//             if(isset($item[$key]) && $item[$key] == $value)
//             {
//                 $find = TRUE;
//             } else {
//                 $find = FALSE;
//             }
//         }
//         if($find)
//         {
//             array_push($foundItems, $item);
//         }
//     }
//     return $foundItems;
// }

// $filtered1 = multi_array_search_with_condition($swakelola2019, array('status_aktif' => 'ya'));
// $filtered2 = multi_array_search_with_condition($filtered1, array('status_umumkan' => 'sudah'));

// echo "<pre>";
// print_r($arr);
// echo "<pre>";

?>