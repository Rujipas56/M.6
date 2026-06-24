<?php
$celsius = 0; // กำหนดค่าเริ่มต้น
$fahrenheit = 0;

echo "Celsius\tFahrenheit\n";
echo "-------------------\n";

// วนลูปตราบใดที่ $celsius มีค่าน้อยกว่าหรือเท่ากับ 50
while ($celsius <= 50) {
    $fahrenheit = ($celsius * 1.8) + 32; // สูตรคำนวณตามโจทย์
    echo $celsius . " C\t= " . $fahrenheit . " F\n";
    
    $celsius += 10; // เพิ่มค่าเซลเซียสทีละ 10 ในแต่ละรอบ
}
?>
