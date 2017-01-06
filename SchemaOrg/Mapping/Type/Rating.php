<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Rating.
 * 
 * @method Rating setAdditionalType(Property\AdditionalType $additionalType)
 * @method Rating setAlternateName(Property\AlternateName $alternateName)
 * @method Rating setDescription(Property\Description $description)
 * @method Rating setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Rating setImage(Property\Image $image)
 * @method Rating setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Rating setName(Property\Name $name)
 * @method Rating setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Rating setSameAs(Property\SameAs $sameAs)
 * @method Rating setUrl(Property\Url $url)
 */
class Rating extends Intangible {

	/**
	 * @var Property\Author
	 */
	private $author;

	/**
	 * @var Property\BestRating
	 */
	private $bestRating;

	/**
	 * @var Property\RatingValue
	 */
	private $ratingValue;

	/**
	 * @var Property\WorstRating
	 */
	private $worstRating;

	/**
	 * Get author.
	 * 
	 * @return Property\Author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Get best rating.
	 * 
	 * @return Property\BestRating
	 */
	public function getBestRating() {
		return $this->bestRating;
	}

	/**
	 * Get rating value.
	 * 
	 * @return Property\RatingValue
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
	 * @return Property\WorstRating
	 */
	public function getWorstRating() {
		return $this->worstRating;
	}

	/**
	 * Set author.
	 * 
	 * @param Property\Author $author
	 * @return Rating
	 */
	public function setAuthor(Property\Author $author) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Set best rating.
	 * 
	 * @param Property\BestRating $bestRating
	 * @return Rating
	 */
	public function setBestRating(Property\BestRating $bestRating) {
		$this->bestRating = $bestRating;

		return $this;
	}

	/**
	 * Set rating value.
	 * 
	 * @param Property\RatingValue $ratingValue
	 * @return Rating
	 */
	public function setRatingValue(Property\RatingValue $ratingValue) {
		$this->ratingValue = $ratingValue;

		return $this;
	}

	/**
	 * Set worst rating.
	 * 
	 * @param Property\WorstRating $worstRating
	 * @return Rating
	 */
	public function setWorstRating(Property\WorstRating $worstRating) {
		$this->worstRating = $worstRating;

		return $this;
	}
}