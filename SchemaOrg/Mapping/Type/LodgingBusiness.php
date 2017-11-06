<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LodgingBusiness.
 * 
 * @method LodgingBusiness setAdditionalType(Property\AdditionalType $additionalType)
 * @method LodgingBusiness setAddress(Property\Address $address)
 * @method LodgingBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LodgingBusiness setAlternateName(Property\AlternateName $alternateName)
 * @method LodgingBusiness setAlumni(Property\Alumni $alumni)
 * @method LodgingBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method LodgingBusiness setAward(Property\Award $award)
 * @method LodgingBusiness setBrand(Property\Brand $brand)
 * @method LodgingBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method LodgingBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method LodgingBusiness setDepartment(Property\Department $department)
 * @method LodgingBusiness setDescription(Property\Description $description)
 * @method LodgingBusiness setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LodgingBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method LodgingBusiness setDuns(Property\Duns $duns)
 * @method LodgingBusiness setEmail(Property\Email $email)
 * @method LodgingBusiness setEmployee(Property\Employee $employee)
 * @method LodgingBusiness setEvent(Property\Event $event)
 * @method LodgingBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LodgingBusiness setFounder(Property\Founder $founder)
 * @method LodgingBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method LodgingBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method LodgingBusiness setFunder(Property\Funder $funder)
 * @method LodgingBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LodgingBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method LodgingBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method LodgingBusiness setIdentifier(Property\Identifier $identifier)
 * @method LodgingBusiness setImage(Property\Image $image)
 * @method LodgingBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method LodgingBusiness setLegalName(Property\LegalName $legalName)
 * @method LodgingBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method LodgingBusiness setLocation(Property\Location $location)
 * @method LodgingBusiness setLogo(Property\Logo $logo)
 * @method LodgingBusiness setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LodgingBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method LodgingBusiness setMember(Property\Member $member)
 * @method LodgingBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method LodgingBusiness setNaics(Property\Naics $naics)
 * @method LodgingBusiness setName(Property\Name $name)
 * @method LodgingBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method LodgingBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method LodgingBusiness setOwns(Property\Owns $owns)
 * @method LodgingBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method LodgingBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method LodgingBusiness setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LodgingBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method LodgingBusiness setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method LodgingBusiness setReview(Property\Review $review)
 * @method LodgingBusiness setSameAs(Property\SameAs $sameAs)
 * @method LodgingBusiness setSeeks(Property\Seeks $seeks)
 * @method LodgingBusiness setSponsor(Property\Sponsor $sponsor)
 * @method LodgingBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method LodgingBusiness setTaxID(Property\TaxID $taxID)
 * @method LodgingBusiness setTelephone(Property\Telephone $telephone)
 * @method LodgingBusiness setUrl(Property\Url $url)
 * @method LodgingBusiness setVatID(Property\VatID $vatID)
 */
class LodgingBusiness extends LocalBusiness {

	/**
	 * @var Property\AmenityFeature
	 */
	private $amenityFeature;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\AvailableLanguage
	 */
	private $availableLanguage;

	/**
	 * @var Property\CheckinTime
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTime
	 */
	private $checkoutTime;

	/**
	 * @var Property\PetsAllowed
	 */
	private $petsAllowed;

	/**
	 * @var Property\StarRating
	 */
	private $starRating;

	/**
	 * Get amenity feature.
	 * 
	 * @return Property\AmenityFeature
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguage
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get checkin time.
	 * 
	 * @return Property\CheckinTime
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 * 
	 * @return Property\CheckoutTime
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
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
		return 'https://schema.org/LodgingBusiness';
	}

	/**
	 * Get star rating.
	 * 
	 * @return Property\StarRating
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeature $amenityFeature
	 * @return LodgingBusiness
	 */
	public function setAmenityFeature(Property\AmenityFeature $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return LodgingBusiness
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguage $availableLanguage
	 * @return LodgingBusiness
	 */
	public function setAvailableLanguage(Property\AvailableLanguage $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set checkin time.
	 * 
	 * @param Property\CheckinTime $checkinTime
	 * @return LodgingBusiness
	 */
	public function setCheckinTime(Property\CheckinTime $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 * 
	 * @param Property\CheckoutTime $checkoutTime
	 * @return LodgingBusiness
	 */
	public function setCheckoutTime(Property\CheckoutTime $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set pets allowed.
	 * 
	 * @param Property\PetsAllowed $petsAllowed
	 * @return LodgingBusiness
	 */
	public function setPetsAllowed(Property\PetsAllowed $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}

	/**
	 * Set star rating.
	 * 
	 * @param Property\StarRating $starRating
	 * @return LodgingBusiness
	 */
	public function setStarRating(Property\StarRating $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}