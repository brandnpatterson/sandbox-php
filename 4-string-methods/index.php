<!--

    Common String Methods used in PHP and JavaScipt

 -->


<!--
    Substring
    PHP: substr(string, start, end,)
    JS: String.substr(start, end)
-->
<?php
$output = 'Hello';
$substr = substr($output, 1, 2);

// echo $substr;

?>
<script type="text/javascript">
    var output = 'Hello';
    var substr = output.substr(1, 2);
    // console.log(substr);
</script>


<!--
    String Length
    PHP: strlen(string)
    JS: String.length
-->
<?php
$output = 'Hello World';
$strlen = strlen($output);

// echo $strlen;

?>
<script type="text/javascript">
    var output = 'Hello World';
    var strlen = output.length;
    // console.log(strlen);
</script>


<!--
    String Position
    PHP: strpos(haystack, needle)
    JS: String.indexOf(needle)
-->
<?php
$output = 'Hello World';
$strpos = strpos($output, 'o');

// echo $strpos;

?>
<script type="text/javascript">
    var output = 'Hello World';
    var strpos = output.indexOf('o');
    // console.log(strpos);
</script>


<!--
    String Position from End
    PHP: strrpos(haystack, needle)
    JS: String.lastIndexOf(needle)
-->
<?php
$output = 'Hello World';
$strrpos = strrpos($output, 'o');

// echo $strrpos;

?>
<script type="text/javascript">
    var output = 'Hello World';
    var strrpos = output.lastIndexOf('o');
    // console.log(strrpos);
</script>


<!--
    Trim Whitespace
    PHP: trim(string)
    JS: String.trim(string)
-->
<?php
// removes whitespace between words
$output = 'Hello          World       1      ';
$trimmed = trim($output);

// echo $trimmed;

?>
<script type="text/javascript">
    // does not remove whitespace between words
    var output = 'Hello          World       1      ';
    var trimmed = output.trim();
    // console.log(trimmed);
</script>


<!--
    String to Uppercase
    PHP: strtoupper(string)
    JS: String.toUpperCase()
-->
<?php
// removes whitespace between words
$output = 'Hello World';
$strtoupper = strtoupper($output);

// echo $strtoupper;

?>
<script type="text/javascript">
    var output = 'Hello World';
    var strtoupper = output.toUpperCase();
    // console.log(strtoupper);
</script>


<!--
    String to Lowercase
    PHP: strtolower(string)
    JS: String.toLowerCase()
-->
<?php
$output = 'Hello World';
$strtolower = strtolower($output);

// echo $strtolower;

?>
<script type="text/javascript">
    var output = 'Hello World';
    var strtolower = output.toLowerCase();
    // console.log(strtolower);
</script>


<!--
    Capitalize Words in String
    PHP: ucwords(string)
    JS: String.replace(regex, function(i) { return i.toLowerCase })
-->
<?php
$output = 'Hello World';
$ucwords = ucwords($output);

// echo $ucwords;

?>
<script type="text/javascript">
    var output = 'Hello World';

    var ucwords = output.replace(/\b\w/g, function(letter) {
        return letter.toUpperCase();
    });

    // console.log(ucwords);
</script>


<!--
    Replace value in String
    PHP: str_replace(string, firstSubstr, secondSubstr)
    JS: String.replace(firstSubstr, secondSubstr)
-->
<?php
$output = 'Hello World';
$str_replace = str_replace($output, 'Hello', 'Hola');

// echo $str_replace;

?>
<script type="text/javascript">
    var output = 'Hello World';

    var str_replace = output.replace('Hello', 'Hola');

    // console.log(str_replace);
</script>


<!--
    Check if value is a String
    PHP: is_string(string) @returns 1 if true 0 if false
    JS: typeof String === 'string' @returns true or false
-->
<?php
$output = 'Hello World';
$is_string = is_string($output);

// echo $is_string;

$values = array(12345, '2', 'three', false, 'forty two');

// for ($i = 0; $i < count($values); $i++) {
//     if (is_string($values[$i])) {
//         echo "{$values[$i]} is a string <br />";
//     }
// }
// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "$value is a string <br />";
//     }
// }
?>
<script type="text/javascript">
    var output = 'Hello World';

    var is_string = typeof output === 'string';

    // console.log(is_string);

    var values = [12345, '2', 'three', false, 'forty two'];

    // for
    // for (var i = 0; i < values.length; i++) {
    //     if (typeof values[i] === 'string') {
    //         console.log(`${values[i]} is a string`);
    //     }
    // }

    // .forEach()
    // values.forEach(function(value) {
    //     if (typeof value === 'string') {
    //         console.log(`${value} is a string`);
    //     }
    // });
</script>


<!--
    Compress a String
    PHP: compress(string)
    JS: no native comparison
-->
<?php
$output = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$compress = gzcompress($output);

// echo $compress;

$uncompress = gzuncompress($compress);

// echo $uncompress;

?>
<script type="text/javascript">
    // no native comparison
</script>
