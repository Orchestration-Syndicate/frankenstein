<?php
namespace Frankenstein\Resource\MariaDB\Aspect\MenuData;

use \Approach\Resource\Aspect\Aspect;
use \Approach\Resource\MariaDB\Aspect\quality as quality_meta;
use Frankenstein\Resource\MariaDB\Aspect\MenuData\quality as SelfQuality;


class profile
{
static array $profile = [
	Aspect::operation => [
	],
	Aspect::field => [
	],
	Aspect::quality => [
		SelfQuality::HOST => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::HOST],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::HOST],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::HOST],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::HOST],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::HOST],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::HOST],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::HOST],
		],
		SelfQuality::USER => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::USER],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::USER],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::USER],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::USER],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::USER],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::USER],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::USER],
		],
		SelfQuality::PASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::PASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::PASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::PASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::PASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::PASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::PASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::PASS],
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
		SelfQuality::PORT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::PORT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::PORT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::PORT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::PORT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::PORT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::PORT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::PORT],
		],
		SelfQuality::SOCKET => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::SOCKET],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::SOCKET],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::SOCKET],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::SOCKET],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::SOCKET],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::SOCKET],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::SOCKET],
		],
		SelfQuality::PERSISTENT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::PERSISTENT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::PERSISTENT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::PERSISTENT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::PERSISTENT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::PERSISTENT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::PERSISTENT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::PERSISTENT],
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
