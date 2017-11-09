<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnlineFullType.
 * 
 * @method OnlineFullType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OnlineFullType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OnlineFullType setDescription(Property\DescriptionProperty $description)
 * @method OnlineFullType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OnlineFullType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OnlineFullType setImage(Property\ImageProperty $image)
 * @method OnlineFullType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OnlineFullType setName(Property\NameProperty $name)
 * @method OnlineFullType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OnlineFullType setSameAs(Property\SameAsProperty $sameAs)
 * @method OnlineFullType setUrl(Property\UrlProperty $url)
 */
class OnlineFullType extends GameServerStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnlineFull';
	}
}