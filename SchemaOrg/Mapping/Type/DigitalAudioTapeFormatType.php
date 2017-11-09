<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalAudioTapeFormatType.
 * 
 * @method DigitalAudioTapeFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DigitalAudioTapeFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DigitalAudioTapeFormatType setDescription(Property\DescriptionProperty $description)
 * @method DigitalAudioTapeFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DigitalAudioTapeFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DigitalAudioTapeFormatType setImage(Property\ImageProperty $image)
 * @method DigitalAudioTapeFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DigitalAudioTapeFormatType setName(Property\NameProperty $name)
 * @method DigitalAudioTapeFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DigitalAudioTapeFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method DigitalAudioTapeFormatType setUrl(Property\UrlProperty $url)
 */
class DigitalAudioTapeFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalAudioTapeFormat';
	}
}