<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Withdrawn.
 * 
 * @method WithdrawnType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WithdrawnType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WithdrawnType setDescription(Property\DescriptionProperty $description)
 * @method WithdrawnType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WithdrawnType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WithdrawnType setImage(Property\ImageProperty $image)
 * @method WithdrawnType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WithdrawnType setName(Property\NameProperty $name)
 * @method WithdrawnType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WithdrawnType setSameAs(Property\SameAsProperty $sameAs)
 * @method WithdrawnType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WithdrawnType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method WithdrawnType setUrl(Property\UrlProperty $url)
 */
class WithdrawnType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Withdrawn';
	}
}