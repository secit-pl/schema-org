<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SpreadsheetDigitalDocument.
 * 
 * @method SpreadsheetDigitalDocument setHasDigitalDocumentPermission(Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission)
 */
class SpreadsheetDigitalDocument extends DigitalDocument {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SpreadsheetDigitalDocument';
	}
}