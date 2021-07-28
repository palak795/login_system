<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
 // return view('welcome');




// echo "<h1> Algorithms </h1>";

// function quick_sort($my_array)

//  {

// 	$loe = $gt = array();

// 	if(count($my_array) < 2)

// 	{
// 		return $my_array;
// 	}

// 	$pivot_key = key($my_array);

// 	$pivot = array_shift($my_array);

// 	foreach($my_array as $val)

// 	{

// 		if($val <= $pivot)

// 		{

// 			$loe[] = $val;

// 		}

// 		elseif ($val > $pivot)

// 		{
// 			$gt[] = $val;
// 		}

// 	}

// 	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
// }
 

// echo "<br>";

// echo "<h1>Quick_Sort</h1>";

// echo "<br>";

// echo "<br>";

// $my_array = array(23, 0, 42, 75, -18, 44, 19);

// echo 'Original Array : '.implode(',',$my_array);

// echo "<br>";

// echo "<br>";

// $my_array = quick_sort($my_array);

// echo 'Sorted Array : '.implode(',',$my_array);


// function bubble_Sort($my_array )
// {
// 	do

// 	{
// 		$swapped = false;

// 		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )

// 		{
			
// 			if( $my_array[$i] > $my_array[$i + 1] )

// 			{
// 				list( $my_array[$i + 1], $my_array[$i] ) =
// 						array( $my_array[$i], $my_array[$i + 1] );

// 				$swapped = true;

// 			}
// 		}	
// 	}
	
// 	while( $swapped );

// return $my_array;

// }

// echo "<br>";
// echo "<br>";

// echo "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";

// echo "<br>";
// echo "<h1> Bubble_Sort </h1>";
// echo "<br>";

// $test_array = array(33, 0, 22, 15, -12, 45, 19);

// echo "Original Array :\n";
// echo implode(', ',$test_array );
// echo "<br>";
// echo "<br>";

// echo " \nSorted Array\n: ";
// echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
// echo "<br>";
// echo "<br>";

// echo "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";

// echo "<br>";

// echo "<h1> Selection_sort </h1> ";
// echo "<br>";
// echo "<br>";


// function selection_sort($data)

// {

// for($i=0; $i<count($data)-1; $i++) {

// 	$min = $i;

// 	for($j=$i+1; $j<count($data); $j++) {

// 		if ($data[$j]<$data[$min]) {

// 			$min = $j;
// 		}
// 	}

//     $data = swap_positions($data, $i, $min);
    
// }

// return $data;

// }

// function swap_positions($data1, $left, $right) {

// 	$backup_old_data_right_value = $data1[$right];

// 	$data1[$right] = $data1[$left];

// 	$data1[$left] = $backup_old_data_right_value;

// 	return $data1;
// }

// $my_array = array(35, 10, 46, 27,-7, 74, 51);

// echo "Original Array :\n";
// echo implode(', ',$my_array );
// echo "<br>";
// echo "<br>";

// echo "\nSorted Array :\n";
// echo implode(', ',selection_sort($my_array)). PHP_EOL;
// echo "<br>";
// echo "<br>";
// echo "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";
// echo "<br>";
// echo "<br>";




// function insertion_Sort($my_array)

// {

// 	for($i=0;$i<count($my_array);$i++)

// 	{

// 		$val = $my_array[$i];

// 		$j = $i-1;

// 		while($j>=0 && $my_array[$j] > $val)

// 		{

// 			$my_array[$j+1] = $my_array[$j];

// 			$j--;

// 		}

// 		$my_array[$j+1] = $val;

// 	}

// return $my_array;
// }

// echo "<br>";
// echo "<h1> Insertion_Sort</h1>";
// echo "<br>";
// echo "<br>";

// $test_array = array(64, 0, 37, 49, -10, 76, 15);
// echo "Original Array :\n";
// echo implode(', ',$test_array );
// echo "<br>";

// echo "\n Sorted Array :\n";
// echo "<pre>";
// print_r ( insertion_Sort($test_array));
// echo "</pre>";

// echo "<br>";
// echo "<br>";
// echo "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";




//  


});
















Auth::routes();


Route::Resource('practice','PracticeController')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

































