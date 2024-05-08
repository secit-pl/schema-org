<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An EndorsementRating is a rating that expresses some level of endorsement, for example inclusion in a "critic's pick" blog, a "Like" or "+1" on a social network. It can be considered the result of an EndorseAction in which the object of the action is rated positively by some agent. As is common elsewhere in schema.org, it is sometimes more useful to describe the results of such an action without explicitly describing the Action. An EndorsementRating may be part of a numeric scale or organized system, but this is not required: having an explicit type for indicating a positive, endorsement rating is particularly useful in the absence of numeric scales as it helps consumers understand that the rating is broadly positive.
 * 
 * @method EndorsementRatingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EndorsementRatingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EndorsementRatingType setAuthor(Property\AuthorProperty $author)
 * @method EndorsementRatingType setBestRating(Property\BestRatingProperty $bestRating)
 * @method EndorsementRatingType setDescription(Property\DescriptionProperty $description)
 * @method EndorsementRatingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EndorsementRatingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EndorsementRatingType setImage(Property\ImageProperty $image)
 * @method EndorsementRatingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EndorsementRatingType setName(Property\NameProperty $name)
 * @method EndorsementRatingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EndorsementRatingType setRatingValue(Property\RatingValueProperty $ratingValue)
 * @method EndorsementRatingType setReviewAspect(Property\ReviewAspectProperty $reviewAspect)
 * @method EndorsementRatingType setSameAs(Property\SameAsProperty $sameAs)
 * @method EndorsementRatingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EndorsementRatingType setUrl(Property\UrlProperty $url)
 * @method EndorsementRatingType setWorstRating(Property\WorstRatingProperty $worstRating)
 */
class EndorsementRatingType extends RatingType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EndorsementRating';
	}
}