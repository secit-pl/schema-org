<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VinylFormatType.
 * 
 * @method VinylFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VinylFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VinylFormatType setDescription(Property\DescriptionProperty $description)
 * @method VinylFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VinylFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VinylFormatType setImage(Property\ImageProperty $image)
 * @method VinylFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VinylFormatType setName(Property\NameProperty $name)
 * @method VinylFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VinylFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method VinylFormatType setUrl(Property\UrlProperty $url)
 */
class VinylFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VinylFormat';
	}
}