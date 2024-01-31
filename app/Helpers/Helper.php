<?php
namespace App\Helpers;
class Helper{
public static function generateId($model,$student_id,$lenght=4,$prefix){
    $check =$model::orderBy('id','desc')->first();

    if (!$check) {
        # code...
        $og_lenght=$lenght;
        $last_number='';

    }else{
        $code=substr($check->$student_id,strlen($prefix)+1);

        $actual_last_number=($code/1)*1;

        $increament_last_number=$actual_last_number+1;
        $last_number_lenght=strlen($increament_last_number);
        $og_lenght=$lenght-$last_number_lenght;
        $last_number=$increament_last_number;
    }
    $zeros='';
    for ($i=1; $i < $og_lenght ; $i++) {
        # code...
        $zeros.='0';
    }
return $prefix."/".$zeros.$last_number;
}
}
?>
