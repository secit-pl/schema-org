<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessEntityType.
 * 
 * @method BusinessEntityType setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusinessEntityType setAlternateName(Property\AlternateName $alternateName)
 * @method BusinessEntityType setDescription(Property\Description $description)
 * @method BusinessEntityType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusinessEntityType setImage(Property\Image $image)
 * @method BusinessEntityType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusinessEntityType setName(Property\Name $name)
 * @method BusinessEntityType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusinessEntityType setSameAs(Property\SameAs $sameAs)
 * @method BusinessEntityType setUrl(Property\Url $url)
 */
class BusinessEntityType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessEntityType';
	}
}