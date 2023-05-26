<?php
//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findValueMaxMin($array) {
    $min = min($array);
    $max = max($array);
    echo "5. ";
    echo "Giá trị nhỏ nhất trong mảng là: $min <br>";
    echo "Giá trị lớn nhất trong mảng là: $max <br>";
}
$array = [16, 1, 2, 86, 29]; // Thay đổi giá trị của mảng ở đây để tìm giá trị lớn nhất và nhỏ nhất khác
findValueMaxMin($array);

//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrangeArrayInOrderIncreasing() {
    $numbers = array(10, 2, 11, 33, 55, 29);
    sort($numbers);
    echo "6. Mảng sau khi sắp xếp:  ";
    foreach ($numbers as $value) {
        echo $value . " ," ;
    }
}
arrangeArrayInOrderIncreasing();
echo "<br>";

//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương. 
function calculate($n) {

    if ($n > 0) {
        return $n * calculate ( $n - 1 );
    } else {
        return 1;
    }
}
$a = 5;
echo ("7. Giai thừa của " . $a . " là: " . calculate( $a ) . "<br>");

//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước
echo "8. ";
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
        echo $i . ", " ; 
    }
}
show_prime(1, 10);
echo "<br>";

//9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateSum(){
    $arr = array(10, 11, 15, 16, 29);
    $sum = 0;
    foreach($arr as $number)
    {
        $sum += $number;
    }
    return $sum;
}

$sum = calculateSum();
echo "9. Tổng các số trong mảng là: " . $sum ;
echo "<br>";

//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
    }
}
 
echo ("10. 5 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 5; $i ++) {
    echo (fibonacci ( $i ) . ", ");
}
echo "<br>";

//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function armstrongNumber($number) {
    $total = 0;
    $num = $number;
    $length = strlen($number);// tính độ dài chuỗi

    while ($num > 0) {
        $remainder = $num % 10;//phép chia lấy dư
        $total += pow($remainder, $length);//pow: tính lập phương của $reminder vs số mũ là $length sau đố cộng vào tổng $total
        $num = (int)($num / 10);// update num :10 để loại bỏ chữ số cc đã đc xử lý
    }
//lặp lại cho đến $num = 0
    return $total == $number;
}

$number = 122; // Số cần kiểm tra
if (armstrongNumber($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "11. $number không là số Armstrong.";
}
echo "<br>";

//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    // Kiểm tra nếu vị trí chèn lớn hơn độ dài mảng, thì chèn vào cuối mảng
    if ($position >= count($array)) {
        $array[] = $element;//vị trí chèn >= thì chèn vào cuối mảng
    } else {
        // Nếu vị trí chèn < độ dài mảng . 
        array_splice($array, $position, 0, $element);
    }
    return $array;
}

$myArray = [1, 2, 3, 4, 5];  // Mảng ban đầu
$newElement = 29;             // Phần tử cần chèn
$insertPosition = 1;          // Vị trí chèn

$resultArray = insertElement($myArray, $newElement, $insertPosition);

echo "12. Mảng sau khi chèn: ";
print_r($resultArray);
echo "<br>";

//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    $result = array();//mảng rỗng chứa phần tử duy nhất
    foreach ($array as $element) //lặp qua từng phần tử trong $array
    {
        if (!in_array($element, $result)) //in_array:ktra phần tử đã tồn tại trong $result
        {
            $result[] = $element;
        }
    }
    return $result;
}
$myArray = [16, 1, 2, 29, 86, 29];  // Mảng ban đầu
$uniqueArray = removeDuplicates($myArray);
echo "13. Mảng sau khi loại bỏ các phần tử trùng lặp: ";
print_r($uniqueArray);
echo "<br>";

//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $positions = array();
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        if ($array[$i] === $element) {
            $positions[] = $i;
        }
    }
    return $positions;
}
$myArray = [16, 1, 2, 86, 29];  // Mảng ban đầu
$searchElement = 2; // Phần tử cần tìm
$elementPositions = findElementPosition($myArray, $searchElement);

if (empty($elementPositions)) {
    echo "14. Phần tử không tồn tại trong mảng.";
} else {
    echo "14. Vị trí của phần tử $searchElement trong mảng: ";
    foreach ($elementPositions as $position) {
        echo $position . " " . "<br>";
    }
}

//15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    $reversedString = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}
$myString = "16, 1, 2, 86, 29";  // Chuỗi ban đầu
$reversedString = reverseString($myString);
echo "15. Chuỗi sau khi đảo ngược: " . $reversedString . "<br>";

//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($arr)
{
    return count($arr);
}
// Mảng đầu vào
$numbers = array(16, 1, 2, 86, 29);
// Tính số lượng phần tử trong mảng
$count = countElements($numbers);
// In số lượng phần tử
echo "16. Số lượng phần tử trong mảng: " . $count . "<br>";

//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str) {
    // Loại bỏ khoảng trắng và chuyển đổi chuỗi về chữ thường
    $str = strtolower(str_replace(' ', '', $str));
    // Lấy độ dài của chuỗi
    $length = strlen($str);
    // Duyệt qua nửa đầu và nửa cuối của chuỗi
    for ($i = 0; $i < $length / 2; $i++) {
        // So sánh ký tự hiện tại với ký tự đối xứng
        if ($str[$i] !== $str[$length - $i - 1]) {
            return false; // Không phải là chuỗi Palindrome
        }
    }
    return true; // Là chuỗi Palindrome
}
// Kiểm tra chuỗi
$input = "Wow";
if (isPalindrome($input)) {
    echo "17. Chuỗi \"$input\" là chuỗi Palindrome. <br>";
} else {
    echo "17. Chuỗi \"$input\" không phải là chuỗi Palindrome. <br>";
}

//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element)
{
    $count = 0;

    // Duyệt qua từng phần tử trong mảng
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}
// Mảng đầu vào
$array = [16, 1, 2, 86, 16, 29];
// Phần tử cần đếm số lần xuất hiện
$element = 16;
// Đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($array, $element);
echo "18. Số lần xuất hiện của phần tử $element trong mảng là: $occurrences  <br>";

//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrayDescending($array)
{
    // Sử dụng hàm rsort() để sắp xếp mảng theo thứ tự giảm dần
    rsort($array);
    return $array;
}
// Mảng đầu vào
$array = [16, 1, 2, 86, 29];
// Sắp xếp mảng theo thứ tự giảm dần
$sortedArray = arrayDescending($array);
echo "19. Mảng sau khi sắp xếp theo thứ tự giảm dần:";
print_r($sortedArray);
echo "<br>";

//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($array, $element, $position) {
    if ($position === 'start') {
        array_unshift($array, $element);
    } elseif ($position === 'end') {
        $array[] = $element;
    }
    return $array;
}
$array = [16, 1, 2, 86];
$element = 29;
$position = 'end';
$result = addElementToArray($array, $element, $position);
echo "20. ";
print_r($result);
echo "<br>";

// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array)
{
    // Kiểm tra độ dài của mảng
    $length = count($array);
    if ($length < 2) {
        return "Không tìm thấy số lớn thứ hai.";
    }
    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($array);
    // Lấy phần tử lớn thứ hai
    return $array[1];
}
// Mảng đầu vào
$array = [16, 1, 2, 86, 29];
// Tìm số lớn thứ hai trong mảng
$secondLargest = findSecondLargest($array);
echo "21. Số lớn thứ hai trong mảng là: $secondLargest <br> ";

//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "22.";
function gcd($a, $b) {
    if ($b == 0) {
      return $a;
    } else {
      return gcd($b, $a % $b);
    }
  }
  function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
  }
  $a = 3;
  $b = 12;
  // Tìm ước số chung lớn nhất
  $gcd = gcd($a, $b);
  echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";
  // Tìm bội số chung nhỏ nhất
  $lcm = lcm($a, $b);
  echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm . "<br>";

//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "23.";
function isPerfectNumber($number)
{
    // Kiểm tra xem số có phải là số nguyên dương hay không
    if ($number <= 0) {
        return false;
    }
    $sum = 0;
    // Tìm các ước số và tính tổng
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }
    // Kiểm tra xem tổng các ước số có bằng chính số đó hay không
    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}
// Số cần kiểm tra
$number = 28;
// Kiểm tra xem số có là số hoàn hảo hay không
if (isPerfectNumber($number)) {
    echo " $number là số hoàn hảo. <br>";
} else {
    echo "$number không là số hoàn hảo. <br>";
}

//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array)
{
    // Khởi tạo biến lưu giá trị số lẻ lớn nhất
    $largestOdd = null;

    // Duyệt qua mỗi phần tử trong mảng
    foreach ($array as $number) {
        // Kiểm tra xem phần tử có là số lẻ và lớn hơn số lẻ lớn nhất hiện tại hay không
        if ($number % 2 === 1 && ($largestOdd === null || $number > $largestOdd)) {
            $largestOdd = $number;
        }
    }
    return $largestOdd;
}

// Mảng đầu vào
$array = [16, 1, 2, 86, 29];

// Tìm số lẻ lớn nhất trong mảng
$largestOddNumber = findLargestOddNumber($array);

if ($largestOddNumber !== null) {
    echo "24. Số lẻ lớn nhất trong mảng là: $largestOddNumber . <br>";
} else {
    echo "24. Không tìm thấy số lẻ trong mảng. <br>";
}

//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
// câu này em chưa biết làm ạ

//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($array)
{
    // Khởi tạo biến lưu giá trị số dương lớn nhất
    $largestPositive = null;

    // Duyệt qua mỗi phần tử trong mảng
    foreach ($array as $number) {
        // Kiểm tra xem phần tử có là số dương và lớn hơn số dương lớn nhất hiện tại hay không
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }

    return $largestPositive;
}

// Mảng đầu vào
$array = [-16, 1, 2, 86, -29];

// Tìm số dương lớn nhất trong mảng
$largestPositiveNumber = findLargestPositiveNumber($array);

if ($largestPositiveNumber !== null) {
    echo "26. Số dương lớn nhất trong mảng là: $largestPositiveNumber <br>";
} else {
    echo "26. Không tìm thấy số dương trong mảng. <br>";
}

//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function largestNegativeNumber($array){
    //Khởi tạo giá trị biến lưu giá trị âm lớn nhất
    $largestNegative = null;
    //Duyệt qua mỗi phần tử trong mảng
    foreach ($array as $number){
        //KIểm tra xem phần tử có phải số âm và lớn hơn số âm lớn nhất hiện tại hay không
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)){
            $largestNegative = $number;            
        }
    }
    return $largestNegative;
}

// Mảng đầu vào
$array = [-16, 1, 2, 86, -29];
// Tìm số âm lớn nhất trong mảng
$largestNegative = largestNegativeNumber($array);

if ($largestNegative !== null) {
    echo "27. Số âm lớn nhất trong mảng là: $largestNegative <br>";
} else {
    echo "27. Không tìm thấy số âm trong mảng. <br>";
}

//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n
function sum_odd_numbers($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 29;
$sum = sum_odd_numbers($n);
echo "28. Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
echo "<br>";

//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function findPerfectSquares($start, $end)
{
    $perfectSquares = array_filter(range($start, $end), function($num) {
        return sqrt($num) == (int)sqrt($num);
    });
    // Trả về mảng các số chính phương
    return $perfectSquares;
}
// Khoảng bắt đầu và kết thúc
$start = 1;
$end = 29;
$perfectSquares = findPerfectSquares($start, $end);
// Gọi hàm findPerfectSquares để tìm số chính phương trong khoảng
echo "29. Các số chính phương trong khoảng $start đến $end là: " . implode(', ', $perfectSquares);
echo "<br>";

//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
function checkSubstring($str, $substring) {
    if (strpos($str, $substring) !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Thu Phuong";
$substring = "Thu";
// Kiểm tra xem $substring có phải là chuỗi con của $string hay không
if (checkSubstring($string, $substring)) {
    echo "30. Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {
    echo "30. Chuỗi '" . $substring . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}