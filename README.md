# Filter library for PHP
## String Filters

#### static function alpha_numeric(string $st, $exclusions = [],string $replacement = '') :string
Remove any non-alphanumeric character and any character specified in $exclusions from string
###### parameters
- string $value input string
- array|string $exclusions list of non alpha-numberic characters to allow and leave in value
- string $replacement string used to replace any character not matching the filter.

###### returns
filtered string

###### example
```
use Jahan\Filter
...
echo Filter::alpha_numeric("Hello World!", $exclusions = ['!'], $replacement = '_');	//outputs Hello_World!
```


#### static function numbers_only(string $st, $exclusions = ['.'],string $replacement = '') :string
Remove all non-numeric characters and any character specified in $exclusions.
###### parameters
- string $value input string
- array|string $exclusions list of non alpha-numberic characters to allow and leave in value
- string $replacement string used to replace any character not matching the filter.

###### returns
filtered string

###### example
```
use Jahan\Filter
...
echo Filter::numbers_only("Hello World!123.22", $exclusions = ['.']);	//outputs 123.22
```


#### static function filter(string $st,array $allowed_characters, string $replacement) :string
filter specific characters from string.
###### parameters
- string $value input string
- array|string $allowed_characters list of characters to allow to keep in the string
- string $replacement string used to replace any character not matching the filter.

###### returns
filtered string
```
use Jahan\Filter
...
echo Filter::filter("Hello World!", $allowed_characters = ['h','e'], $replacement = '');	//outputs e
//Note: allowed_characters is case sensitive.
```



# Usage
## Composer
```
php composer.phar require jahan/filter
```
