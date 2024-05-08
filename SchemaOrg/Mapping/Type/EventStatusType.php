<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * EventStatusType is an enumeration type whose instances represent several states that an Event may be in.
 * 
 * @method EventStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventStatusType setDescription(Property\DescriptionProperty $description)
 * @method EventStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventStatusType setImage(Property\ImageProperty $image)
 * @method EventStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventStatusType setName(Property\NameProperty $name)
 * @method EventStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventStatusType setUrl(Property\UrlProperty $url)
 */
class EventStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventStatusType';
	}
}