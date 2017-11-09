<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AggregateRatingType.
 * 
 * @method AggregateRatingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AggregateRatingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AggregateRatingType setAuthor(Property\AuthorProperty $author)
 * @method AggregateRatingType setBestRating(Property\BestRatingProperty $bestRating)
 * @method AggregateRatingType setDescription(Property\DescriptionProperty $description)
 * @method AggregateRatingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AggregateRatingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AggregateRatingType setImage(Property\ImageProperty $image)
 * @method AggregateRatingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AggregateRatingType setName(Property\NameProperty $name)
 * @method AggregateRatingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AggregateRatingType setRatingValue(Property\RatingValueProperty $ratingValue)
 * @method AggregateRatingType setSameAs(Property\SameAsProperty $sameAs)
 * @method AggregateRatingType setUrl(Property\UrlProperty $url)
 * @method AggregateRatingType setWorstRating(Property\WorstRatingProperty $worstRating)
 */
class AggregateRatingType extends RatingType {

	/**
	 * @var Property\ItemReviewedProperty
	 */
	private $itemReviewed;

	/**
	 * @var Property\RatingCountProperty
	 */
	private $ratingCount;

	/**
	 * @var Property\ReviewCountProperty
	 */
	private $reviewCount;

	/**
	 * Get item reviewed.
	 * 
	 * @return Property\ItemReviewedProperty
	 */
	public function getItemReviewed() {
		return $this->itemReviewed;
	}

	/**
	 * Get rating count.
	 * 
	 * @return Property\RatingCountProperty
	 */
	public function getRatingCount() {
		return $this->ratingCount;
	}

	/**
	 * Get review count.
	 * 
	 * @return Property\ReviewCountProperty
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
	 * @param Property\ItemReviewedProperty $itemReviewed
	 * @return AggregateRatingType
	 */
	public function setItemReviewed(Property\ItemReviewedProperty $itemReviewed) {
		$this->itemReviewed = $itemReviewed;

		return $this;
	}

	/**
	 * Set rating count.
	 * 
	 * @param Property\RatingCountProperty $ratingCount
	 * @return AggregateRatingType
	 */
	public function setRatingCount(Property\RatingCountProperty $ratingCount) {
		$this->ratingCount = $ratingCount;

		return $this;
	}

	/**
	 * Set review count.
	 * 
	 * @param Property\ReviewCountProperty $reviewCount
	 * @return AggregateRatingType
	 */
	public function setReviewCount(Property\ReviewCountProperty $reviewCount) {
		$this->reviewCount = $reviewCount;

		return $this;
	}
}