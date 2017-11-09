<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationConfirmedType.
 * 
 * @method ReservationConfirmedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationConfirmedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationConfirmedType setDescription(Property\DescriptionProperty $description)
 * @method ReservationConfirmedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationConfirmedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationConfirmedType setImage(Property\ImageProperty $image)
 * @method ReservationConfirmedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationConfirmedType setName(Property\NameProperty $name)
 * @method ReservationConfirmedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationConfirmedType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationConfirmedType setUrl(Property\UrlProperty $url)
 */
class ReservationConfirmedType extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationConfirmed';
	}
}