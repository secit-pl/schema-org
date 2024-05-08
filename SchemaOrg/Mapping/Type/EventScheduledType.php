<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The event is taking place or has taken place on the startDate as scheduled. Use of this value is optional, as it is assumed by default.
 * 
 * @method EventScheduledType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventScheduledType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventScheduledType setDescription(Property\DescriptionProperty $description)
 * @method EventScheduledType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventScheduledType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventScheduledType setImage(Property\ImageProperty $image)
 * @method EventScheduledType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventScheduledType setName(Property\NameProperty $name)
 * @method EventScheduledType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventScheduledType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventScheduledType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventScheduledType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventScheduledType setUrl(Property\UrlProperty $url)
 */
class EventScheduledType extends EventStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventScheduled';
	}
}