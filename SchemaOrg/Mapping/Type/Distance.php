<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Distance.
 * 
 * @method Distance setAdditionalType(Property\AdditionalType $additionalType)
 * @method Distance setAlternateName(Property\AlternateName $alternateName)
 * @method Distance setDescription(Property\Description $description)
 * @method Distance setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Distance setImage(Property\Image $image)
 * @method Distance setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Distance setName(Property\Name $name)
 * @method Distance setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Distance setSameAs(Property\SameAs $sameAs)
 * @method Distance setUrl(Property\Url $url)
 */
class Distance extends Quantity {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Distance';
	}
}