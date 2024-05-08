<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical device used for therapeutic purposes.
 * 
 * @method TherapeuticType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TherapeuticType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TherapeuticType setDescription(Property\DescriptionProperty $description)
 * @method TherapeuticType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TherapeuticType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TherapeuticType setImage(Property\ImageProperty $image)
 * @method TherapeuticType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TherapeuticType setName(Property\NameProperty $name)
 * @method TherapeuticType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TherapeuticType setSameAs(Property\SameAsProperty $sameAs)
 * @method TherapeuticType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TherapeuticType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TherapeuticType setUrl(Property\UrlProperty $url)
 */
class TherapeuticType extends MedicalDevicePurposeType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Therapeutic';
	}
}