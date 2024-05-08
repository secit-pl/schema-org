<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An observational study design.
 * 
 * @method ObservationalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ObservationalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ObservationalType setDescription(Property\DescriptionProperty $description)
 * @method ObservationalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ObservationalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ObservationalType setImage(Property\ImageProperty $image)
 * @method ObservationalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ObservationalType setName(Property\NameProperty $name)
 * @method ObservationalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ObservationalType setSameAs(Property\SameAsProperty $sameAs)
 * @method ObservationalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ObservationalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ObservationalType setUrl(Property\UrlProperty $url)
 */
class ObservationalType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Observational';
	}
}