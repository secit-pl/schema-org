<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AggregateRating.
 * 
 * @method AggregateRating setAuthor(Property\Author $author)
 * @method AggregateRating setBestRating(Property\BestRating $bestRating)
 * @method AggregateRating setRatingValue(Property\RatingValue $ratingValue)
 * @method AggregateRating setWorstRating(Property\WorstRating $worstRating)
 */
class AggregateRating extends Rating {

	/**
	 * @var Property\ItemReviewed
	 */
	private $itemReviewed;

	/**
	 * @var Property\RatingCount
	 */
	private $ratingCount;

	/**
	 * @var Property\ReviewCount
	 */
	private $reviewCount;

	/**
	 * Get item reviewed.
	 * 
	 * @return Property\ItemReviewed
	 */
	public function getItemReviewed() {
		return $this->itemReviewed;
	}

	/**
	 * Get rating count.
	 * 
	 * @return Property\RatingCount
	 */
	public function getRatingCount() {
		return $this->ratingCount;
	}

	/**
	 * Get review count.
	 * 
	 * @return Property\ReviewCount
	 */
	public function getReviewCount() {
		return $this->reviewCount;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AggregateRating';
	}

	/**
	 * Set item reviewed.
	 * 
	 * @param Property\ItemReviewed $itemReviewed
	 * @return AggregateRating
	 */
	public function setItemReviewed(Property\ItemReviewed $itemReviewed) {
		$this->itemReviewed = $itemReviewed;

		return $this;
	}

	/**
	 * Set rating count.
	 * 
	 * @param Property\RatingCount $ratingCount
	 * @return AggregateRating
	 */
	public function setRatingCount(Property\RatingCount $ratingCount) {
		$this->ratingCount = $ratingCount;

		return $this;
	}

	/**
	 * Set review count.
	 * 
	 * @param Property\ReviewCount $reviewCount
	 * @return AggregateRating
	 */
	public function setReviewCount(Property\ReviewCount $reviewCount) {
		$this->reviewCount = $reviewCount;

		return $this;
	}
}