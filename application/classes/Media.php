<?php

class Media {

	public static function url($filepath, $cachebusting = TRUE)
	{
		if ( ! $filepath)
			return URL::base().'_media/';

		$url = URL::base().'_media/'.$filepath;

		if ($cachebusting)
		{
			// Use version number for caching if on prod or staging, else a timestamp.
			$versioned_envs = array(Kohana::PRODUCTION, KOHANA::STAGING);
			$cachebuster_string = in_array(Kohana::$environment, $versioned_envs)
				? KOHANA::APP_VERSION
				: microtime(true);

			$url .= '?'.$cachebuster_string;
		}

		return $url;
	}
}