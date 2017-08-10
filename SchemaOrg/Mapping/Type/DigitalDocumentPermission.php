<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalDocumentPermission.
 */
class DigitalDocumentPermission {

	/**
	 * @var Property\Grantee
	 */
	private $grantee;

	/**
	 */
	private $id;

	/**
	 * @var Property\PermissionType
	 */
	private $permissionType;

	/**
	 * DigitalDocumentPermission constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get grantee.
	 * 
	 * @return Property\Grantee
	 */
	public function getGrantee() {
		return $this->grantee;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
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