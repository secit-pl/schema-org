<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of boarding policy used by an airline.
 * 
 * @method BoardingPolicyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BoardingPolicyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BoardingPolicyType setDescription(Property\DescriptionProperty $description)
 * @method BoardingPolicyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BoardingPolicyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BoardingPolicyType setImage(Property\ImageProperty $image)
 * @method BoardingPolicyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BoardingPolicyType setName(Property\NameProperty $name)
 * @method BoardingPolicyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BoardingPolicyType setSameAs(Property\SameAsProperty $sameAs)
 * @method BoardingPolicyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BoardingPolicyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BoardingPolicyType setUrl(Property\UrlProperty $url)
 */
class BoardingPolicyType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BoardingPolicyType';
	}
}