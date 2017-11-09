<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BrandType.
 * 
 * @method BrandType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BrandType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BrandType setDescription(Property\DescriptionProperty $description)
 * @method BrandType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BrandType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BrandType setImage(Property\ImageProperty $image)
 * @method BrandType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BrandType setName(Property\NameProperty $name)
 * @method BrandType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BrandType setSameAs(Property\SameAsProperty $sameAs)
 * @method BrandType setUrl(Property\UrlProperty $url)
 */
class BrandType extends ThingType {

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\LogoProperty
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\ReviewProperty
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
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return BrandType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\LogoProperty $logo
	 * @return BrandType
	 */
	public function setLogo(Property\LogoProperty $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return BrandType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}
}