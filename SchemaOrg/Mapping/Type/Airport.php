<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Airport.
 * 
 * @method Airport setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Airport setAdditionalType(Property\AdditionalType $additionalType)
 * @method Airport setAddress(Property\Address $address)
 * @method Airport setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Airport setAlternateName(Property\AlternateName $alternateName)
 * @method Airport setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Airport setBranchCode(Property\BranchCode $branchCode)
 * @method Airport setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Airport setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Airport setDescription(Property\Description $description)
 * @method Airport setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Airport setEvent(Property\Event $event)
 * @method Airport setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Airport setGeo(Property\Geo $geo)
 * @method Airport setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Airport setHasMap(Property\HasMap $hasMap)
 * @method Airport setIdentifier(Property\Identifier $identifier)
 * @method Airport setImage(Property\Image $image)
 * @method Airport setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Airport setIsicV4(Property\IsicV4 $isicV4)
 * @method Airport setLogo(Property\Logo $logo)
 * @method Airport setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Airport setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Airport setName(Property\Name $name)
 * @method Airport setOpeningHours(Property\OpeningHours $openingHours)
 * @method Airport setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Airport setPhoto(Property\Photo $photo)
 * @method Airport setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Airport setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Airport setReview(Property\Review $review)
 * @method Airport setSameAs(Property\SameAs $sameAs)
 * @method Airport setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Airport setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Airport setTelephone(Property\Telephone $telephone)
 * @method Airport setUrl(Property\Url $url)
 */
class Airport extends CivicStructure {

	/**
	 * @var Property\IataCode
	 */
	private $iataCode;

	/**
	 * @var Property\IcaoCode
	 */
	private $icaoCode;

	/**
	 * Get iata code.
	 * 
	 * @return Property\IataCode
	 */
	public function getIataCode() {
		return $this->iataCode;
	}

	/**
	 * Get icao code.
	 * 
	 * @return Property\IcaoCode
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
	 * @param Property\IataCode $iataCode
	 * @return Airport
	 */
	public function setIataCode(Property\IataCode $iataCode) {
		$this->iataCode = $iataCode;

		return $this;
	}

	/**
	 * Set icao code.
	 * 
	 * @param Property\IcaoCode $icaoCode
	 * @return Airport
	 */
	public function setIcaoCode(Property\IcaoCode $icaoCode) {
		$this->icaoCode = $icaoCode;

		return $this;
	}
}