<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HotelRoom.
 * 
 * @method HotelRoom setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HotelRoom setAdditionalType(Property\AdditionalType $additionalType)
 * @method HotelRoom setAddress(Property\Address $address)
 * @method HotelRoom setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HotelRoom setAlternateName(Property\AlternateName $alternateName)
 * @method HotelRoom setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method HotelRoom setBranchCode(Property\BranchCode $branchCode)
 * @method HotelRoom setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method HotelRoom setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method HotelRoom setDescription(Property\Description $description)
 * @method HotelRoom setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HotelRoom setEvent(Property\Event $event)
 * @method HotelRoom setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HotelRoom setFloorSize(Property\FloorSize $floorSize)
 * @method HotelRoom setGeo(Property\Geo $geo)
 * @method HotelRoom setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HotelRoom setHasMap(Property\HasMap $hasMap)
 * @method HotelRoom setIdentifier(Property\Identifier $identifier)
 * @method HotelRoom setImage(Property\Image $image)
 * @method HotelRoom setIsicV4(Property\IsicV4 $isicV4)
 * @method HotelRoom setLogo(Property\Logo $logo)
 * @method HotelRoom setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HotelRoom setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method HotelRoom setName(Property\Name $name)
 * @method HotelRoom setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method HotelRoom setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method HotelRoom setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method HotelRoom setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method HotelRoom setPhoto(Property\Photo $photo)
 * @method HotelRoom setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HotelRoom setReview(Property\Review $review)
 * @method HotelRoom setSameAs(Property\SameAs $sameAs)
 * @method HotelRoom setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method HotelRoom setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method HotelRoom setTelephone(Property\Telephone $telephone)
 * @method HotelRoom setUrl(Property\Url $url)
 */
class HotelRoom extends Room {

	/**
	 * @var Property\Bed
	 */
	private $bed;

	/**
	 * @var Property\Occupancy
	 */
	private $occupancy;

	/**
	 * Get bed.
	 * 
	 * @return Property\Bed
	 */
	public function getBed() {
		return $this->bed;
	}

	/**
	 * Get occupancy.
	 * 
	 * @return Property\Occupancy
	 */
	public function getOccupancy() {
		return $this->occupancy;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HotelRoom';
	}

	/**
	 * Set bed.
	 * 
	 * @param Property\Bed $bed
	 * @return HotelRoom
	 */
	public function setBed(Property\Bed $bed) {
		$this->bed = $bed;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\Occupancy $occupancy
	 * @return HotelRoom
	 */
	public function setOccupancy(Property\Occupancy $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}