<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Permit.
 */
class Permit {

	/**
	 */
	private $id;

	/**
	 * @var Property\IssuedBy
	 */
	private $issuedBy;

	/**
	 * @var Property\IssuedThrough
	 */
	private $issuedThrough;

	/**
	 * @var Property\PermitAudience
	 */
	private $permitAudience;

	/**
	 * @var Property\ValidFor
	 */
	private $validFor;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidIn
	 */
	private $validIn;

	/**
	 * @var Property\ValidUntil
	 */
	private $validUntil;

	/**
	 * Permit constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get issued by.
	 * 
	 * @return Property\IssuedBy
	 */
	public function getIssuedBy() {
		return $this->issuedBy;
	}

	/**
	 * Get issued through.
	 * 
	 * @return Property\IssuedThrough
	 */
	public function getIssuedThrough() {
		return $this->issuedThrough;
	}

	/**
	 * Get permit audience.
	 * 
	 * @return Property\PermitAudience
	 */
	public function getPermitAudience() {
		return $this->permitAudience;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Permit';
	}

	/**
	 * Get valid for.
	 * 
	 * @return Property\ValidFor
	 */
	public function getValidFor() {
		return $this->validFor;
	}

	/**
	 * Get valid from.
	 * 
	 * @return Property\ValidFrom
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid in.
	 * 
	 * @return Property\ValidIn
	 */
	public function getValidIn() {
		return $this->validIn;
	}

	/**
	 * Get valid until.
	 * 
	 * @return Property\ValidUntil
	 */
	public function getValidUntil() {
		return $this->validUntil;
	}

	/**
	 * Set issued by.
	 * 
	 * @param Property\IssuedBy $issuedBy
	 * @return Permit
	 */
	public function setIssuedBy(Property\IssuedBy $issuedBy) {
		$this->issuedBy = $issuedBy;

		return $this;
	}

	/**
	 * Set issued through.
	 * 
	 * @param Property\IssuedThrough $issuedThrough
	 * @return Permit
	 */
	public function setIssuedThrough(Property\IssuedThrough $issuedThrough) {
		$this->issuedThrough = $issuedThrough;

		return $this;
	}

	/**
	 * Set permit audience.
	 * 
	 * @param Property\PermitAudience $permitAudience
	 * @return Permit
	 */
	public function setPermitAudience(Property\PermitAudience $permitAudience) {
		$this->permitAudience = $permitAudience;

		return $this;
	}

	/**
	 * Set valid for.
	 * 
	 * @param Property\ValidFor $validFor
	 * @return Permit
	 */
	public function setValidFor(Property\ValidFor $validFor) {
		$this->validFor = $validFor;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return Permit
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid in.
	 * 
	 * @param Property\ValidIn $validIn
	 * @return Permit
	 */
	public function setValidIn(Property\ValidIn $validIn) {
		$this->validIn = $validIn;

		return $this;
	}

	/**
	 * Set valid until.
	 * 
	 * @param Property\ValidUntil $validUntil
	 * @return Permit
	 */
	public function setValidUntil(Property\ValidUntil $validUntil) {
		$this->validUntil = $validUntil;

		return $this;
	}
}