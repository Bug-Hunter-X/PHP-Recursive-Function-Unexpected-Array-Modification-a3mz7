# PHP Recursive Function Bug
This repository demonstrates a common bug in PHP involving unexpected array modifications within a recursive function.  The function `processData` intends to process an array recursively, splitting string values containing commas into arrays. However, it modifies the original array in place during the recursive calls, leading to incorrect results. The solution demonstrates a safer approach using a new array to prevent this issue.

## Bug
The bug lies in directly modifying the `$data` array within the loop. When the function recursively calls itself, it modifies the original array, causing unexpected behavior and potentially corrupting the data structure. 

## Solution
The solution corrects the bug by creating a new array and assigning the processed values to it instead of directly modifying the original array. This approach prevents unintended side effects in the recursive calls.