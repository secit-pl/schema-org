<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WritePermission.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\WritePermissionType instead.
 * 
 * @method WritePermission setAdditionalType(Property\AdditionalType $additionalType)
 * @method WritePermission setAlternateName(Property\AlternateName $alternateName)
 * @method WritePermission setDescription(Property\Description $description)
 * @method WritePermission setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WritePermission setIdentifier(Property\Identifier $identifier)
 * @method WritePermission setImage(Property\Image $image)
 * @method WritePermission setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WritePermission setName(Property\Name $name)
 * @method WritePermission setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WritePermission setSameAs(Property\SameAs $sameAs)
 * @method WritePermission setUrl(Property\Url $url)
 */
class WritePermission extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WritePermission';
	}
}