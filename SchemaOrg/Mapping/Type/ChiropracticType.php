<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A system of medicine focused on the relationship between the body's structure, mainly the spine, and its functioning.
 * 
 * @method ChiropracticType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChiropracticType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChiropracticType setDescription(Property\DescriptionProperty $description)
 * @method ChiropracticType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChiropracticType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChiropracticType setImage(Property\ImageProperty $image)
 * @method ChiropracticType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChiropracticType setName(Property\NameProperty $name)
 * @method ChiropracticType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChiropracticType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChiropracticType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ChiropracticType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ChiropracticType setUrl(Property\UrlProperty $url)
 */
class ChiropracticType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Chiropractic';
	}
}