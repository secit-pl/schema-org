<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A health profession of a person formally educated and trained in the care of the sick or infirm person.
 * 
 * @method NursingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NursingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NursingType setDescription(Property\DescriptionProperty $description)
 * @method NursingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NursingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NursingType setImage(Property\ImageProperty $image)
 * @method NursingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NursingType setName(Property\NameProperty $name)
 * @method NursingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NursingType setSameAs(Property\SameAsProperty $sameAs)
 * @method NursingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NursingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method NursingType setUrl(Property\UrlProperty $url)
 */
class NursingType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Nursing';
	}
}