<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The airline boards by zones of the plane.
 * 
 * @method ZoneBoardingPolicyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ZoneBoardingPolicyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ZoneBoardingPolicyType setDescription(Property\DescriptionProperty $description)
 * @method ZoneBoardingPolicyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ZoneBoardingPolicyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ZoneBoardingPolicyType setImage(Property\ImageProperty $image)
 * @method ZoneBoardingPolicyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ZoneBoardingPolicyType setName(Property\NameProperty $name)
 * @method ZoneBoardingPolicyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ZoneBoardingPolicyType setSameAs(Property\SameAsProperty $sameAs)
 * @method ZoneBoardingPolicyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ZoneBoardingPolicyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ZoneBoardingPolicyType setUrl(Property\UrlProperty $url)
 */
class ZoneBoardingPolicyType extends BoardingPolicyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ZoneBoardingPolicy';
	}
}