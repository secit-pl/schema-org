<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TextDigitalDocument.
 * 
 * @method TextDigitalDocument setHasDigitalDocumentPermission(Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission)
 */
class TextDigitalDocument extends DigitalDocument {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TextDigitalDocument';
	}
}