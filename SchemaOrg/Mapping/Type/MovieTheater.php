<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovieTheater.
 */
class MovieTheater {

	/**
	 */
	private $id;

	/**
	 * @var Property\ScreenCount
	 */
	private $screenCount;

	/**
	 * MovieTheater constructor.
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieTheater';
	}

	/**
	 * Get screen count.
	 * 
	 * @return Property\ScreenCount
	 */
	public function getScreenCount() {
		return $this->screenCount;
	}

	/**
	 * Set screen count.
	 * 
	 * @param Property\ScreenCount $screenCount
	 * @return MovieTheater
	 */
	public function setScreenCount(Property\ScreenCount $screenCount) {
		$this->screenCount = $screenCount;

		return $this;
	}
}