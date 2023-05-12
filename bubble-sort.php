<?php
/**
 * @param array $arr
 * @return array
 */
function bubbleSort(array $arr): array
{
    $count = count($arr);
    // Iterate through all array elements
    for ($i = 0; $i < $count - 1; $i++) {
        // Last i element is already in place
        for ($j = 0; $j < $count - $i - 1; $j++) {
            // Iterate through array from 0 to n-i-1
            // Swap if the element found is greater
            // than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                // swap arr[j] and arr[j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = array(5, 1, 2, 4, 8, 12, 60, 14, 3);
$arr = bubbleSort($arr);
echo "Sorted array: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
