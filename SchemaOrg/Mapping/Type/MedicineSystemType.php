<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Systems of medical practice.
 * 
 * @method MedicineSystemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicineSystemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicineSystemType setDescription(Property\DescriptionProperty $description)
 * @method MedicineSystemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicineSystemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicineSystemType setImage(Property\ImageProperty $image)
 * @method MedicineSystemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicineSystemType setName(Property\NameProperty $name)
 * @method MedicineSystemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicineSystemType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicineSystemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicineSystemType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicineSystemType setUrl(Property\UrlProperty $url)
 */
class MedicineSystemType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicineSystem';
	}
}