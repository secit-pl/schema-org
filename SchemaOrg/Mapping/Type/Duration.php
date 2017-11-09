<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Duration.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DurationType instead.
 * 
 * @method Duration setAdditionalType(Property\AdditionalType $additionalType)
 * @method Duration setAlternateName(Property\AlternateName $alternateName)
 * @method Duration setDescription(Property\Description $description)
 * @method Duration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Duration setIdentifier(Property\Identifier $identifier)
 * @method Duration setImage(Property\Image $image)
 * @method Duration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Duration setName(Property\Name $name)
 * @method Duration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Duration setSameAs(Property\SameAs $sameAs)
 * @method Duration setUrl(Property\Url $url)
 */
class Duration extends Quantity {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Duration';
	}
}