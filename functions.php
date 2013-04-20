/* WP Content Split */

/* Checks word content of content and splits into two strings if
over specified word count. */

function content_split($word_count_limit) {
global $post;

// explode to array
$array = explode(' ', get_the_content($post->ID));
$title = get_the_title();


  	// if string length is greater than specified, run function to split it into two strings
		// check if array word count length is greater than specified
		if (count($array) < $word_count_limit){
		// optional heading echo
		// echo "<h1>".$title."</h1>";
		the_content();
		} else {

// split array into two seperate arrays at array count
// splits according to specificed slice size
$firsthalf = array_slice($array, 0, $word_count_limit);
$secondhalf = array_slice($array, $word_count_limit);

// implode arrays to strings
$firsthalf = implode(' ', $firsthalf);
$secondhalf = implode(' ', $secondhalf);

// regular expressions for HTML
$firsthalf = preg_replace('/\[.+\]/','', $firsthalf);
$firsthalf = apply_filters('the_content', $firsthalf);
$firsthalf = str_replace(']]>', ']]&gt;', $firsthalf);

$secondhalf = preg_replace('/\[.+\]/','', $secondhalf);
$secondhalf = apply_filters('the_content', $secondhalf);
$secondhalf = str_replace(']]>', ']]&gt;', $secondhalf);


// echo two seperate strings
// optional heading echo
// echo "<h1>".$title."</h1>";
echo $firsthalf;
echo "<div class='content' style='display: block; margin-top:50px; background:#ccc'>".$secondhalf."</div>";
}}
