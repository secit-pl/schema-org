<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AppendAction.
 * 
 * @method AppendAction setToLocation(Property\ToLocation $toLocation)
 */
class AppendAction extends InsertAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AppendAction';
	}
}