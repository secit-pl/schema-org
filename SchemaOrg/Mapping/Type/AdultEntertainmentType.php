<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An adult entertainment establishment.
 * 
 * @method AdultEntertainmentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AdultEntertainmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AdultEntertainmentType setAddress(Property\AddressProperty $address)
 * @method AdultEntertainmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AdultEntertainmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AdultEntertainmentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AdultEntertainmentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AdultEntertainmentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AdultEntertainmentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AdultEntertainmentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AdultEntertainmentType setDescription(Property\DescriptionProperty $description)
 * @method AdultEntertainmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AdultEntertainmentType setEvent(Property\EventProperty $event)
 * @method AdultEntertainmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AdultEntertainmentType setGeo(Property\GeoProperty $geo)
 * @method AdultEntertainmentType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AdultEntertainmentType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AdultEntertainmentType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AdultEntertainmentType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AdultEntertainmentType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AdultEntertainmentType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AdultEntertainmentType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AdultEntertainmentType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AdultEntertainmentType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AdultEntertainmentType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AdultEntertainmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AdultEntertainmentType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AdultEntertainmentType setHasMap(Property\HasMapProperty $hasMap)
 * @method AdultEntertainmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AdultEntertainmentType setImage(Property\ImageProperty $image)
 * @method AdultEntertainmentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AdultEntertainmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AdultEntertainmentType setKeywords(Property\KeywordsProperty $keywords)
 * @method AdultEntertainmentType setLatitude(Property\LatitudeProperty $latitude)
 * @method AdultEntertainmentType setLogo(Property\LogoProperty $logo)
 * @method AdultEntertainmentType setLongitude(Property\LongitudeProperty $longitude)
 * @method AdultEntertainmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AdultEntertainmentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AdultEntertainmentType setName(Property\NameProperty $name)
 * @method AdultEntertainmentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AdultEntertainmentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AdultEntertainmentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AdultEntertainmentType setPhoto(Property\PhotoProperty $photo)
 * @method AdultEntertainmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AdultEntertainmentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AdultEntertainmentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AdultEntertainmentType setReview(Property\ReviewProperty $review)
 * @method AdultEntertainmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method AdultEntertainmentType setSlogan(Property\SloganProperty $slogan)
 * @method AdultEntertainmentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AdultEntertainmentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AdultEntertainmentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AdultEntertainmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method AdultEntertainmentType setUrl(Property\UrlProperty $url)
 */
class AdultEntertainmentType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdultEntertainment';
	}
}