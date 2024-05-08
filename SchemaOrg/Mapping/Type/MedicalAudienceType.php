<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Target audiences types for medical web pages. Enumerated type.
 * 
 * @method MedicalAudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalAudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalAudienceType setDescription(Property\DescriptionProperty $description)
 * @method MedicalAudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalAudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalAudienceType setImage(Property\ImageProperty $image)
 * @method MedicalAudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalAudienceType setName(Property\NameProperty $name)
 * @method MedicalAudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalAudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalAudienceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalAudienceType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalAudienceType setUrl(Property\UrlProperty $url)
 */
class MedicalAudienceType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalAudienceType';
	}
}