<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Ultrasound imaging.
 * 
 * @method UltrasoundType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UltrasoundType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UltrasoundType setDescription(Property\DescriptionProperty $description)
 * @method UltrasoundType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UltrasoundType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UltrasoundType setImage(Property\ImageProperty $image)
 * @method UltrasoundType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UltrasoundType setName(Property\NameProperty $name)
 * @method UltrasoundType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UltrasoundType setSameAs(Property\SameAsProperty $sameAs)
 * @method UltrasoundType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UltrasoundType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method UltrasoundType setUrl(Property\UrlProperty $url)
 */
class UltrasoundType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Ultrasound';
	}
}