<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InStoreOnly.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InStoreOnlyType instead.
 * 
 * @method InStoreOnly setAdditionalType(Property\AdditionalType $additionalType)
 * @method InStoreOnly setAlternateName(Property\AlternateName $alternateName)
 * @method InStoreOnly setDescription(Property\Description $description)
 * @method InStoreOnly setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InStoreOnly setIdentifier(Property\Identifier $identifier)
 * @method InStoreOnly setImage(Property\Image $image)
 * @method InStoreOnly setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InStoreOnly setName(Property\Name $name)
 * @method InStoreOnly setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InStoreOnly setSameAs(Property\SameAs $sameAs)
 * @method InStoreOnly setUrl(Property\Url $url)
 */
class InStoreOnly extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStoreOnly';
	}
}