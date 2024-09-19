<?php
namespace Frankenstein\Resource\MariaDB\Aspect\TestData\test\names;

use \Approach\Resource\Aspect\Aspect;
use \Approach\Resource\MariaDB\Aspect\field as field_meta;
use Frankenstein\Resource\MariaDB\Aspect\TestData\test\names\field as SelfField;
use \Approach\Resource\MariaDB\Aspect\quality as quality_meta;
use Frankenstein\Resource\MariaDB\Aspect\TestData\test\names\quality as SelfQuality;


class profile
{
static array $profile = [
	Aspect::operation => [
	],
	Aspect::field => [
		SelfField::id => [
			field_meta::label => SelfField::_approach_field_profile_[ field_meta::label ][ SelfField::id],
			field_meta::type => SelfField::_approach_field_profile_[ field_meta::type ][ SelfField::id],
			field_meta::default => SelfField::_approach_field_profile_[ field_meta::default ][ SelfField::id],
			field_meta::source_type => SelfField::_approach_field_profile_[ field_meta::source_type ][ SelfField::id],
			field_meta::source_default => SelfField::_approach_field_profile_[ field_meta::source_default ][ SelfField::id],
			field_meta::nullable => SelfField::_approach_field_profile_[ field_meta::nullable ][ SelfField::id],
			field_meta::description => SelfField::_approach_field_profile_[ field_meta::description ][ SelfField::id],
			field_meta::constraint => SelfField::_approach_field_profile_[ field_meta::constraint ][ SelfField::id],
			field_meta::accessor => SelfField::_approach_field_profile_[ field_meta::accessor ][ SelfField::id],
			field_meta::reference_to => SelfField::_approach_field_profile_[ field_meta::reference_to ][ SelfField::id],
			field_meta::primary_accessor => SelfField::_approach_field_profile_[ field_meta::primary_accessor ][ SelfField::id],
		],
		SelfField::name => [
			field_meta::label => SelfField::_approach_field_profile_[ field_meta::label ][ SelfField::name],
			field_meta::type => SelfField::_approach_field_profile_[ field_meta::type ][ SelfField::name],
			field_meta::default => SelfField::_approach_field_profile_[ field_meta::default ][ SelfField::name],
			field_meta::source_type => SelfField::_approach_field_profile_[ field_meta::source_type ][ SelfField::name],
			field_meta::source_default => SelfField::_approach_field_profile_[ field_meta::source_default ][ SelfField::name],
			field_meta::nullable => SelfField::_approach_field_profile_[ field_meta::nullable ][ SelfField::name],
			field_meta::description => SelfField::_approach_field_profile_[ field_meta::description ][ SelfField::name],
			field_meta::constraint => SelfField::_approach_field_profile_[ field_meta::constraint ][ SelfField::name],
			field_meta::accessor => SelfField::_approach_field_profile_[ field_meta::accessor ][ SelfField::name],
			field_meta::reference_to => SelfField::_approach_field_profile_[ field_meta::reference_to ][ SelfField::name],
			field_meta::primary_accessor => SelfField::_approach_field_profile_[ field_meta::primary_accessor ][ SelfField::name],
		],
	],
	Aspect::quality => [
		SelfQuality::DATABASE_CLASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::DATABASE_CLASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::DATABASE_CLASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::DATABASE_CLASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::DATABASE_CLASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::DATABASE_CLASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::DATABASE_CLASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::DATABASE_CLASS],
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
		SelfQuality::CONNECTOR_CLASS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CONNECTOR_CLASS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CONNECTOR_CLASS],
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
		SelfQuality::DATABASE_NAME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::DATABASE_NAME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::DATABASE_NAME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::DATABASE_NAME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::DATABASE_NAME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::DATABASE_NAME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::DATABASE_NAME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::DATABASE_NAME],
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
		SelfQuality::NAME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::NAME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::NAME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::NAME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::NAME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::NAME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::NAME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::NAME],
		],
		SelfQuality::COMMENT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::COMMENT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::COMMENT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::COMMENT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::COMMENT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::COMMENT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::COMMENT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::COMMENT],
		],
		SelfQuality::ENGINE => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::ENGINE],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::ENGINE],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::ENGINE],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::ENGINE],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::ENGINE],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::ENGINE],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::ENGINE],
		],
		SelfQuality::ROW_FORMAT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::ROW_FORMAT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::ROW_FORMAT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::ROW_FORMAT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::ROW_FORMAT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::ROW_FORMAT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::ROW_FORMAT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::ROW_FORMAT],
		],
		SelfQuality::TABLE_COLLATION => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::TABLE_COLLATION],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::TABLE_COLLATION],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::TABLE_COLLATION],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::TABLE_COLLATION],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::TABLE_COLLATION],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::TABLE_COLLATION],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::TABLE_COLLATION],
		],
		SelfQuality::CREATE_OPTIONS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CREATE_OPTIONS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CREATE_OPTIONS],
		],
		SelfQuality::TABLE_ROWS => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::TABLE_ROWS],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::TABLE_ROWS],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::TABLE_ROWS],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::TABLE_ROWS],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::TABLE_ROWS],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::TABLE_ROWS],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::TABLE_ROWS],
		],
		SelfQuality::AVG_ROW_LENGTH => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::AVG_ROW_LENGTH],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::AVG_ROW_LENGTH],
		],
		SelfQuality::DATA_LENGTH => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::DATA_LENGTH],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::DATA_LENGTH],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::DATA_LENGTH],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::DATA_LENGTH],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::DATA_LENGTH],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::DATA_LENGTH],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::DATA_LENGTH],
		],
		SelfQuality::MAX_DATA_LENGTH => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::MAX_DATA_LENGTH],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::MAX_DATA_LENGTH],
		],
		SelfQuality::INDEX_LENGTH => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::INDEX_LENGTH],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::INDEX_LENGTH],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::INDEX_LENGTH],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::INDEX_LENGTH],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::INDEX_LENGTH],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::INDEX_LENGTH],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::INDEX_LENGTH],
		],
		SelfQuality::DATA_FREE => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::DATA_FREE],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::DATA_FREE],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::DATA_FREE],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::DATA_FREE],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::DATA_FREE],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::DATA_FREE],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::DATA_FREE],
		],
		SelfQuality::AUTO_INCREMENT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::AUTO_INCREMENT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::AUTO_INCREMENT],
		],
		SelfQuality::CREATE_TIME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CREATE_TIME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CREATE_TIME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CREATE_TIME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CREATE_TIME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CREATE_TIME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CREATE_TIME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CREATE_TIME],
		],
		SelfQuality::UPDATE_TIME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::UPDATE_TIME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::UPDATE_TIME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::UPDATE_TIME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::UPDATE_TIME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::UPDATE_TIME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::UPDATE_TIME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::UPDATE_TIME],
		],
		SelfQuality::CHECK_TIME => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CHECK_TIME],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CHECK_TIME],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CHECK_TIME],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CHECK_TIME],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CHECK_TIME],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CHECK_TIME],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CHECK_TIME],
		],
		SelfQuality::CHECKSUM => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::CHECKSUM],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::CHECKSUM],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::CHECKSUM],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::CHECKSUM],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::CHECKSUM],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::CHECKSUM],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::CHECKSUM],
		],
		SelfQuality::TABLE_COMMENT => [
			quality_meta::label => SelfQuality::_approach_quality_profile_[ quality_meta::label ][ SelfQuality::TABLE_COMMENT],
			quality_meta::description => SelfQuality::_approach_quality_profile_[ quality_meta::description ][ SelfQuality::TABLE_COMMENT],
			quality_meta::keywords => SelfQuality::_approach_quality_profile_[ quality_meta::keywords ][ SelfQuality::TABLE_COMMENT],
			quality_meta::children => SelfQuality::_approach_quality_profile_[ quality_meta::children ][ SelfQuality::TABLE_COMMENT],
			quality_meta::related => SelfQuality::_approach_quality_profile_[ quality_meta::related ][ SelfQuality::TABLE_COMMENT],
			quality_meta::type => SelfQuality::_approach_quality_profile_[ quality_meta::type ][ SelfQuality::TABLE_COMMENT],
			quality_meta::state => SelfQuality::_approach_quality_profile_[ quality_meta::state ][ SelfQuality::TABLE_COMMENT],
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
		Aspect::field => SelfField::_case_map,
		Aspect::quality => SelfQuality::_case_map,
	];
}
public static function GetIndices(){
	return [
		Aspect::field => SelfField::_index_map,
		Aspect::quality => SelfQuality::_index_map,
	];
}
public static function multi_match($which, $what)
{
	$result = null;
	switch($which) {
		case Aspect::field:
			$result = SelfField::match($what);
			break;
		case Aspect::quality:
			$result = SelfQuality::match($what);
			break;
		default:
			break;
	}
	return $result;
}

}
