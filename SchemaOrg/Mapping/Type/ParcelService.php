<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParcelService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ParcelServiceType instead.
 * 
 * @method ParcelService setAdditionalType(Property\AdditionalType $additionalType)
 * @method ParcelService setAlternateName(Property\AlternateName $alternateName)
 * @method ParcelService setDescription(Property\Description $description)
 * @method ParcelService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ParcelService setIdentifier(Property\Identifier $identifier)
 * @method ParcelService setImage(Property\Image $image)
 * @method ParcelService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ParcelService setName(Property\Name $name)
 * @method ParcelService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ParcelService setSameAs(Property\SameAs $sameAs)
 * @method ParcelService setUrl(Property\Url $url)
 */
class ParcelService extends DeliveryMethod {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParcelService';
	}
}