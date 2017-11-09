<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfflinePermanently.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OfflinePermanentlyType instead.
 * 
 * @method OfflinePermanently setAdditionalType(Property\AdditionalType $additionalType)
 * @method OfflinePermanently setAlternateName(Property\AlternateName $alternateName)
 * @method OfflinePermanently setDescription(Property\Description $description)
 * @method OfflinePermanently setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OfflinePermanently setIdentifier(Property\Identifier $identifier)
 * @method OfflinePermanently setImage(Property\Image $image)
 * @method OfflinePermanently setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OfflinePermanently setName(Property\Name $name)
 * @method OfflinePermanently setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OfflinePermanently setSameAs(Property\SameAs $sameAs)
 * @method OfflinePermanently setUrl(Property\Url $url)
 */
class OfflinePermanently extends GameServerStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfflinePermanently';
	}
}