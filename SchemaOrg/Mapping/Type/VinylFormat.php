<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VinylFormat.
 * 
 * @method VinylFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method VinylFormat setAlternateName(Property\AlternateName $alternateName)
 * @method VinylFormat setDescription(Property\Description $description)
 * @method VinylFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VinylFormat setImage(Property\Image $image)
 * @method VinylFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VinylFormat setName(Property\Name $name)
 * @method VinylFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VinylFormat setSameAs(Property\SameAs $sameAs)
 * @method VinylFormat setUrl(Property\Url $url)
 */
class VinylFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VinylFormat';
	}
}