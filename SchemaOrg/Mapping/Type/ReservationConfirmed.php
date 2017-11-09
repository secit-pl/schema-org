<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationConfirmed.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReservationConfirmedType instead.
 * 
 * @method ReservationConfirmed setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationConfirmed setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationConfirmed setDescription(Property\Description $description)
 * @method ReservationConfirmed setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationConfirmed setIdentifier(Property\Identifier $identifier)
 * @method ReservationConfirmed setImage(Property\Image $image)
 * @method ReservationConfirmed setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationConfirmed setName(Property\Name $name)
 * @method ReservationConfirmed setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationConfirmed setSameAs(Property\SameAs $sameAs)
 * @method ReservationConfirmed setUrl(Property\Url $url)
 */
class ReservationConfirmed extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationConfirmed';
	}
}