<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PrependAction.
 * 
 * @method PrependAction setToLocation(Property\ToLocation $toLocation)
 */
class PrependAction extends InsertAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PrependAction';
	}
}