<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Paperback.
 * 
 * @method Paperback setAdditionalType(Property\AdditionalType $additionalType)
 * @method Paperback setAlternateName(Property\AlternateName $alternateName)
 * @method Paperback setDescription(Property\Description $description)
 * @method Paperback setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Paperback setIdentifier(Property\Identifier $identifier)
 * @method Paperback setImage(Property\Image $image)
 * @method Paperback setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Paperback setName(Property\Name $name)
 * @method Paperback setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Paperback setSameAs(Property\SameAs $sameAs)
 * @method Paperback setUrl(Property\Url $url)
 */
class Paperback extends BookFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Paperback';
	}
}