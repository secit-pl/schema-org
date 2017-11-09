<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PreOrder.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PreOrderType instead.
 * 
 * @method PreOrder setAdditionalType(Property\AdditionalType $additionalType)
 * @method PreOrder setAlternateName(Property\AlternateName $alternateName)
 * @method PreOrder setDescription(Property\Description $description)
 * @method PreOrder setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PreOrder setIdentifier(Property\Identifier $identifier)
 * @method PreOrder setImage(Property\Image $image)
 * @method PreOrder setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PreOrder setName(Property\Name $name)
 * @method PreOrder setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PreOrder setSameAs(Property\SameAs $sameAs)
 * @method PreOrder setUrl(Property\Url $url)
 */
class PreOrder extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreOrder';
	}
}