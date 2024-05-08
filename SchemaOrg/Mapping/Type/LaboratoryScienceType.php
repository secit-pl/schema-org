<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical science pertaining to chemical, hematological, immunologic, microscopic, or bacteriological diagnostic analyses or research.
 * 
 * @method LaboratoryScienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LaboratoryScienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LaboratoryScienceType setDescription(Property\DescriptionProperty $description)
 * @method LaboratoryScienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LaboratoryScienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LaboratoryScienceType setImage(Property\ImageProperty $image)
 * @method LaboratoryScienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LaboratoryScienceType setName(Property\NameProperty $name)
 * @method LaboratoryScienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LaboratoryScienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method LaboratoryScienceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LaboratoryScienceType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LaboratoryScienceType setUrl(Property\UrlProperty $url)
 */
class LaboratoryScienceType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LaboratoryScience';
	}
}