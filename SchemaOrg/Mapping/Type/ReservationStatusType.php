<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerated status values for Reservation.
 * 
 * @method ReservationStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationStatusType setDescription(Property\DescriptionProperty $description)
 * @method ReservationStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationStatusType setImage(Property\ImageProperty $image)
 * @method ReservationStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationStatusType setName(Property\NameProperty $name)
 * @method ReservationStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservationStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ReservationStatusType setUrl(Property\UrlProperty $url)
 */
class ReservationStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationStatusType';
	}
}