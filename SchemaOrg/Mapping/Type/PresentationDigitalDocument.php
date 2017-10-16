<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PresentationDigitalDocument.
 * 
 * @method PresentationDigitalDocument setHasDigitalDocumentPermission(Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission)
 */
class PresentationDigitalDocument extends DigitalDocument {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PresentationDigitalDocument';
	}
}