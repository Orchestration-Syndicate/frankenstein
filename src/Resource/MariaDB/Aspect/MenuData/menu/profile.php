<?php
namespace Frankenstein\Resource\MariaDB\Aspect\MenuData\menu;

use \Approach\Resource\Aspect\Aspect;
use \Approach\Resource\MariaDB\Aspect\quality as quality_meta;
use Frankenstein\Resource\MariaDB\Aspect\MenuData\menu\quality as SelfQuality;


class profile
{
static array $profile = [
	Aspect::operation => [
	],
	Aspect::field => [
	],
	Aspect::quality => [
		SelfQuality::NAME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::NAME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::NAME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::NAME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::NAME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::NAME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::NAME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::NAME],
		],
		SelfQuality::DATABASE => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::DATABASE],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::DATABASE],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::DATABASE],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::DATABASE],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::DATABASE],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::DATABASE],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::DATABASE],
		],
		SelfQuality::SERVER_NAME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::SERVER_NAME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::SERVER_NAME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::SERVER_NAME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::SERVER_NAME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::SERVER_NAME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::SERVER_NAME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::SERVER_NAME],
		],
		SelfQuality::RESOURCE_PROTO => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::RESOURCE_PROTO],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::RESOURCE_PROTO],
		],
		SelfQuality::SERVER_CLASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::SERVER_CLASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::SERVER_CLASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::SERVER_CLASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::SERVER_CLASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::SERVER_CLASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::SERVER_CLASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::SERVER_CLASS],
		],
		SelfQuality::RESOURCE_CLASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::RESOURCE_CLASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::RESOURCE_CLASS],
		],
		SelfQuality::CONNECTOR_CLASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CONNECTOR_CLASS],
		],
	],
	Aspect::quantity => [
	],
	Aspect::map => [
	],
	Aspect::state => [
	],
	Aspect::access => [
	],
];
public static function GetProfile(){
	return static::$profile;
}
public static function GetCases(){
	return [
		Aspect::quality => SelfQuality::_case_map,
	];
}
public static function GetIndices(){
	return [
		Aspect::quality => SelfQuality::_index_map,
	];
}

}
