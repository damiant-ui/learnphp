<?php
//$numbers = array(1,2,3);
//$numbers = [1,2,3];
//var_dump($numbers[1]);
//$numbers[2] = 5;
//var_dump($numbers);
//$test = [
//    'name' => 'Damian',
//    'age' => 19,
//    1,
//    2,
//    3,
//    'color' => 'red',
//    'music' => 'rock',
//    100 => 6,
//    7,
//];
//var_dump($text);
//var_dump($text['name']);

//$combined = [1,2,3] + [4,5,6,7];
//var_dump($combined);
//array_push($test, 67, 'asd', 322);
//unset($test[100]);
//var_dump($test);

//$fruits = ["Apple", "Cherry", "Pear", "Banana"];

//for($i=0;$i<count($fruits);$i++){
//    $fruit=$fruits($i);
//    var_dump($fruit)
//}

class Box{
    public $width;
    public $height;
    public $length;

    public function value(){
        return $this->width * $this->length * $this->height;
    
    }
}

$box1 = new Box();
$box1->width=1;
$box1->length=2;
$box1->height=3;

$box2 = new Box();
$box2->width=5;
$box2->length=3;
$box2->height=2;

var_dump($box1);
var_dump($box2);

$num1 =1;
$num2 =$num1;
$num1 =2;
var_dump($num1,$num2);

$box1 = new Box();
$box1->width=1;
$box2 =$box1;
$box2->width =$box1->width;
$box1->width =2;

var_dump($box1,$box2);

class MetalBox extends Box{
    
}
$metal = new MetalBox();
var_dump($metal)
?>
