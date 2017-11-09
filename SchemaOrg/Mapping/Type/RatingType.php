<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RatingType.
 * 
 * @method RatingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RatingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RatingType setDescription(Property\DescriptionProperty $description)
 * @method RatingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RatingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RatingType setImage(Property\ImageProperty $image)
 * @method RatingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RatingType setName(Property\NameProperty $name)
 * @method RatingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RatingType setSameAs(Property\SameAsProperty $sameAs)
 * @method RatingType setUrl(Property\UrlProperty $url)
 */
class RatingType extends IntangibleType {

	/**
	 * @var Property\AuthorProperty
	 */
	private $author;

	/**
	 * @var Property\BestRatingProperty
	 */
	private $bestRating;

	/**
	 * @var Property\RatingValueProperty
	 */
	private $ratingValue;

	/**
	 * @var Property\WorstRatingProperty
	 */
	private $worstRating;

	/**
	 * Get author.
	 * 
	 * @return Property\AuthorProperty
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Get best rating.
	 * 
	 * @return Property\BestRatingProperty
	 */
	public function getBestRating() {
		return $this->bestRating;
	}

	/**
	 * Get rating value.
	 * 
	 * @return Property\RatingValueProperty
	 */
	public function getRatingValue() {
		return $this->ratingValue;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Rating';
	}

	/**
	 * Get worst rating.
	 * 
	 * @return Property\WorstRatingProperty
	 */
	public function getWorstRating() {
		return $this->worstRating;
	}

	/**
	 * Set author.
	 * 
	 * @param Property\AuthorProperty $author
	 * @return RatingType
	 */
	public function setAuthor(Property\AuthorProperty $author) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Set best rating.
	 * 
	 * @param Property\BestRatingProperty $bestRating
	 * @return RatingType
	 */
	public function setBestRating(Property\BestRatingProperty $bestRating) {
		$this->bestRating = $bestRating;

		return $this;
	}

	/**
	 * Set rating value.
	 * 
	 * @param Property\RatingValueProperty $ratingValue
	 * @return RatingType
	 */
	public function setRatingValue(Property\RatingValueProperty $ratingValue) {
		$this->ratingValue = $ratingValue;

		return $this;
	}

	/**
	 * Set worst rating.
	 * 
	 * @param Property\WorstRatingProperty $worstRating
	 * @return RatingType
	 */
	public function setWorstRating(Property\WorstRatingProperty $worstRating) {
		$this->worstRating = $worstRating;

		return $this;
	}
}