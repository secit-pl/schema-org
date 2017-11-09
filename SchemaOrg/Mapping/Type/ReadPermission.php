<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReadPermission.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReadPermissionType instead.
 * 
 * @method ReadPermission setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReadPermission setAlternateName(Property\AlternateName $alternateName)
 * @method ReadPermission setDescription(Property\Description $description)
 * @method ReadPermission setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReadPermission setIdentifier(Property\Identifier $identifier)
 * @method ReadPermission setImage(Property\Image $image)
 * @method ReadPermission setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReadPermission setName(Property\Name $name)
 * @method ReadPermission setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReadPermission setSameAs(Property\SameAs $sameAs)
 * @method ReadPermission setUrl(Property\Url $url)
 */
class ReadPermission extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReadPermission';
	}
}