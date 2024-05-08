<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with the diagnosis and treatment of diseases pertaining to the urinary tract and the urogenital system.
 * 
 * @method UrologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UrologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UrologicType setDescription(Property\DescriptionProperty $description)
 * @method UrologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UrologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UrologicType setImage(Property\ImageProperty $image)
 * @method UrologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UrologicType setName(Property\NameProperty $name)
 * @method UrologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UrologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method UrologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UrologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method UrologicType setUrl(Property\UrlProperty $url)
 */
class UrologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Urologic';
	}
}