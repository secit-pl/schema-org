<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentPermitType.
 * 
 * @method GovernmentPermitType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentPermitType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentPermitType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentPermitType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentPermitType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentPermitType setImage(Property\ImageProperty $image)
 * @method GovernmentPermitType setIssuedBy(Property\IssuedByProperty $issuedBy)
 * @method GovernmentPermitType setIssuedThrough(Property\IssuedThroughProperty $issuedThrough)
 * @method GovernmentPermitType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentPermitType setName(Property\NameProperty $name)
 * @method GovernmentPermitType setPermitAudience(Property\PermitAudienceProperty $permitAudience)
 * @method GovernmentPermitType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentPermitType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentPermitType setUrl(Property\UrlProperty $url)
 * @method GovernmentPermitType setValidFor(Property\ValidForProperty $validFor)
 * @method GovernmentPermitType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method GovernmentPermitType setValidIn(Property\ValidInProperty $validIn)
 * @method GovernmentPermitType setValidUntil(Property\ValidUntilProperty $validUntil)
 */
class GovernmentPermitType extends PermitType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentPermit';
	}
}