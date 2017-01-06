<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Accommodation.
 * 
 * @method Accommodation setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Accommodation setAdditionalType(Property\AdditionalType $additionalType)
 * @method Accommodation setAddress(Property\Address $address)
 * @method Accommodation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Accommodation setAlternateName(Property\AlternateName $alternateName)
 * @method Accommodation setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Accommodation setBranchCode(Property\BranchCode $branchCode)
 * @method Accommodation setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Accommodation setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Accommodation setDescription(Property\Description $description)
 * @method Accommodation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Accommodation setEvent(Property\Event $event)
 * @method Accommodation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Accommodation setGeo(Property\Geo $geo)
 * @method Accommodation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Accommodation setHasMap(Property\HasMap $hasMap)
 * @method Accommodation setImage(Property\Image $image)
 * @method Accommodation setIsicV4(Property\IsicV4 $isicV4)
 * @method Accommodation setLogo(Property\Logo $logo)
 * @method Accommodation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Accommodation setName(Property\Name $name)
 * @method Accommodation setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Accommodation setPhoto(Property\Photo $photo)
 * @method Accommodation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Accommodation setReview(Property\Review $review)
 * @method Accommodation setSameAs(Property\SameAs $sameAs)
 * @method Accommodation setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Accommodation setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Accommodation setTelephone(Property\Telephone $telephone)
 * @method Accommodation setUrl(Property\Url $url)
 */
class Accommodation extends Place {

	/**
	 * @var Property\AmenityFeature
	 */
	private $amenityFeature;

	/**
	 * @var Property\FloorSize
	 */
	private $floorSize;

	/**
	 * @var Property\NumberOfRooms
	 */
	private $numberOfRooms;

	/**
	 * @var Property\PermittedUsage
	 */
	private $permittedUsage;

	/**
	 * @var Property\PetsAllowed
	 */
	private $petsAllowed;

	/**
	 * Get amenity feature.
	 * 
	 * @return Property\AmenityFeature
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get floor size.
	 * 
	 * @return Property\FloorSize
	 */
	public function getFloorSize() {
		return $this->floorSize;
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
	 * Get permitted usage.
	 * 
	 * @return Property\PermittedUsage
	 */
	public function getPermittedUsage() {
		return $this->permittedUsage;
	}

	/**
	 * Get pets allowed.
	 * 
	 * @return Property\PetsAllowed
	 */
	public function getPetsAllowed() {
		return $this->petsAllowed;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Accommodation';
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeature $amenityFeature
	 * @return Accommodation
	 */
	public function setAmenityFeature(Property\AmenityFeature $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set floor size.
	 * 
	 * @param Property\FloorSize $floorSize
	 * @return Accommodation
	 */
	public function setFloorSize(Property\FloorSize $floorSize) {
		$this->floorSize = $floorSize;

		return $this;
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRooms $numberOfRooms
	 * @return Accommodation
	 */
	public function setNumberOfRooms(Property\NumberOfRooms $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set permitted usage.
	 * 
	 * @param Property\PermittedUsage $permittedUsage
	 * @return Accommodation
	 */
	public function setPermittedUsage(Property\PermittedUsage $permittedUsage) {
		$this->permittedUsage = $permittedUsage;

		return $this;
	}

	/**
	 * Set pets allowed.
	 * 
	 * @param Property\PetsAllowed $petsAllowed
	 * @return Accommodation
	 */
	public function setPetsAllowed(Property\PetsAllowed $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}
}