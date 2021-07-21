<?php

if ($args['block_type'] == 'flexible') :
	$field = 'the_sub_field';
else :
	$field = 'the_field';
endif;

$field('test');
echo '</br>' . $field;