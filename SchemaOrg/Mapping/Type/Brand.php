<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Brand.
 */
class Brand extends Intangible {

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\Logo
	 */
	private $logo;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\Logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Brand';
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Brand
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\Logo $logo
	 * @return Brand
	 */
	public function setLogo(Property\Logo $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Brand
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}
}