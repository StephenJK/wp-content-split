# WP Content Split
Wordpress content split takes the page or post content and splits it into two strings after a specified word count. This was built for integration with jQuery, so a “click to read more” function can be added to the split content.

## Usage Instructions
 1. Copy the functions code into the bottom of your themes functions.php file.
 2.	Invoke the function on your page or posts template or loop files by replacing “<?php the_content(); ?>” with "<?php content_split(word count here);?>" . 
 3.	Define in the brackets the word count you wish to split the content after, for example to split it after 100 words: <?php content_split(100);?> . 

### Optional H1 Include
 1. Uncomment the optional H1 echo in the functions code.
 2. Comment out "<?php the_title(); ?>" in your themes template or loop files.
