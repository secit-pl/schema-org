<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AudiobookFormat.
 * 
 * @method AudiobookFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method AudiobookFormat setAlternateName(Property\AlternateName $alternateName)
 * @method AudiobookFormat setDescription(Property\Description $description)
 * @method AudiobookFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AudiobookFormat setIdentifier(Property\Identifier $identifier)
 * @method AudiobookFormat setImage(Property\Image $image)
 * @method AudiobookFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AudiobookFormat setName(Property\Name $name)
 * @method AudiobookFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AudiobookFormat setSameAs(Property\SameAs $sameAs)
 * @method AudiobookFormat setUrl(Property\Url $url)
 */
class AudiobookFormat extends BookFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AudiobookFormat';
	}
}