# Read-CSV
It reads CSV files and brings you back an associative array to play with! 

## How to Use it
```php
$file = "/path/to/your/file";
$csv = new Read_CSV($file);
$data = $csv->get();
        
```

Now you can do anything with your data ,
```php
var_dump($data);
```

here is the result
```php
array (size=3)
  0 => 
    array (size=4)
      'name' => string 'Mistix' (length=6)
      'age' => string '12' (length=2)
      'programming_language' => string 'PHP' (length=3)
      'links' => string 'stickybubble.tk' (length=15)
  1 => 
    array (size=4)
      'name' => string 'Rifat' (length=5)
      'age' => string '10' (length=2)
      'programming_language' => string 'C++' (length=3)
      'links' => string 'saficloud.com' (length=13)
  2 => 
    array (size=4)
      'name' => string 'Alper' (length=5)
      'age' => string '30' (length=2)
      'programming_language' => string 'Java' (length=4)
      'links' => string 'storygam.com' (length=12)
      
```
enjoy

