<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Categories of medical devices, organized by the purpose or intended use of the device.
 * 
 * @method MedicalDevicePurposeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalDevicePurposeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalDevicePurposeType setDescription(Property\DescriptionProperty $description)
 * @method MedicalDevicePurposeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalDevicePurposeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalDevicePurposeType setImage(Property\ImageProperty $image)
 * @method MedicalDevicePurposeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalDevicePurposeType setName(Property\NameProperty $name)
 * @method MedicalDevicePurposeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalDevicePurposeType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalDevicePurposeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalDevicePurposeType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalDevicePurposeType setUrl(Property\UrlProperty $url)
 */
class MedicalDevicePurposeType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalDevicePurpose';
	}
}