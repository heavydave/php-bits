<?php

function array_to_readable_string(array $array = array()): string
{
	$array = array_filter($array);	//remove empty array elements
		
	if(count($array) > 1)
	{
		$last = array_pop($array);		//get last element
		return implode(', ', $array) . ' and ' . $last;
	}
	elseif(count($array) == 1)
	{
		return $array[0];
	}
	else
	{
		return '';	//empty string if $array is empty
	}
}

//- end of file