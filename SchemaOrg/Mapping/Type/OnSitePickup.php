<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnSitePickup.
 * 
 * @method OnSitePickup setAdditionalType(Property\AdditionalType $additionalType)
 * @method OnSitePickup setAlternateName(Property\AlternateName $alternateName)
 * @method OnSitePickup setDescription(Property\Description $description)
 * @method OnSitePickup setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OnSitePickup setImage(Property\Image $image)
 * @method OnSitePickup setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OnSitePickup setName(Property\Name $name)
 * @method OnSitePickup setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OnSitePickup setSameAs(Property\SameAs $sameAs)
 * @method OnSitePickup setUrl(Property\Url $url)
 */
class OnSitePickup extends DeliveryMethod {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnSitePickup';
	}
}