<?php
namespace Frankenstein\Resource\MariaDB\Aspect\MenuData\test\names;

use \Approach\Resource\MariaDB\Aspect\field as MariaDB_field;

class field extends MariaDB_field

{

// Discovered Field
	const id = 0;
	const name = 1;


// Discovered Field Metadata
	const _approach_field_profile_ = [
		MariaDB_field::label => [
			self::id => 'id', 
			self::name => 'name', 
		],
		MariaDB_field::type => [
			self::id => 'int', 
			self::name => 'string', 
		],
		MariaDB_field::default => [
			self::id => NULL, 
			self::name => 'hello', 
		],
		MariaDB_field::source_type => [
			self::id => 'int', 
			self::name => 'varchar(255)', 
		],
		MariaDB_field::source_default => [
			self::id => NULL, 
			self::name => 'hello', 
		],
		MariaDB_field::nullable => [
			self::id => false, 
			self::name => true, 
		],
		MariaDB_field::description => [
			self::id => '', 
			self::name => '', 
		],
		MariaDB_field::constraint => [
			self::id => 'PRI', 
			self::name => '', 
		],
		MariaDB_field::accessor => [
			self::id => true, 
			self::name => false, 
		],
		MariaDB_field::reference_to => [
			self::id => NULL, 
			self::name => NULL, 
		],
		MariaDB_field::primary_accessor => [
			self::id => 'id', 
			self::name => 'id', 
		],
	];

}
