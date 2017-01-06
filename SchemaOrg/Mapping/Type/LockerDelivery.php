<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LockerDelivery.
 * 
 * @method LockerDelivery setAdditionalType(Property\AdditionalType $additionalType)
 * @method LockerDelivery setAlternateName(Property\AlternateName $alternateName)
 * @method LockerDelivery setDescription(Property\Description $description)
 * @method LockerDelivery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LockerDelivery setImage(Property\Image $image)
 * @method LockerDelivery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LockerDelivery setName(Property\Name $name)
 * @method LockerDelivery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LockerDelivery setSameAs(Property\SameAs $sameAs)
 * @method LockerDelivery setUrl(Property\Url $url)
 */
class LockerDelivery extends DeliveryMethod {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LockerDelivery';
	}
}