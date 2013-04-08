<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ------------------------------------------------------------------------

if ( ! function_exists('debug'))
{
	function debug($str, $exit=false, $ret=false)
	{
		$return = "";
		if($ret) {
			$return  = "<code>";
			$return .= var_dump($str);
			$return .= "</code>";
			return $return;
		} else {
			echo $return;
		}
		
		if($exit)
			exit();
	}
}


/* End of file debug_helper.php */
/* Location: ./application/helpers/debug_helper.php */