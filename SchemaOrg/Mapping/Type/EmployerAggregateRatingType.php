<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An aggregate rating of an Organization related to its role as an employer.
 * 
 * @method EmployerAggregateRatingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmployerAggregateRatingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmployerAggregateRatingType setAuthor(Property\AuthorProperty $author)
 * @method EmployerAggregateRatingType setBestRating(Property\BestRatingProperty $bestRating)
 * @method EmployerAggregateRatingType setDescription(Property\DescriptionProperty $description)
 * @method EmployerAggregateRatingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmployerAggregateRatingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmployerAggregateRatingType setImage(Property\ImageProperty $image)
 * @method EmployerAggregateRatingType setItemReviewed(Property\ItemReviewedProperty $itemReviewed)
 * @method EmployerAggregateRatingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmployerAggregateRatingType setName(Property\NameProperty $name)
 * @method EmployerAggregateRatingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmployerAggregateRatingType setRatingCount(Property\RatingCountProperty $ratingCount)
 * @method EmployerAggregateRatingType setRatingValue(Property\RatingValueProperty $ratingValue)
 * @method EmployerAggregateRatingType setReviewAspect(Property\ReviewAspectProperty $reviewAspect)
 * @method EmployerAggregateRatingType setReviewCount(Property\ReviewCountProperty $reviewCount)
 * @method EmployerAggregateRatingType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmployerAggregateRatingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EmployerAggregateRatingType setUrl(Property\UrlProperty $url)
 * @method EmployerAggregateRatingType setWorstRating(Property\WorstRatingProperty $worstRating)
 */
class EmployerAggregateRatingType extends AggregateRatingType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmployerAggregateRating';
	}
}