<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnlineOnly.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OnlineOnlyType instead.
 * 
 * @method OnlineOnly setAdditionalType(Property\AdditionalType $additionalType)
 * @method OnlineOnly setAlternateName(Property\AlternateName $alternateName)
 * @method OnlineOnly setDescription(Property\Description $description)
 * @method OnlineOnly setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OnlineOnly setIdentifier(Property\Identifier $identifier)
 * @method OnlineOnly setImage(Property\Image $image)
 * @method OnlineOnly setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OnlineOnly setName(Property\Name $name)
 * @method OnlineOnly setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OnlineOnly setSameAs(Property\SameAs $sameAs)
 * @method OnlineOnly setUrl(Property\Url $url)
 */
class OnlineOnly extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnlineOnly';
	}
}