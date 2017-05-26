<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:05 PM
 */
$known = "Fred";
$query = "Phred";

# Metaphone better than soundex

if (soundex($known) == soundex($query)) {
    print "soundex: {$known} sounds like {$query} \n";
}
else {
    print "soundex: {$known} doesn't sound like {$query} \n";
}
if (metaphone($known) == metaphone($query)) {
    print "metaphone: {$known} sounds like {$query} \n";
}
else {
    print "metaphone: {$known} doesn't sound like {$query} \n";
}

echo "\n";

$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);



# The Levenshtein algorithm calculates the similarity of two strings based on how many
# characters you must add, substitute, or remove to make them the same.
$similarity = levenshtein("cat", "cot");
echo "\n\n";
echo $similarity;