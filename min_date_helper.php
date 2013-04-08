<?php
// ------------------------------------------------------------------------

/**
 * Get Day
 *
 * Returns the day of the received sring
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('get_day'))
{
	function get_day($mysql_time = '')
	{
		$time = explode("-", $mysql_time);
		return $time[2];
	}
}


// ------------------------------------------------------------------------

/**
 * Get Year
 *
 * Returns the year of the received sring
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('get_year'))
{
	function get_year($mysql_time = '')
	{
		$time = explode("-", $mysql_time);
		return $time[0];
	}
}


// ------------------------------------------------------------------------

/**
 * Get Hour
 *
 * Returns the hour of the received sring
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('get_hour'))
{
	function get_hour($mysql_time = '')
	{
		$time = explode(":", $mysql_time);
		return $time[0];
	}
}


// ------------------------------------------------------------------------

/**
 * Get Minute
 *
 * Returns the hour of the received sring
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('get_minute'))
{
	function get_minute($mysql_time = '')
	{
		$time = explode(":", $mysql_time);
		return $time[1];
	}
}


// ------------------------------------------------------------------------

/**
 * Get HourMinute
 *
 * Returns the hour of the received sring
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('get_hour_minute'))
{
	function get_hour_minute($mysql_time = '')
	{
		$time = explode(":", $mysql_time);
		return $time[0].":".$time[1];
	}
}


// ------------------------------------------------------------------------

/**
 * MySQL to BR
 *
 * Returns the converted mysql date string
 * to portuguese_br standards (d/m/Y) 
 *
 * @access	public
 * @param	string	mysql time
 * @return	string
 */	
if ( ! function_exists('mysql_br'))
{
	function mysql_br($mysql_time = '')
	{
		$time = explode("-", $mysql_time);
		return $time[2]."/".$time[1]."/".$time[0];
	}
}

// ------------------------------------------------------------------------

/**
 * BR to MySQL
 *
 * Returns the converted mysql date string
 * from mysql_date standard (Y-d-m) to portuguese_br standards (d/m/Y) 
 *
 * @access	public
 * @param	string	brazillian default style
 * @return	string
 */	
if ( ! function_exists('br_mysql'))
{
	function br_mysql($br_time = '')
	{
		$time = explode("/", $br_time);
		return $time[2]."-".$time[1]."-".$time[0];
	}
}

// ------------------------------------------------------------------------

/**
 * Get MySQL now datetime
 *
 * Returns the converted mysql date string
 * from mysql_date standard (Y-d-m) to portuguese_br standards (d/m/Y) 
 *
 * @access	public
 * @param	string	brazillian default style
 * @return	string
 */	
if ( ! function_exists('now_datetime'))
{
	function now_datetime()
	{
		return date( 'Y-m-d H:i:s', time() );
	}
}