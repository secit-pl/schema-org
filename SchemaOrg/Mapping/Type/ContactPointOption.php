<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ContactPointOption.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ContactPointOptionType instead.
 * 
 * @method ContactPointOption setAdditionalType(Property\AdditionalType $additionalType)
 * @method ContactPointOption setAlternateName(Property\AlternateName $alternateName)
 * @method ContactPointOption setDescription(Property\Description $description)
 * @method ContactPointOption setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ContactPointOption setIdentifier(Property\Identifier $identifier)
 * @method ContactPointOption setImage(Property\Image $image)
 * @method ContactPointOption setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ContactPointOption setName(Property\Name $name)
 * @method ContactPointOption setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ContactPointOption setSameAs(Property\SameAs $sameAs)
 * @method ContactPointOption setUrl(Property\Url $url)
 */
class ContactPointOption extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ContactPointOption';
	}
}