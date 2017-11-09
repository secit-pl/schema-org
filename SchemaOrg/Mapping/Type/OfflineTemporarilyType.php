<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfflineTemporarilyType.
 * 
 * @method OfflineTemporarilyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfflineTemporarilyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfflineTemporarilyType setDescription(Property\DescriptionProperty $description)
 * @method OfflineTemporarilyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfflineTemporarilyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfflineTemporarilyType setImage(Property\ImageProperty $image)
 * @method OfflineTemporarilyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfflineTemporarilyType setName(Property\NameProperty $name)
 * @method OfflineTemporarilyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfflineTemporarilyType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfflineTemporarilyType setUrl(Property\UrlProperty $url)
 */
class OfflineTemporarilyType extends GameServerStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfflineTemporarily';
	}
}