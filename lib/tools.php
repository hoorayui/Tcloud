<?php
function get_instance($classname)
{
	global $instance;
	if($instance['$classname'])
	{
		return $instance['$classname'];
	}
	else
	{
		return 1;
	}
}