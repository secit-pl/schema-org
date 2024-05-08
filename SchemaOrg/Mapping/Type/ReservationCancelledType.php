<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The status for a previously confirmed reservation that is now cancelled.
 * 
 * @method ReservationCancelledType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationCancelledType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationCancelledType setDescription(Property\DescriptionProperty $description)
 * @method ReservationCancelledType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationCancelledType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationCancelledType setImage(Property\ImageProperty $image)
 * @method ReservationCancelledType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationCancelledType setName(Property\NameProperty $name)
 * @method ReservationCancelledType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationCancelledType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationCancelledType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservationCancelledType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ReservationCancelledType setUrl(Property\UrlProperty $url)
 */
class ReservationCancelledType extends ReservationStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationCancelled';
	}
}