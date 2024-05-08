<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Podiatry is the care of the human foot, especially the diagnosis and treatment of foot disorders.
 * 
 * @method PodiatricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PodiatricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PodiatricType setDescription(Property\DescriptionProperty $description)
 * @method PodiatricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PodiatricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PodiatricType setImage(Property\ImageProperty $image)
 * @method PodiatricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PodiatricType setName(Property\NameProperty $name)
 * @method PodiatricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PodiatricType setSameAs(Property\SameAsProperty $sameAs)
 * @method PodiatricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PodiatricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PodiatricType setUrl(Property\UrlProperty $url)
 */
class PodiatricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Podiatric';
	}
}