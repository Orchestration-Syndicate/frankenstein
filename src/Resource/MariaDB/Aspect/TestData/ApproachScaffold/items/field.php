<?php
namespace Frankenstein\Resource\MariaDB\Aspect\TestData\ApproachScaffold\items;

use \Approach\Resource\MariaDB\Aspect\field as MariaDB_field;

class field extends MariaDB_field

{

// Discovered Field
	const id = 0;
	const name = 1;
	const price = 2;


// Discovered Field Metadata
	const _approach_field_profile_ = [
		MariaDB_field::label => [
			self::id => 'id', 
			self::name => 'name', 
			self::price => 'price', 
		],
		MariaDB_field::type => [
			self::id => 'int', 
			self::name => 'string', 
			self::price => 'float', 
		],
		MariaDB_field::default => [
			self::id => NULL, 
			self::name => NULL, 
			self::price => NULL, 
		],
		MariaDB_field::source_type => [
			self::id => 'int', 
			self::name => 'varchar(255)', 
			self::price => 'decimal(10,2)', 
		],
		MariaDB_field::source_default => [
			self::id => NULL, 
			self::name => NULL, 
			self::price => NULL, 
		],
		MariaDB_field::nullable => [
			self::id => false, 
			self::name => true, 
			self::price => true, 
		],
		MariaDB_field::description => [
			self::id => '', 
			self::name => '', 
			self::price => '', 
		],
		MariaDB_field::constraint => [
			self::id => ', auto_increment', 
			self::name => '', 
			self::price => '', 
		],
		MariaDB_field::accessor => [
			self::id => true, 
			self::name => false, 
			self::price => false, 
		],
		MariaDB_field::reference_to => [
			self::id => NULL, 
			self::name => NULL, 
			self::price => NULL, 
		],
		MariaDB_field::primary_accessor => [
			self::id => 'id', 
			self::name => 'id', 
			self::price => 'id', 
		],
	];

}
