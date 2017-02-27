# Read-CSV
It reads CSV files and brings you back an associative array  :rocket: to play with! 

## How to Use it
```php
$file = "/path/to/your/file";
$csv = new Read_CSV($file);
$data = $csv->get();
        
```
For example lets say you have something like this ... 
<br/>
<img src="https://raw.githubusercontent.com/fadsel/Read-CSV/master/test.png" width="500" alt="Read CSV Fadsel"/>

Now if you do this ,

```php
$file = "/path/to/your/file";
$csv = new Read_CSV($file);
$data = $csv->get();
var_dump($data);
```

You will get this as the result
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
Awesome anha!

## Side Note
<a href="https://play.google.com/store/apps/details?id=com.fadsel.stickybubble">
<img src="https://raw.githubusercontent.com/fadsel/Read-CSV/master/sticky-bubble-cover2.jpg" width="800"/>
</a>

## License
<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">Read CSV</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://stickybubble.tk" property="cc:attributionName" rel="cc:attributionURL">Sticky Bubble , Android Game</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br />Permissions beyond the scope of this license may be available at <a xmlns:cc="http://creativecommons.org/ns#" href="https://saficloud.com/legal" rel="cc:morePermissions">saficloud.com/legal</a>.

Enjoy

