<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the event was changed to allow online participation. See eventAttendanceMode for specifics of whether it is now fully or partially online.
 * 
 * @method EventMovedOnlineType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventMovedOnlineType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventMovedOnlineType setDescription(Property\DescriptionProperty $description)
 * @method EventMovedOnlineType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventMovedOnlineType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventMovedOnlineType setImage(Property\ImageProperty $image)
 * @method EventMovedOnlineType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventMovedOnlineType setName(Property\NameProperty $name)
 * @method EventMovedOnlineType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventMovedOnlineType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventMovedOnlineType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventMovedOnlineType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EventMovedOnlineType setUrl(Property\UrlProperty $url)
 */
class EventMovedOnlineType extends EventStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventMovedOnline';
	}
}