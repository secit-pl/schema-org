<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The science or practice of testing visual acuity and prescribing corrective lenses.
 * 
 * @method OptometricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OptometricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OptometricType setDescription(Property\DescriptionProperty $description)
 * @method OptometricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OptometricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OptometricType setImage(Property\ImageProperty $image)
 * @method OptometricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OptometricType setName(Property\NameProperty $name)
 * @method OptometricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OptometricType setSameAs(Property\SameAsProperty $sameAs)
 * @method OptometricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OptometricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OptometricType setUrl(Property\UrlProperty $url)
 */
class OptometricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Optometric';
	}
}