<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BoardingPolicyType.
 * 
 * @method BoardingPolicyType setAdditionalType(Property\AdditionalType $additionalType)
 * @method BoardingPolicyType setAlternateName(Property\AlternateName $alternateName)
 * @method BoardingPolicyType setDescription(Property\Description $description)
 * @method BoardingPolicyType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BoardingPolicyType setIdentifier(Property\Identifier $identifier)
 * @method BoardingPolicyType setImage(Property\Image $image)
 * @method BoardingPolicyType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BoardingPolicyType setName(Property\Name $name)
 * @method BoardingPolicyType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BoardingPolicyType setSameAs(Property\SameAs $sameAs)
 * @method BoardingPolicyType setUrl(Property\Url $url)
 */
class BoardingPolicyType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BoardingPolicyType';
	}
}