<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The status of a reservation on hold pending an update like credit card number or flight changes.
 * 
 * @method ReservationHoldType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationHoldType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationHoldType setDescription(Property\DescriptionProperty $description)
 * @method ReservationHoldType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationHoldType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationHoldType setImage(Property\ImageProperty $image)
 * @method ReservationHoldType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationHoldType setName(Property\NameProperty $name)
 * @method ReservationHoldType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationHoldType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationHoldType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservationHoldType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ReservationHoldType setUrl(Property\UrlProperty $url)
 */
class ReservationHoldType extends ReservationStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationHold';
	}
}