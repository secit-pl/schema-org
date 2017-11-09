<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HearingImpairedSupported.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HearingImpairedSupportedType instead.
 * 
 * @method HearingImpairedSupported setAdditionalType(Property\AdditionalType $additionalType)
 * @method HearingImpairedSupported setAlternateName(Property\AlternateName $alternateName)
 * @method HearingImpairedSupported setDescription(Property\Description $description)
 * @method HearingImpairedSupported setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HearingImpairedSupported setIdentifier(Property\Identifier $identifier)
 * @method HearingImpairedSupported setImage(Property\Image $image)
 * @method HearingImpairedSupported setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HearingImpairedSupported setName(Property\Name $name)
 * @method HearingImpairedSupported setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HearingImpairedSupported setSameAs(Property\SameAs $sameAs)
 * @method HearingImpairedSupported setUrl(Property\Url $url)
 */
class HearingImpairedSupported extends ContactPointOption {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HearingImpairedSupported';
	}
}