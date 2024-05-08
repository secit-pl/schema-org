<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to the study of the respiratory system and its respective disease states.
 * 
 * @method PulmonaryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PulmonaryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PulmonaryType setDescription(Property\DescriptionProperty $description)
 * @method PulmonaryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PulmonaryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PulmonaryType setImage(Property\ImageProperty $image)
 * @method PulmonaryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PulmonaryType setName(Property\NameProperty $name)
 * @method PulmonaryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PulmonaryType setSameAs(Property\SameAsProperty $sameAs)
 * @method PulmonaryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PulmonaryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PulmonaryType setUrl(Property\UrlProperty $url)
 */
class PulmonaryType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pulmonary';
	}
}