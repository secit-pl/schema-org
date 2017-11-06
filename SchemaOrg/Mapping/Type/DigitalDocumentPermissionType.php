<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalDocumentPermissionType.
 * 
 * @method DigitalDocumentPermissionType setAdditionalType(Property\AdditionalType $additionalType)
 * @method DigitalDocumentPermissionType setAlternateName(Property\AlternateName $alternateName)
 * @method DigitalDocumentPermissionType setDescription(Property\Description $description)
 * @method DigitalDocumentPermissionType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DigitalDocumentPermissionType setIdentifier(Property\Identifier $identifier)
 * @method DigitalDocumentPermissionType setImage(Property\Image $image)
 * @method DigitalDocumentPermissionType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DigitalDocumentPermissionType setName(Property\Name $name)
 * @method DigitalDocumentPermissionType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DigitalDocumentPermissionType setSameAs(Property\SameAs $sameAs)
 * @method DigitalDocumentPermissionType setUrl(Property\Url $url)
 */
class DigitalDocumentPermissionType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalDocumentPermissionType';
	}
}