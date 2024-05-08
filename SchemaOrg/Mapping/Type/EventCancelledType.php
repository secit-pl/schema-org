<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The event has been cancelled. If the event has multiple startDate values, all are assumed to be cancelled. Either startDate or previousStartDate may be used to specify the event's cancelled date(s).
 * 
 * @method EventCancelledType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventCancelledType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventCancelledType setDescription(Property\DescriptionProperty $description)
 * @method EventCancelledType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventCancelledType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventCancelledType setImage(Property\ImageProperty $image)
 * @method EventCancelledType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventCancelledType setName(Property\NameProperty $name)
 * @method EventCancelledType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventCancelledType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventCancelledType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventCancelledType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventCancelledType setUrl(Property\UrlProperty $url)
 */
class EventCancelledType extends EventStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventCancelled';
	}
}