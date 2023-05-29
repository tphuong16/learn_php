<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
echo "Bài 1: ";
function checkEven($number){
if($number % 2 == 0 ){
    echo "$number là số chẵn";
} else{
    echo "$number là số lẻ";
} 
}
$number = 5;
checkEven($number);
echo "<br>";
/*2. Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
*/
echo "Bài 2: ";
function arrangeRank($avgscore){
    if($avgscore >= 9.0 ){
        echo "Học lực xuất sắc";
    } elseif($avgscore >= 8.0 ){
        echo "Học lực Giỏi";
    } elseif($avgscore >= 6.5 ){
        echo "Học lực Khá";
    } elseif($avgscore >= 5.0 ){
        echo "Học lực Trung Bình";
    } else {
        echo "Học lực Yếu";
    }   
}
$midtermscore = 7;
$finaltermscore = 9.5;
$avgscore = ($midtermscore * 0.3) + ($finaltermscore * 0.7);
arrangeRank($avgscore);
echo "<br>";
//3.Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ
echo "Bài 3: ";
function  checkYear($year){
    if ($year % 2 == 0){
        echo "Năm $year là năm chẵn";
    } else {
        echo "Năm $year là năm lẻ";
    }
}
$year = 2023;
checkYear($year);
echo "<br>";
echo "Bài 4: ";
//4. Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumber() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . " ";
    }
}
printNumber();
echo "<br>";
//5. Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
echo "Bài 5: ";
function showNumbers(){
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<strong>$i</strong> ";
        } else {
            echo "$i ";
        }
    }
}
showNumbers();
echo "<br>";
//6.  Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
echo "Bài 6: ";
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function printYear() {
    global $nam; //thêm từ khóa global trước biến $nam để cho phép hàm printYear() truy cập vào biến nằm ngoài phạm vi của nó.
    foreach ($nam as $namhientai) {
        echo $namhientai . " ";
    }
}
printYear();
