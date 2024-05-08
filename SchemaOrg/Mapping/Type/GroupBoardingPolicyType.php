<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The airline boards by groups based on check-in time, priority, etc.
 * 
 * @method GroupBoardingPolicyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GroupBoardingPolicyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GroupBoardingPolicyType setDescription(Property\DescriptionProperty $description)
 * @method GroupBoardingPolicyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GroupBoardingPolicyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GroupBoardingPolicyType setImage(Property\ImageProperty $image)
 * @method GroupBoardingPolicyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GroupBoardingPolicyType setName(Property\NameProperty $name)
 * @method GroupBoardingPolicyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GroupBoardingPolicyType setSameAs(Property\SameAsProperty $sameAs)
 * @method GroupBoardingPolicyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GroupBoardingPolicyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GroupBoardingPolicyType setUrl(Property\UrlProperty $url)
 */
class GroupBoardingPolicyType extends BoardingPolicyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroupBoardingPolicy';
	}
}