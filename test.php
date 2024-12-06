<?php

function solution(array $numbers): int {
    $count = 0; // Biến đếm số lượng cặp thoả mãn
    $n = count($numbers); // Độ dài của mảng

    // Lặp qua tất cả các cặp (i, j)
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $sum = $numbers[$i] + $numbers[$j];
            $powerOfTwo = isPowerOfTwo($sum); // Kiểm tra tổng có phải lũy thừa của 2 không
            if ($powerOfTwo) {
                $count++;
                // echo "Cặp ($i, $j) có kết quả $numbers[$i] + $numbers[$j] = $sum = 2^$powerOfTwo\n";
            }
        }
    }

    return $count;
}

// Hàm kiểm tra một số có phải là lũy thừa của 2 hay không
function isPowerOfTwo($num) {
    if ($num <= 0) return false;
    $power = log($num, 2); // Tính log cơ số 2 của số đó
    return ($power == floor($power)) ? floor($power) : false; // Kiểm tra lũy thừa nguyên
}

// Test
// $numbers = [2, 2, 6];
// $numbers = [1, -1, 3, 5, -8192, -8192, 8192, 4096, 0, 2048, -2048];
// $numbers = [128, 256, 512, 1024, -1024, -512, -256, -128];
$numbers = [20000, -16384, 128, 256, 512, 1024, -1024, -512, -256, -128, -8192, 16384, 8192, 1024, -1024, 32768, -32768, 16384, -16384, 8192, -8192];

echo "Kết quả solution(numbers) = " . solution($numbers) . "\n";