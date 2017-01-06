<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessFunction.
 * 
 * @method BusinessFunction setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusinessFunction setAlternateName(Property\AlternateName $alternateName)
 * @method BusinessFunction setDescription(Property\Description $description)
 * @method BusinessFunction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusinessFunction setImage(Property\Image $image)
 * @method BusinessFunction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusinessFunction setName(Property\Name $name)
 * @method BusinessFunction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusinessFunction setSameAs(Property\SameAs $sameAs)
 * @method BusinessFunction setUrl(Property\Url $url)
 */
class BusinessFunction extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessFunction';
	}
}