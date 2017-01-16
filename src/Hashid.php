<?php

namespace Lagan\Property;

use Hashids\Hashids;

/**
 * Controller for the Lagan hash id property.
 * Generate YouTube-like ids based on the conten object id's.
 *
 * A property type controller can contain a set, read, delete and options method. All methods are optional.
 * To be used with Lagan: https://github.com/lutsen/lagan
 */

class Hashid {

	/**
	 * The set method is executed each time a property with this type is set.
	 *
	 * @param bean		$bean		The Redbean bean object with the property.
	 * @param array		$property	Lagan model property arrray.
	 * @param string	$new_value
	 *
	 * @return string	The new hash id of the object with this property.
	 */
	public function set($bean, $property, $new_value) {

		if ( isset( $bean->{ $property['name'] } ) ) {

			return $bean->{ $property['name'] };

		} else {

			if ( isset( $property['salt'] ) ) {
				$salt = $property['salt'];
			} else {
				$salt = '';
			}

			if ( isset( $property['padding'] ) ) {
				$padding = $property['padding'];
			} else {
				$padding = 0;
			}

			if ( isset( $property['alphabet'] ) ) {
				$hashids = new Hashids( $salt, $padding, $property['alphabet'] );
			} else {
				$hashids = new Hashids( $salt, $padding );
			}

			$id = \R::store( $bean ); // Store bean to get id
			return $hashids->encode( $id );

		}

	}

}

?>