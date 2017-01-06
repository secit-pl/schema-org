<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Suite.
 * 
 * @method Suite setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Suite setAdditionalType(Property\AdditionalType $additionalType)
 * @method Suite setAddress(Property\Address $address)
 * @method Suite setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Suite setAlternateName(Property\AlternateName $alternateName)
 * @method Suite setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Suite setBranchCode(Property\BranchCode $branchCode)
 * @method Suite setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Suite setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Suite setDescription(Property\Description $description)
 * @method Suite setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Suite setEvent(Property\Event $event)
 * @method Suite setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Suite setFloorSize(Property\FloorSize $floorSize)
 * @method Suite setGeo(Property\Geo $geo)
 * @method Suite setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Suite setHasMap(Property\HasMap $hasMap)
 * @method Suite setImage(Property\Image $image)
 * @method Suite setIsicV4(Property\IsicV4 $isicV4)
 * @method Suite setLogo(Property\Logo $logo)
 * @method Suite setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Suite setName(Property\Name $name)
 * @method Suite setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method Suite setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Suite setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method Suite setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Suite setPhoto(Property\Photo $photo)
 * @method Suite setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Suite setReview(Property\Review $review)
 * @method Suite setSameAs(Property\SameAs $sameAs)
 * @method Suite setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Suite setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Suite setTelephone(Property\Telephone $telephone)
 * @method Suite setUrl(Property\Url $url)
 */
class Suite extends Accommodation {

	/**
	 * @var Property\Bed
	 */
	private $bed;

	/**
	 * @var Property\NumberOfRooms
	 */
	private $numberOfRooms;

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
		return 'https://schema.org/Suite';
	}

	/**
	 * Set bed.
	 * 
	 * @param Property\Bed $bed
	 * @return Suite
	 */
	public function setBed(Property\Bed $bed) {
		$this->bed = $bed;

		return $this;
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRooms $numberOfRooms
	 * @return Suite
	 */
	public function setNumberOfRooms(Property\NumberOfRooms $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\Occupancy $occupancy
	 * @return Suite
	 */
	public function setOccupancy(Property\Occupancy $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}