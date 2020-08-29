<?php

/**
 * Converts numbers in string from english to persian Arabic numerals.
 *
 * @param  string $str Arbitrary text
 * @return string
 */
function english2persian($str) {
    $persian = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    $english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    return str_replace($english, $persian, $str);
}

/**
 * Converts numbers from eastern to western Arabic numerals.
 *
 * @param  string $str Arbitrary text
 * @return string Text with eastern Arabic numerals converted into western Arabic numerals.
 */
function persian2english($str) {
    $persian = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    $english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    return str_replace($persian, $english, $str);
}

/*/ Test
	echo arabic_w2e("1234567890"); // Outputs: ١٢٣٤٥٦٧٨٩٠
	echo arabic_e2w("١٢٣٤٥٦٧٨٩٠"); // Outputs: 1234567890
//*/
