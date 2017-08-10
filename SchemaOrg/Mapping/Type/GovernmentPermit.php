<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentPermit.
 * 
 * @method GovernmentPermit setIssuedBy(Property\IssuedBy $issuedBy)
 * @method GovernmentPermit setIssuedThrough(Property\IssuedThrough $issuedThrough)
 * @method GovernmentPermit setPermitAudience(Property\PermitAudience $permitAudience)
 * @method GovernmentPermit setValidFor(Property\ValidFor $validFor)
 * @method GovernmentPermit setValidFrom(Property\ValidFrom $validFrom)
 * @method GovernmentPermit setValidIn(Property\ValidIn $validIn)
 * @method GovernmentPermit setValidUntil(Property\ValidUntil $validUntil)
 */
class GovernmentPermit extends Permit {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentPermit';
	}
}