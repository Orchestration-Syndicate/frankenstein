<?php

namespace Frankenstein\Resource\MariaDB\Aspect\TestData\test;
use Frankenstein\Resource\MariaDB\Aspect\TestData\test\profile as profile;

trait user_trait
{
    public static function GetProfile(){ 
        return profile::GetProfile();
    }
	public static function multi_match($which, $what){
		return profile::multi_match($which, $what);
	}
	/**** User Trait ****
	 *
	 *  This class is used to add user functionality to an Approach Resource.
	 *
	 *  Anything you add here will be available to the primary resource of
	 *  this namespace.
	 *
	 *  This is a good place to use hooks and/or override methods to achieve
	 *  desired functionality.
	 *
	 *  Examples include:
	 *	- Changing the behavior of the load() or save()
	 *	- Adding behavior with preload(), onsave(), postpush(), onpull(), preacquire(), etc..
	 *	- Adding functions that work with your custom operations and aspects
	 *	- Tieing into the map system deeper
	 *
	 * This trait is automatically included in the class that is generated, so
	 * you can use it immediately. This file is here for your convenience
	 * and will not be overwritten by the generator.
	 *
	 */
}