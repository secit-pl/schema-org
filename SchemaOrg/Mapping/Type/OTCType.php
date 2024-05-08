<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The character of a medical substance, typically a medicine, of being available over the counter or not.
 * 
 * @method OTCType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OTCType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OTCType setDescription(Property\DescriptionProperty $description)
 * @method OTCType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OTCType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OTCType setImage(Property\ImageProperty $image)
 * @method OTCType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OTCType setName(Property\NameProperty $name)
 * @method OTCType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OTCType setSameAs(Property\SameAsProperty $sameAs)
 * @method OTCType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OTCType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OTCType setUrl(Property\UrlProperty $url)
 */
class OTCType extends DrugPrescriptionStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OTC';
	}
}