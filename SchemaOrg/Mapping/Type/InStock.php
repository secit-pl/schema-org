<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InStock.
 * 
 * @method InStock setAdditionalType(Property\AdditionalType $additionalType)
 * @method InStock setAlternateName(Property\AlternateName $alternateName)
 * @method InStock setDescription(Property\Description $description)
 * @method InStock setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InStock setImage(Property\Image $image)
 * @method InStock setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InStock setName(Property\Name $name)
 * @method InStock setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InStock setSameAs(Property\SameAs $sameAs)
 * @method InStock setUrl(Property\Url $url)
 */
class InStock extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStock';
	}
}