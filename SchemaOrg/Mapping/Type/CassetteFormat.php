<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CassetteFormat.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CassetteFormatType instead.
 * 
 * @method CassetteFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method CassetteFormat setAlternateName(Property\AlternateName $alternateName)
 * @method CassetteFormat setDescription(Property\Description $description)
 * @method CassetteFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CassetteFormat setIdentifier(Property\Identifier $identifier)
 * @method CassetteFormat setImage(Property\Image $image)
 * @method CassetteFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CassetteFormat setName(Property\Name $name)
 * @method CassetteFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CassetteFormat setSameAs(Property\SameAs $sameAs)
 * @method CassetteFormat setUrl(Property\Url $url)
 */
class CassetteFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CassetteFormat';
	}
}