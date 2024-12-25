```php
function processData(array $data): array {
  $processedData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      $processedData[$key] = explode(',', $value);
    } else {
      $processedData[$key] = $value; //copy all other values
    }
  }
  return $processedData;
}

$myData = ['a' => 1, 'b' => 'apple,banana,cherry', 'c' => ['d' => 4, 'e' => 'grape,orange']];
$processedData = processData($myData);
print_r($processedData);
```