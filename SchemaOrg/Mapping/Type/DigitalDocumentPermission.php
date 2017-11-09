<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalDocumentPermission.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DigitalDocumentPermissionType instead.
 * 
 * @method DigitalDocumentPermission setAdditionalType(Property\AdditionalType $additionalType)
 * @method DigitalDocumentPermission setAlternateName(Property\AlternateName $alternateName)
 * @method DigitalDocumentPermission setDescription(Property\Description $description)
 * @method DigitalDocumentPermission setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DigitalDocumentPermission setIdentifier(Property\Identifier $identifier)
 * @method DigitalDocumentPermission setImage(Property\Image $image)
 * @method DigitalDocumentPermission setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DigitalDocumentPermission setName(Property\Name $name)
 * @method DigitalDocumentPermission setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DigitalDocumentPermission setSameAs(Property\SameAs $sameAs)
 * @method DigitalDocumentPermission setUrl(Property\Url $url)
 */
class DigitalDocumentPermission extends Intangible {

	/**
	 * @var Property\Grantee
	 */
	private $grantee;

	/**
	 * @var Property\PermissionType
	 */
	private $permissionType;

	/**
	 * Get grantee.
	 * 
	 * @return Property\Grantee
	 */
	public function getGrantee() {
		return $this->grantee;
	}

	/**
	 * Get permission type.
	 * 
	 * @return Property\PermissionType
	 */
	public function getPermissionType() {
		return $this->permissionType;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalDocumentPermission';
	}

	/**
	 * Set grantee.
	 * 
	 * @param Property\Grantee $grantee
	 * @return DigitalDocumentPermission
	 */
	public function setGrantee(Property\Grantee $grantee) {
		$this->grantee = $grantee;

		return $this;
	}

	/**
	 * Set permission type.
	 * 
	 * @param Property\PermissionType $permissionType
	 * @return DigitalDocumentPermission
	 */
	public function setPermissionType(Property\PermissionType $permissionType) {
		$this->permissionType = $permissionType;

		return $this;
	}
}