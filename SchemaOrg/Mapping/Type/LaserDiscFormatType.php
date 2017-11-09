<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LaserDiscFormatType.
 * 
 * @method LaserDiscFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LaserDiscFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LaserDiscFormatType setDescription(Property\DescriptionProperty $description)
 * @method LaserDiscFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LaserDiscFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LaserDiscFormatType setImage(Property\ImageProperty $image)
 * @method LaserDiscFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LaserDiscFormatType setName(Property\NameProperty $name)
 * @method LaserDiscFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LaserDiscFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method LaserDiscFormatType setUrl(Property\UrlProperty $url)
 */
class LaserDiscFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LaserDiscFormat';
	}
}