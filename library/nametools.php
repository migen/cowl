<?php

class NameTools
{
	public static function toSlug($name)
	{
		$name = mb_strtolower($name);
		$name = str_replace(array('å', 'ä', 'ö'), array('a', 'a', 'o', 'a', 'a', 'o'), $name);
		$name = preg_replace('/\W|\s/', '-', $name);
		$name = preg_replace('/\-\-{1,}/', '-', $name);
		$name = trim($name, '-');
		return $name;
	}
}
