<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/15/2017
 * Time: 9:29 PM
 */

echo "<h2> String and Method Usages </h2>";
echo strlen("Hello world!");  // Count the string
echo str_word_count("Hello world!"); // count the word of a string
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world");
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!