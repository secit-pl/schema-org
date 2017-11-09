<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ZoneBoardingPolicy.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ZoneBoardingPolicyType instead.
 * 
 * @method ZoneBoardingPolicy setAdditionalType(Property\AdditionalType $additionalType)
 * @method ZoneBoardingPolicy setAlternateName(Property\AlternateName $alternateName)
 * @method ZoneBoardingPolicy setDescription(Property\Description $description)
 * @method ZoneBoardingPolicy setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ZoneBoardingPolicy setIdentifier(Property\Identifier $identifier)
 * @method ZoneBoardingPolicy setImage(Property\Image $image)
 * @method ZoneBoardingPolicy setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ZoneBoardingPolicy setName(Property\Name $name)
 * @method ZoneBoardingPolicy setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ZoneBoardingPolicy setSameAs(Property\SameAs $sameAs)
 * @method ZoneBoardingPolicy setUrl(Property\Url $url)
 */
class ZoneBoardingPolicy extends BoardingPolicyType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ZoneBoardingPolicy';
	}
}