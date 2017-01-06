<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StructuredValue.
 * 
 * @method StructuredValue setAdditionalType(Property\AdditionalType $additionalType)
 * @method StructuredValue setAlternateName(Property\AlternateName $alternateName)
 * @method StructuredValue setDescription(Property\Description $description)
 * @method StructuredValue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method StructuredValue setImage(Property\Image $image)
 * @method StructuredValue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method StructuredValue setName(Property\Name $name)
 * @method StructuredValue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method StructuredValue setSameAs(Property\SameAs $sameAs)
 * @method StructuredValue setUrl(Property\Url $url)
 */
class StructuredValue extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StructuredValue';
	}
}