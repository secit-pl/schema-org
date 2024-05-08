<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * X-ray computed tomography imaging.
 * 
 * @method CTType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CTType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CTType setDescription(Property\DescriptionProperty $description)
 * @method CTType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CTType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CTType setImage(Property\ImageProperty $image)
 * @method CTType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CTType setName(Property\NameProperty $name)
 * @method CTType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CTType setSameAs(Property\SameAsProperty $sameAs)
 * @method CTType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CTType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CTType setUrl(Property\UrlProperty $url)
 */
class CTType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CT';
	}
}