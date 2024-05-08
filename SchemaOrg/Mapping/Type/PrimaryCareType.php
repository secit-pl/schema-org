<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The medical care by a physician, or other health-care professional, who is the patient's first contact with the health-care system and who may recommend a specialist if necessary.
 * 
 * @method PrimaryCareType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PrimaryCareType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PrimaryCareType setDescription(Property\DescriptionProperty $description)
 * @method PrimaryCareType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PrimaryCareType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PrimaryCareType setImage(Property\ImageProperty $image)
 * @method PrimaryCareType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PrimaryCareType setName(Property\NameProperty $name)
 * @method PrimaryCareType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PrimaryCareType setSameAs(Property\SameAsProperty $sameAs)
 * @method PrimaryCareType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PrimaryCareType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PrimaryCareType setUrl(Property\UrlProperty $url)
 */
class PrimaryCareType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PrimaryCare';
	}
}