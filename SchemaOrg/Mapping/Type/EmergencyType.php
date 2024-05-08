<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that deals with the evaluation and initial treatment of medical conditions caused by trauma or sudden illness.
 * 
 * @method EmergencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmergencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmergencyType setDescription(Property\DescriptionProperty $description)
 * @method EmergencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmergencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmergencyType setImage(Property\ImageProperty $image)
 * @method EmergencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmergencyType setName(Property\NameProperty $name)
 * @method EmergencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmergencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmergencyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EmergencyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EmergencyType setUrl(Property\UrlProperty $url)
 */
class EmergencyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Emergency';
	}
}