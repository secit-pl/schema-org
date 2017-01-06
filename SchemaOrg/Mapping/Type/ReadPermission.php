<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReadPermission.
 * 
 * @method ReadPermission setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReadPermission setAlternateName(Property\AlternateName $alternateName)
 * @method ReadPermission setDescription(Property\Description $description)
 * @method ReadPermission setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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