<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationHoldType.
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