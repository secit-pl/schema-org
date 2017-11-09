<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookFormatType.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BookFormatType instead.
 * 
 * @method BookFormatType setAdditionalType(Property\AdditionalType $additionalType)
 * @method BookFormatType setAlternateName(Property\AlternateName $alternateName)
 * @method BookFormatType setDescription(Property\Description $description)
 * @method BookFormatType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BookFormatType setIdentifier(Property\Identifier $identifier)
 * @method BookFormatType setImage(Property\Image $image)
 * @method BookFormatType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BookFormatType setName(Property\Name $name)
 * @method BookFormatType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BookFormatType setSameAs(Property\SameAs $sameAs)
 * @method BookFormatType setUrl(Property\Url $url)
 */
class BookFormatType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookFormatType';
	}
}