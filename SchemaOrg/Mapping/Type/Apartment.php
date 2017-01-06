<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Apartment.
 * 
 * @method Apartment setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Apartment setAdditionalType(Property\AdditionalType $additionalType)
 * @method Apartment setAddress(Property\Address $address)
 * @method Apartment setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Apartment setAlternateName(Property\AlternateName $alternateName)
 * @method Apartment setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Apartment setBranchCode(Property\BranchCode $branchCode)
 * @method Apartment setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Apartment setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Apartment setDescription(Property\Description $description)
 * @method Apartment setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Apartment setEvent(Property\Event $event)
 * @method Apartment setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Apartment setFloorSize(Property\FloorSize $floorSize)
 * @method Apartment setGeo(Property\Geo $geo)
 * @method Apartment setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Apartment setHasMap(Property\HasMap $hasMap)
 * @method Apartment setImage(Property\Image $image)
 * @method Apartment setIsicV4(Property\IsicV4 $isicV4)
 * @method Apartment setLogo(Property\Logo $logo)
 * @method Apartment setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Apartment setName(Property\Name $name)
 * @method Apartment setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method Apartment setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Apartment setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method Apartment setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Apartment setPhoto(Property\Photo $photo)
 * @method Apartment setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Apartment setReview(Property\Review $review)
 * @method Apartment setSameAs(Property\SameAs $sameAs)
 * @method Apartment setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Apartment setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Apartment setTelephone(Property\Telephone $telephone)
 * @method Apartment setUrl(Property\Url $url)
 */
class Apartment extends Accommodation {

	/**
	 * @var Property\NumberOfRooms
	 */
	private $numberOfRooms;

	/**
	 * @var Property\Occupancy
	 */
	private $occupancy;

	/**
	 * Get number of rooms.
	 * 
	 * @return Property\NumberOfRooms
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
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
		return 'https://schema.org/Apartment';
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRooms $numberOfRooms
	 * @return Apartment
	 */
	public function setNumberOfRooms(Property\NumberOfRooms $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\Occupancy $occupancy
	 * @return Apartment
	 */
	public function setOccupancy(Property\Occupancy $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}