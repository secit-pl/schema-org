<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Energy.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EnergyType instead.
 * 
 * @method Energy setAdditionalType(Property\AdditionalType $additionalType)
 * @method Energy setAlternateName(Property\AlternateName $alternateName)
 * @method Energy setDescription(Property\Description $description)
 * @method Energy setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Energy setIdentifier(Property\Identifier $identifier)
 * @method Energy setImage(Property\Image $image)
 * @method Energy setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Energy setName(Property\Name $name)
 * @method Energy setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Energy setSameAs(Property\SameAs $sameAs)
 * @method Energy setUrl(Property\Url $url)
 */
class Energy extends Quantity {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Energy';
	}
}