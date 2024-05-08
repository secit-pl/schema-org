<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to treating diseases, injuries and deformities by manual and instrumental means.
 * 
 * @method SurgicalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SurgicalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SurgicalType setDescription(Property\DescriptionProperty $description)
 * @method SurgicalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SurgicalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SurgicalType setImage(Property\ImageProperty $image)
 * @method SurgicalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SurgicalType setName(Property\NameProperty $name)
 * @method SurgicalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SurgicalType setSameAs(Property\SameAsProperty $sameAs)
 * @method SurgicalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SurgicalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SurgicalType setUrl(Property\UrlProperty $url)
 */
class SurgicalType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Surgical';
	}
}