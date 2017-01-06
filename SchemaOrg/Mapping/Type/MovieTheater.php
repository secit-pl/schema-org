<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovieTheater.
 * 
 * @method MovieTheater setAdditionalType(Property\AdditionalType $additionalType)
 * @method MovieTheater setAddress(Property\Address $address)
 * @method MovieTheater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MovieTheater setAlternateName(Property\AlternateName $alternateName)
 * @method MovieTheater setAlumni(Property\Alumni $alumni)
 * @method MovieTheater setAreaServed(Property\AreaServed $areaServed)
 * @method MovieTheater setAward(Property\Award $award)
 * @method MovieTheater setBrand(Property\Brand $brand)
 * @method MovieTheater setContactPoint(Property\ContactPoint $contactPoint)
 * @method MovieTheater setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MovieTheater setDepartment(Property\Department $department)
 * @method MovieTheater setDescription(Property\Description $description)
 * @method MovieTheater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MovieTheater setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MovieTheater setDuns(Property\Duns $duns)
 * @method MovieTheater setEmail(Property\Email $email)
 * @method MovieTheater setEmployee(Property\Employee $employee)
 * @method MovieTheater setEvent(Property\Event $event)
 * @method MovieTheater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MovieTheater setFounder(Property\Founder $founder)
 * @method MovieTheater setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MovieTheater setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MovieTheater setFunder(Property\Funder $funder)
 * @method MovieTheater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MovieTheater setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MovieTheater setHasPOS(Property\HasPOS $hasPOS)
 * @method MovieTheater setImage(Property\Image $image)
 * @method MovieTheater setIsicV4(Property\IsicV4 $isicV4)
 * @method MovieTheater setLegalName(Property\LegalName $legalName)
 * @method MovieTheater setLeiCode(Property\LeiCode $leiCode)
 * @method MovieTheater setLocation(Property\Location $location)
 * @method MovieTheater setLogo(Property\Logo $logo)
 * @method MovieTheater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MovieTheater setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MovieTheater setMember(Property\Member $member)
 * @method MovieTheater setMemberOf(Property\MemberOf $memberOf)
 * @method MovieTheater setNaics(Property\Naics $naics)
 * @method MovieTheater setName(Property\Name $name)
 * @method MovieTheater setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MovieTheater setOpeningHours(Property\OpeningHours $openingHours)
 * @method MovieTheater setOwns(Property\Owns $owns)
 * @method MovieTheater setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MovieTheater setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MovieTheater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MovieTheater setPriceRange(Property\PriceRange $priceRange)
 * @method MovieTheater setReview(Property\Review $review)
 * @method MovieTheater setSameAs(Property\SameAs $sameAs)
 * @method MovieTheater setSeeks(Property\Seeks $seeks)
 * @method MovieTheater setSponsor(Property\Sponsor $sponsor)
 * @method MovieTheater setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MovieTheater setTaxID(Property\TaxID $taxID)
 * @method MovieTheater setTelephone(Property\Telephone $telephone)
 * @method MovieTheater setUrl(Property\Url $url)
 * @method MovieTheater setVatID(Property\VatID $vatID)
 */
class MovieTheater extends EntertainmentBusiness {

	/**
	 * @var Property\ScreenCount
	 */
	private $screenCount;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieTheater';
	}

	/**
	 * Get screen count.
	 * 
	 * @return Property\ScreenCount
	 */
	public function getScreenCount() {
		return $this->screenCount;
	}

	/**
	 * Set screen count.
	 * 
	 * @param Property\ScreenCount $screenCount
	 * @return MovieTheater
	 */
	public function setScreenCount(Property\ScreenCount $screenCount) {
		$this->screenCount = $screenCount;

		return $this;
	}
}