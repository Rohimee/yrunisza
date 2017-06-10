<?php
/*1.เปรียบเทียบว่าเหมือนกันกี่อักขระ*/
/*$number = similar_text("Testa", "Test2");
echo $number;*/
// ..................................................
/*$str = strtolower("Test");
$str2 = strtolower("Test2");
$number = similar_text($str, $str2);
echo $number;*/
//...................................................
/*2.เปรียบเทียบว่าเหมือนกันกี่เปอร์เซ็นต์*/
$number = similar_text("Test", "Test", $percent);
echo $percent;
echo "<br><hr>";
if ($percent==100) {
  echo "ผ่าน";
}elseif ($percent>=70) {
  echo "ผ่าน";
}elseif ($percent>=50) {
  echo "ปานกลาง";
}else {
  echo "ไม่ผ่าน";
}

/*จากการรันโปรแกรมจะได้ผลลัพธ์ออกมาเป็น 88.8888888889 นั่นคือ ข้อความ Test และ Test2 มีความเหมือนกัน 88.8888888889 % หากเราไม่ต้องการทศนิยมก็แค่ใส่ (int) เข้าไปหน้าตัวแปร เช่น*/
/*$number = similar_text("Test", "Test2", $percent);
echo (int)$percent;
echo "<br><hr>";
if ($percent==100) {
  echo "ผ่าน";
}elseif ($percent>=70) {
  echo "ผ่าน";
}elseif ($percent>=50) {
  echo "ปานกลาง";
}else {
  echo "ไม่ผ่าน";
}*/
//......................................................
?>
