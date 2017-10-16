<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NoteDigitalDocument.
 * 
 * @method NoteDigitalDocument setHasDigitalDocumentPermission(Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission)
 */
class NoteDigitalDocument extends DigitalDocument {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NoteDigitalDocument';
	}
}