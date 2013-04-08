<?php

// ------------------------------------------------------------------------

/**
 * Has Extension
 *
 * Checks if filename has extension
 * and returns the extension or false
 *
 */
if ( ! function_exists('has_extension'))
{
	function has_extension($filename)
	{
		$exploded = explode(".", $filename);

		if(sizeof($exploded) > 1)
			return $exploded;
		else
			return false;
	}
}

// ------------------------------------------------------------------------

/**
 * Link
 *
 * Creates a link to a controller and action
 * @param string the link title
 * @param string the controller
 * @param string the action
 * @return string
 *
 */
if ( ! function_exists('anchor'))
{
	function anchor($title, $action, $controller, $params="")
	{
		return '<a href="'.site_url($controller."/".$action).'" '.$params.'>'.$title."</a>";
	}
}

// ------------------------------------------------------------------------

/**
 * Dropdown
 *
 * Creates a dropdown based on model get_all
 * It will set "id" as array key.
 * @param database object result
 * @return array
 *
 */
if ( ! function_exists('dropdown'))
{
	function dropdown($database_object, $key, $value)
	{
		$return = array();
		foreach($database_object as $object){
			$return[$object->$key] = $object->$value;
		}
		return $return;
	}
}

// ------------------------------------------------------------------------

/**
 * Is Ajax
 *
 * Returns true if is a ajax request, false if not
 * 
 * @return boolean
 */
if ( ! function_exists('is_ajax')) {
	function is_ajax() {
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
	}
}