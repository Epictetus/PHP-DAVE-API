<?php
/***********************************************
DAVE PHP API
https://github.com/evantahler/PHP-DAVE-API
Evan Tahler | 2011

I am a way to test that cahce functions are working
I'll store and return a user provided variable
***********************************************/
// I'll use HASH as the variable to log by IP address;
if ($ERROR == 100)
{
	if ($CONFIG['CacheType'] == "")
	{
		$ERROR = "The cache is not configured on this server";
	}
}

if ($ERROR == 100)
{
	if (strlen($PARAMS["Hash"]) == 0)
	{
		$ERROR = "You need to provide a Hash";
	}
	else
	{
		$CacheKey = $IP."_CacheTest";
		SetCache($CacheKey,$PARAMS["Hash"]);
		$result = GetCache($CacheKey);
		$OUTPUT['CacheKey'] = $CacheKey;
		$OUTPUT['CachedResult'] = $result;
	}
}

?>