<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Course.
 */
class Course {

	/**
	 * @var Property\CourseCode
	 */
	private $courseCode;

	/**
	 * @var Property\CoursePrerequisites
	 */
	private $coursePrerequisites;

	/**
	 * @var Property\HasCourseInstance
	 */
	private $hasCourseInstance;

	/**
	 */
	private $id;

	/**
	 * Course constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get course code.
	 * 
	 * @return Property\CourseCode
	 */
	public function getCourseCode() {
		return $this->courseCode;
	}

	/**
	 * Get course prerequisites.
	 * 
	 * @return Property\CoursePrerequisites
	 */
	public function getCoursePrerequisites() {
		return $this->coursePrerequisites;
	}

	/**
	 * Get has course instance.
	 * 
	 * @return Property\HasCourseInstance
	 */
	public function getHasCourseInstance() {
		return $this->hasCourseInstance;
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
		return 'https://schema.org/Course';
	}

	/**
	 * Set course code.
	 * 
	 * @param Property\CourseCode $courseCode
	 * @return Course
	 */
	public function setCourseCode(Property\CourseCode $courseCode) {
		$this->courseCode = $courseCode;

		return $this;
	}

	/**
	 * Set course prerequisites.
	 * 
	 * @param Property\CoursePrerequisites $coursePrerequisites
	 * @return Course
	 */
	public function setCoursePrerequisites(Property\CoursePrerequisites $coursePrerequisites) {
		$this->coursePrerequisites = $coursePrerequisites;

		return $this;
	}

	/**
	 * Set has course instance.
	 * 
	 * @param Property\HasCourseInstance $hasCourseInstance
	 * @return Course
	 */
	public function setHasCourseInstance(Property\HasCourseInstance $hasCourseInstance) {
		$this->hasCourseInstance = $hasCourseInstance;

		return $this;
	}
}