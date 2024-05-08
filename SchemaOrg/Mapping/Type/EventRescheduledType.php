<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The event has been rescheduled. The event's previousStartDate should be set to the old date and the startDate should be set to the event's new date. (If the event has been rescheduled multiple times, the previousStartDate property may be repeated.)
 * 
 * @method EventRescheduledType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventRescheduledType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventRescheduledType setDescription(Property\DescriptionProperty $description)
 * @method EventRescheduledType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventRescheduledType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventRescheduledType setImage(Property\ImageProperty $image)
 * @method EventRescheduledType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventRescheduledType setName(Property\NameProperty $name)
 * @method EventRescheduledType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventRescheduledType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventRescheduledType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventRescheduledType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventRescheduledType setUrl(Property\UrlProperty $url)
 */
class EventRescheduledType extends EventStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventRescheduled';
	}
}