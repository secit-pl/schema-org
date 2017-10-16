<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GroupBoardingPolicy.
 * 
 * @method GroupBoardingPolicy setAdditionalType(Property\AdditionalType $additionalType)
 * @method GroupBoardingPolicy setAlternateName(Property\AlternateName $alternateName)
 * @method GroupBoardingPolicy setDescription(Property\Description $description)
 * @method GroupBoardingPolicy setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GroupBoardingPolicy setIdentifier(Property\Identifier $identifier)
 * @method GroupBoardingPolicy setImage(Property\Image $image)
 * @method GroupBoardingPolicy setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GroupBoardingPolicy setName(Property\Name $name)
 * @method GroupBoardingPolicy setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GroupBoardingPolicy setSameAs(Property\SameAs $sameAs)
 * @method GroupBoardingPolicy setUrl(Property\Url $url)
 */
class GroupBoardingPolicy extends BoardingPolicyType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroupBoardingPolicy';
	}
}