<?php



function isActive(string $routeName){
	return null !== request()->segment(2) && request()->segment(2) == $routeName ? 'active' : '';
}


function getYoutubeId($url) 
{
    $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
    preg_match($pattern, $url, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}

function slug(string $name){
	return strtolower(trim(str_replace(' ', '_' ,$name)));
}