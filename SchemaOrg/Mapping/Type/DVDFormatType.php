<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DVDFormatType.
 * 
 * @method DVDFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DVDFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DVDFormatType setDescription(Property\DescriptionProperty $description)
 * @method DVDFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DVDFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DVDFormatType setImage(Property\ImageProperty $image)
 * @method DVDFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DVDFormatType setName(Property\NameProperty $name)
 * @method DVDFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DVDFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method DVDFormatType setUrl(Property\UrlProperty $url)
 */
class DVDFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DVDFormat';
	}
}