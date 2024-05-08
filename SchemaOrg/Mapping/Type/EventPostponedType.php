<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The event has been postponed and no new date has been set. The event's previousStartDate should be set.
 * 
 * @method EventPostponedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventPostponedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventPostponedType setDescription(Property\DescriptionProperty $description)
 * @method EventPostponedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventPostponedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventPostponedType setImage(Property\ImageProperty $image)
 * @method EventPostponedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventPostponedType setName(Property\NameProperty $name)
 * @method EventPostponedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventPostponedType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventPostponedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventPostponedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventPostponedType setUrl(Property\UrlProperty $url)
 */
class EventPostponedType extends EventStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventPostponed';
	}
}