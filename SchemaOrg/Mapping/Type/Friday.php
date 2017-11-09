<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Friday.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FridayType instead.
 * 
 * @method Friday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Friday setAlternateName(Property\AlternateName $alternateName)
 * @method Friday setDescription(Property\Description $description)
 * @method Friday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Friday setIdentifier(Property\Identifier $identifier)
 * @method Friday setImage(Property\Image $image)
 * @method Friday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Friday setName(Property\Name $name)
 * @method Friday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Friday setSameAs(Property\SameAs $sameAs)
 * @method Friday setUrl(Property\Url $url)
 */
class Friday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Friday';
	}
}