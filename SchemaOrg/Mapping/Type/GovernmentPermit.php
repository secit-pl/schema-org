<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentPermit.
 * 
 * @method GovernmentPermit setAdditionalType(Property\AdditionalType $additionalType)
 * @method GovernmentPermit setAlternateName(Property\AlternateName $alternateName)
 * @method GovernmentPermit setDescription(Property\Description $description)
 * @method GovernmentPermit setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GovernmentPermit setImage(Property\Image $image)
 * @method GovernmentPermit setIssuedBy(Property\IssuedBy $issuedBy)
 * @method GovernmentPermit setIssuedThrough(Property\IssuedThrough $issuedThrough)
 * @method GovernmentPermit setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GovernmentPermit setName(Property\Name $name)
 * @method GovernmentPermit setPermitAudience(Property\PermitAudience $permitAudience)
 * @method GovernmentPermit setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GovernmentPermit setSameAs(Property\SameAs $sameAs)
 * @method GovernmentPermit setUrl(Property\Url $url)
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