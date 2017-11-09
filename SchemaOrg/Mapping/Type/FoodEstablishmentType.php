<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodEstablishmentType.
 * 
 * @method FoodEstablishmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FoodEstablishmentType setAddress(Property\AddressProperty $address)
 * @method FoodEstablishmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FoodEstablishmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FoodEstablishmentType setAlumni(Property\AlumniProperty $alumni)
 * @method FoodEstablishmentType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FoodEstablishmentType setAward(Property\AwardProperty $award)
 * @method FoodEstablishmentType setBrand(Property\BrandProperty $brand)
 * @method FoodEstablishmentType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FoodEstablishmentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FoodEstablishmentType setDepartment(Property\DepartmentProperty $department)
 * @method FoodEstablishmentType setDescription(Property\DescriptionProperty $description)
 * @method FoodEstablishmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FoodEstablishmentType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FoodEstablishmentType setDuns(Property\DunsProperty $duns)
 * @method FoodEstablishmentType setEmail(Property\EmailProperty $email)
 * @method FoodEstablishmentType setEmployee(Property\EmployeeProperty $employee)
 * @method FoodEstablishmentType setEvent(Property\EventProperty $event)
 * @method FoodEstablishmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FoodEstablishmentType setFounder(Property\FounderProperty $founder)
 * @method FoodEstablishmentType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FoodEstablishmentType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FoodEstablishmentType setFunder(Property\FunderProperty $funder)
 * @method FoodEstablishmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FoodEstablishmentType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FoodEstablishmentType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FoodEstablishmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FoodEstablishmentType setImage(Property\ImageProperty $image)
 * @method FoodEstablishmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FoodEstablishmentType setLegalName(Property\LegalNameProperty $legalName)
 * @method FoodEstablishmentType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FoodEstablishmentType setLocation(Property\LocationProperty $location)
 * @method FoodEstablishmentType setLogo(Property\LogoProperty $logo)
 * @method FoodEstablishmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FoodEstablishmentType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FoodEstablishmentType setMember(Property\MemberProperty $member)
 * @method FoodEstablishmentType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FoodEstablishmentType setNaics(Property\NaicsProperty $naics)
 * @method FoodEstablishmentType setName(Property\NameProperty $name)
 * @method FoodEstablishmentType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FoodEstablishmentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FoodEstablishmentType setOwns(Property\OwnsProperty $owns)
 * @method FoodEstablishmentType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FoodEstablishmentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FoodEstablishmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FoodEstablishmentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FoodEstablishmentType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FoodEstablishmentType setReview(Property\ReviewProperty $review)
 * @method FoodEstablishmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method FoodEstablishmentType setSeeks(Property\SeeksProperty $seeks)
 * @method FoodEstablishmentType setSponsor(Property\SponsorProperty $sponsor)
 * @method FoodEstablishmentType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FoodEstablishmentType setTaxID(Property\TaxIDProperty $taxID)
 * @method FoodEstablishmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method FoodEstablishmentType setUrl(Property\UrlProperty $url)
 * @method FoodEstablishmentType setVatID(Property\VatIDProperty $vatID)
 */
class FoodEstablishmentType extends LocalBusinessType {

	/**
	 * @var Property\AcceptsReservationsProperty
	 */
	private $acceptsReservations;

	/**
	 * @var Property\HasMenuProperty
	 */
	private $hasMenu;

	/**
	 * @var Property\ServesCuisineProperty
	 */
	private $servesCuisine;

	/**
	 * @var Property\StarRatingProperty
	 */
	private $starRating;

	/**
	 * Get accepts reservations.
	 * 
	 * @return Property\AcceptsReservationsProperty
	 */
	public function getAcceptsReservations() {
		return $this->acceptsReservations;
	}

	/**
	 * Get has menu.
	 * 
	 * @return Property\HasMenuProperty
	 */
	public function getHasMenu() {
		return $this->hasMenu;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishment';
	}

	/**
	 * Get serves cuisine.
	 * 
	 * @return Property\ServesCuisineProperty
	 */
	public function getServesCuisine() {
		return $this->servesCuisine;
	}

	/**
	 * Get star rating.
	 * 
	 * @return Property\StarRatingProperty
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set accepts reservations.
	 * 
	 * @param Property\AcceptsReservationsProperty $acceptsReservations
	 * @return FoodEstablishmentType
	 */
	public function setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations) {
		$this->acceptsReservations = $acceptsReservations;

		return $this;
	}

	/**
	 * Set has menu.
	 * 
	 * @param Property\HasMenuProperty $hasMenu
	 * @return FoodEstablishmentType
	 */
	public function setHasMenu(Property\HasMenuProperty $hasMenu) {
		$this->hasMenu = $hasMenu;

		return $this;
	}

	/**
	 * Set serves cuisine.
	 * 
	 * @param Property\ServesCuisineProperty $servesCuisine
	 * @return FoodEstablishmentType
	 */
	public function setServesCuisine(Property\ServesCuisineProperty $servesCuisine) {
		$this->servesCuisine = $servesCuisine;

		return $this;
	}

	/**
	 * Set star rating.
	 * 
	 * @param Property\StarRatingProperty $starRating
	 * @return FoodEstablishmentType
	 */
	public function setStarRating(Property\StarRatingProperty $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}