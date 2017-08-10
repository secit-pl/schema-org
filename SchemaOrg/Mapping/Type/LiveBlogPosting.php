<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiveBlogPosting.
 */
class LiveBlogPosting {

	/**
	 * @var Property\CoverageEndTime
	 */
	private $coverageEndTime;

	/**
	 * @var Property\CoverageStartTime
	 */
	private $coverageStartTime;

	/**
	 */
	private $id;

	/**
	 * @var Property\LiveBlogUpdate
	 */
	private $liveBlogUpdate;

	/**
	 * LiveBlogPosting constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get coverage end time.
	 * 
	 * @return Property\CoverageEndTime
	 */
	public function getCoverageEndTime() {
		return $this->coverageEndTime;
	}

	/**
	 * Get coverage start time.
	 * 
	 * @return Property\CoverageStartTime
	 */
	public function getCoverageStartTime() {
		return $this->coverageStartTime;
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
	 * Get live blog update.
	 * 
	 * @return Property\LiveBlogUpdate
	 */
	public function getLiveBlogUpdate() {
		return $this->liveBlogUpdate;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiveBlogPosting';
	}

	/**
	 * Set coverage end time.
	 * 
	 * @param Property\CoverageEndTime $coverageEndTime
	 * @return LiveBlogPosting
	 */
	public function setCoverageEndTime(Property\CoverageEndTime $coverageEndTime) {
		$this->coverageEndTime = $coverageEndTime;

		return $this;
	}

	/**
	 * Set coverage start time.
	 * 
	 * @param Property\CoverageStartTime $coverageStartTime
	 * @return LiveBlogPosting
	 */
	public function setCoverageStartTime(Property\CoverageStartTime $coverageStartTime) {
		$this->coverageStartTime = $coverageStartTime;

		return $this;
	}

	/**
	 * Set live blog update.
	 * 
	 * @param Property\LiveBlogUpdate $liveBlogUpdate
	 * @return LiveBlogPosting
	 */
	public function setLiveBlogUpdate(Property\LiveBlogUpdate $liveBlogUpdate) {
		$this->liveBlogUpdate = $liveBlogUpdate;

		return $this;
	}
}