<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DVDFormat.
 * 
 * @method DVDFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method DVDFormat setAlternateName(Property\AlternateName $alternateName)
 * @method DVDFormat setDescription(Property\Description $description)
 * @method DVDFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DVDFormat setIdentifier(Property\Identifier $identifier)
 * @method DVDFormat setImage(Property\Image $image)
 * @method DVDFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DVDFormat setName(Property\Name $name)
 * @method DVDFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DVDFormat setSameAs(Property\SameAs $sameAs)
 * @method DVDFormat setUrl(Property\Url $url)
 */
class DVDFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DVDFormat';
	}
}