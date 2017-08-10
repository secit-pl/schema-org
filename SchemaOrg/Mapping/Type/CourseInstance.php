<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CourseInstance.
 */
class CourseInstance {

	/**
	 * @var Property\CourseMode
	 */
	private $courseMode;

	/**
	 */
	private $id;

	/**
	 * @var Property\Instructor
	 */
	private $instructor;

	/**
	 * CourseInstance constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get course mode.
	 * 
	 * @return Property\CourseMode
	 */
	public function getCourseMode() {
		return $this->courseMode;
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
	 * Get instructor.
	 * 
	 * @return Property\Instructor
	 */
	public function getInstructor() {
		return $this->instructor;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CourseInstance';
	}

	/**
	 * Set course mode.
	 * 
	 * @param Property\CourseMode $courseMode
	 * @return CourseInstance
	 */
	public function setCourseMode(Property\CourseMode $courseMode) {
		$this->courseMode = $courseMode;

		return $this;
	}

	/**
	 * Set instructor.
	 * 
	 * @param Property\Instructor $instructor
	 * @return CourseInstance
	 */
	public function setInstructor(Property\Instructor $instructor) {
		$this->instructor = $instructor;

		return $this;
	}
}