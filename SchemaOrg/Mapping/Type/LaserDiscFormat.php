<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LaserDiscFormat.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LaserDiscFormatType instead.
 * 
 * @method LaserDiscFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method LaserDiscFormat setAlternateName(Property\AlternateName $alternateName)
 * @method LaserDiscFormat setDescription(Property\Description $description)
 * @method LaserDiscFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LaserDiscFormat setIdentifier(Property\Identifier $identifier)
 * @method LaserDiscFormat setImage(Property\Image $image)
 * @method LaserDiscFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LaserDiscFormat setName(Property\Name $name)
 * @method LaserDiscFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LaserDiscFormat setSameAs(Property\SameAs $sameAs)
 * @method LaserDiscFormat setUrl(Property\Url $url)
 */
class LaserDiscFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LaserDiscFormat';
	}
}