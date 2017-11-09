<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AirportType.
 * 
 * @method AirportType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AirportType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AirportType setAddress(Property\AddressProperty $address)
 * @method AirportType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AirportType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AirportType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AirportType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AirportType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AirportType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AirportType setDescription(Property\DescriptionProperty $description)
 * @method AirportType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AirportType setEvent(Property\EventProperty $event)
 * @method AirportType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AirportType setGeo(Property\GeoProperty $geo)
 * @method AirportType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AirportType setHasMap(Property\HasMapProperty $hasMap)
 * @method AirportType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AirportType setImage(Property\ImageProperty $image)
 * @method AirportType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AirportType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AirportType setLogo(Property\LogoProperty $logo)
 * @method AirportType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AirportType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AirportType setName(Property\NameProperty $name)
 * @method AirportType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AirportType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AirportType setPhoto(Property\PhotoProperty $photo)
 * @method AirportType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AirportType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AirportType setReview(Property\ReviewProperty $review)
 * @method AirportType setSameAs(Property\SameAsProperty $sameAs)
 * @method AirportType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AirportType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AirportType setTelephone(Property\TelephoneProperty $telephone)
 * @method AirportType setUrl(Property\UrlProperty $url)
 */
class AirportType extends CivicStructureType {

	/**
	 * @var Property\IataCodeProperty
	 */
	private $iataCode;

	/**
	 * @var Property\IcaoCodeProperty
	 */
	private $icaoCode;

	/**
	 * Get iata code.
	 * 
	 * @return Property\IataCodeProperty
	 */
	public function getIataCode() {
		return $this->iataCode;
	}

	/**
	 * Get icao code.
	 * 
	 * @return Property\IcaoCodeProperty
	 */
	public function getIcaoCode() {
		return $this->icaoCode;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Airport';
	}

	/**
	 * Set iata code.
	 * 
	 * @param Property\IataCodeProperty $iataCode
	 * @return AirportType
	 */
	public function setIataCode(Property\IataCodeProperty $iataCode) {
		$this->iataCode = $iataCode;

		return $this;
	}

	/**
	 * Set icao code.
	 * 
	 * @param Property\IcaoCodeProperty $icaoCode
	 * @return AirportType
	 */
	public function setIcaoCode(Property\IcaoCodeProperty $icaoCode) {
		$this->icaoCode = $icaoCode;

		return $this;
	}
}