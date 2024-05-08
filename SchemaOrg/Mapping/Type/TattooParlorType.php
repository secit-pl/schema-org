<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A tattoo parlor.
 * 
 * @method TattooParlorType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TattooParlorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TattooParlorType setAddress(Property\AddressProperty $address)
 * @method TattooParlorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TattooParlorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TattooParlorType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TattooParlorType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TattooParlorType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TattooParlorType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TattooParlorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TattooParlorType setDescription(Property\DescriptionProperty $description)
 * @method TattooParlorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TattooParlorType setEvent(Property\EventProperty $event)
 * @method TattooParlorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TattooParlorType setGeo(Property\GeoProperty $geo)
 * @method TattooParlorType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TattooParlorType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TattooParlorType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TattooParlorType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TattooParlorType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TattooParlorType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TattooParlorType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TattooParlorType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TattooParlorType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TattooParlorType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TattooParlorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TattooParlorType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TattooParlorType setHasMap(Property\HasMapProperty $hasMap)
 * @method TattooParlorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TattooParlorType setImage(Property\ImageProperty $image)
 * @method TattooParlorType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TattooParlorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TattooParlorType setKeywords(Property\KeywordsProperty $keywords)
 * @method TattooParlorType setLatitude(Property\LatitudeProperty $latitude)
 * @method TattooParlorType setLogo(Property\LogoProperty $logo)
 * @method TattooParlorType setLongitude(Property\LongitudeProperty $longitude)
 * @method TattooParlorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TattooParlorType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TattooParlorType setName(Property\NameProperty $name)
 * @method TattooParlorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TattooParlorType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TattooParlorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TattooParlorType setPhoto(Property\PhotoProperty $photo)
 * @method TattooParlorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TattooParlorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TattooParlorType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TattooParlorType setReview(Property\ReviewProperty $review)
 * @method TattooParlorType setSameAs(Property\SameAsProperty $sameAs)
 * @method TattooParlorType setSlogan(Property\SloganProperty $slogan)
 * @method TattooParlorType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TattooParlorType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TattooParlorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TattooParlorType setTelephone(Property\TelephoneProperty $telephone)
 * @method TattooParlorType setUrl(Property\UrlProperty $url)
 */
class TattooParlorType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TattooParlor';
	}
}