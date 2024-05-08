<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A real-estate agent.
 * 
 * @method RealEstateAgentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RealEstateAgentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RealEstateAgentType setAddress(Property\AddressProperty $address)
 * @method RealEstateAgentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RealEstateAgentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RealEstateAgentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RealEstateAgentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RealEstateAgentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RealEstateAgentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RealEstateAgentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RealEstateAgentType setDescription(Property\DescriptionProperty $description)
 * @method RealEstateAgentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RealEstateAgentType setEvent(Property\EventProperty $event)
 * @method RealEstateAgentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RealEstateAgentType setGeo(Property\GeoProperty $geo)
 * @method RealEstateAgentType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RealEstateAgentType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RealEstateAgentType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RealEstateAgentType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RealEstateAgentType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RealEstateAgentType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RealEstateAgentType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RealEstateAgentType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RealEstateAgentType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RealEstateAgentType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RealEstateAgentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RealEstateAgentType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RealEstateAgentType setHasMap(Property\HasMapProperty $hasMap)
 * @method RealEstateAgentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RealEstateAgentType setImage(Property\ImageProperty $image)
 * @method RealEstateAgentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RealEstateAgentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RealEstateAgentType setKeywords(Property\KeywordsProperty $keywords)
 * @method RealEstateAgentType setLatitude(Property\LatitudeProperty $latitude)
 * @method RealEstateAgentType setLogo(Property\LogoProperty $logo)
 * @method RealEstateAgentType setLongitude(Property\LongitudeProperty $longitude)
 * @method RealEstateAgentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RealEstateAgentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RealEstateAgentType setName(Property\NameProperty $name)
 * @method RealEstateAgentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RealEstateAgentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RealEstateAgentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RealEstateAgentType setPhoto(Property\PhotoProperty $photo)
 * @method RealEstateAgentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RealEstateAgentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RealEstateAgentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RealEstateAgentType setReview(Property\ReviewProperty $review)
 * @method RealEstateAgentType setSameAs(Property\SameAsProperty $sameAs)
 * @method RealEstateAgentType setSlogan(Property\SloganProperty $slogan)
 * @method RealEstateAgentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RealEstateAgentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RealEstateAgentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RealEstateAgentType setTelephone(Property\TelephoneProperty $telephone)
 * @method RealEstateAgentType setUrl(Property\UrlProperty $url)
 */
class RealEstateAgentType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RealEstateAgent';
	}
}