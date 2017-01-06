<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationHold.
 * 
 * @method ReservationHold setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationHold setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationHold setDescription(Property\Description $description)
 * @method ReservationHold setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationHold setImage(Property\Image $image)
 * @method ReservationHold setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationHold setName(Property\Name $name)
 * @method ReservationHold setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationHold setSameAs(Property\SameAs $sameAs)
 * @method ReservationHold setUrl(Property\Url $url)
 */
class ReservationHold extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationHold';
	}
}