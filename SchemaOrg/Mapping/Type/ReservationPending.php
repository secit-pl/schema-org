<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationPending.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReservationPendingType instead.
 * 
 * @method ReservationPending setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationPending setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationPending setDescription(Property\Description $description)
 * @method ReservationPending setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationPending setIdentifier(Property\Identifier $identifier)
 * @method ReservationPending setImage(Property\Image $image)
 * @method ReservationPending setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationPending setName(Property\Name $name)
 * @method ReservationPending setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationPending setSameAs(Property\SameAs $sameAs)
 * @method ReservationPending setUrl(Property\Url $url)
 */
class ReservationPending extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationPending';
	}
}