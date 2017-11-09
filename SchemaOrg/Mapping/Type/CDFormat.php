<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CDFormat.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CDFormatType instead.
 * 
 * @method CDFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method CDFormat setAlternateName(Property\AlternateName $alternateName)
 * @method CDFormat setDescription(Property\Description $description)
 * @method CDFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CDFormat setIdentifier(Property\Identifier $identifier)
 * @method CDFormat setImage(Property\Image $image)
 * @method CDFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CDFormat setName(Property\Name $name)
 * @method CDFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CDFormat setSameAs(Property\SameAs $sameAs)
 * @method CDFormat setUrl(Property\Url $url)
 */
class CDFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CDFormat';
	}
}