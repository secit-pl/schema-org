<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that deals with benign and malignant tumors, including the study of their development, diagnosis, treatment and prevention.
 * 
 * @method OncologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OncologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OncologicType setDescription(Property\DescriptionProperty $description)
 * @method OncologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OncologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OncologicType setImage(Property\ImageProperty $image)
 * @method OncologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OncologicType setName(Property\NameProperty $name)
 * @method OncologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OncologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method OncologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OncologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OncologicType setUrl(Property\UrlProperty $url)
 */
class OncologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Oncologic';
	}
}