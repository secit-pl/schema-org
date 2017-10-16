<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class WritePermission.
 */
class WritePermission extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WritePermission';
	}
}