```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      //Attempting to split a string by a comma
       $data[$key] = explode(',', $value);
    }
  }
  return $data;
}

$myData = ['a' => 1, 'b' => 'apple,banana,cherry', 'c' => ['d' => 4, 'e' => 'grape,orange']];
$processedData = processData($myData);
print_r($processedData);
```