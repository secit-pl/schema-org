<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bowling alley.
 * 
 * @method BowlingAlleyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BowlingAlleyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BowlingAlleyType setAddress(Property\AddressProperty $address)
 * @method BowlingAlleyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BowlingAlleyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BowlingAlleyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BowlingAlleyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BowlingAlleyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BowlingAlleyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BowlingAlleyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BowlingAlleyType setDescription(Property\DescriptionProperty $description)
 * @method BowlingAlleyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BowlingAlleyType setEvent(Property\EventProperty $event)
 * @method BowlingAlleyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BowlingAlleyType setGeo(Property\GeoProperty $geo)
 * @method BowlingAlleyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BowlingAlleyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BowlingAlleyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BowlingAlleyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BowlingAlleyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BowlingAlleyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BowlingAlleyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BowlingAlleyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BowlingAlleyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BowlingAlleyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BowlingAlleyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BowlingAlleyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BowlingAlleyType setHasMap(Property\HasMapProperty $hasMap)
 * @method BowlingAlleyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BowlingAlleyType setImage(Property\ImageProperty $image)
 * @method BowlingAlleyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BowlingAlleyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BowlingAlleyType setKeywords(Property\KeywordsProperty $keywords)
 * @method BowlingAlleyType setLatitude(Property\LatitudeProperty $latitude)
 * @method BowlingAlleyType setLogo(Property\LogoProperty $logo)
 * @method BowlingAlleyType setLongitude(Property\LongitudeProperty $longitude)
 * @method BowlingAlleyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BowlingAlleyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BowlingAlleyType setName(Property\NameProperty $name)
 * @method BowlingAlleyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BowlingAlleyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BowlingAlleyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BowlingAlleyType setPhoto(Property\PhotoProperty $photo)
 * @method BowlingAlleyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BowlingAlleyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BowlingAlleyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BowlingAlleyType setReview(Property\ReviewProperty $review)
 * @method BowlingAlleyType setSameAs(Property\SameAsProperty $sameAs)
 * @method BowlingAlleyType setSlogan(Property\SloganProperty $slogan)
 * @method BowlingAlleyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BowlingAlleyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BowlingAlleyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BowlingAlleyType setTelephone(Property\TelephoneProperty $telephone)
 * @method BowlingAlleyType setUrl(Property\UrlProperty $url)
 */
class BowlingAlleyType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BowlingAlley';
	}
}