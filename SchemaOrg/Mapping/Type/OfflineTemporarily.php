<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfflineTemporarily.
 * 
 * @method OfflineTemporarily setAdditionalType(Property\AdditionalType $additionalType)
 * @method OfflineTemporarily setAlternateName(Property\AlternateName $alternateName)
 * @method OfflineTemporarily setDescription(Property\Description $description)
 * @method OfflineTemporarily setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OfflineTemporarily setImage(Property\Image $image)
 * @method OfflineTemporarily setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OfflineTemporarily setName(Property\Name $name)
 * @method OfflineTemporarily setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OfflineTemporarily setSameAs(Property\SameAs $sameAs)
 * @method OfflineTemporarily setUrl(Property\Url $url)
 */
class OfflineTemporarily extends GameServerStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfflineTemporarily';
	}
}