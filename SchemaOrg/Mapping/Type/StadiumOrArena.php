<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StadiumOrArena.
 * 
 * @method StadiumOrArena setAddress(Property\Address $address)
 * @method StadiumOrArena setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method StadiumOrArena setAlumni(Property\Alumni $alumni)
 * @method StadiumOrArena setAreaServed(Property\AreaServed $areaServed)
 * @method StadiumOrArena setAward(Property\Award $award)
 * @method StadiumOrArena setBrand(Property\Brand $brand)
 * @method StadiumOrArena setContactPoint(Property\ContactPoint $contactPoint)
 * @method StadiumOrArena setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method StadiumOrArena setDepartment(Property\Department $department)
 * @method StadiumOrArena setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method StadiumOrArena setDuns(Property\Duns $duns)
 * @method StadiumOrArena setEmail(Property\Email $email)
 * @method StadiumOrArena setEmployee(Property\Employee $employee)
 * @method StadiumOrArena setEvent(Property\Event $event)
 * @method StadiumOrArena setFaxNumber(Property\FaxNumber $faxNumber)
 * @method StadiumOrArena setFounder(Property\Founder $founder)
 * @method StadiumOrArena setFoundingDate(Property\FoundingDate $foundingDate)
 * @method StadiumOrArena setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method StadiumOrArena setFunder(Property\Funder $funder)
 * @method StadiumOrArena setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method StadiumOrArena setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method StadiumOrArena setHasPOS(Property\HasPOS $hasPOS)
 * @method StadiumOrArena setIsicV4(Property\IsicV4 $isicV4)
 * @method StadiumOrArena setLegalName(Property\LegalName $legalName)
 * @method StadiumOrArena setLeiCode(Property\LeiCode $leiCode)
 * @method StadiumOrArena setLocation(Property\Location $location)
 * @method StadiumOrArena setLogo(Property\Logo $logo)
 * @method StadiumOrArena setMakesOffer(Property\MakesOffer $makesOffer)
 * @method StadiumOrArena setMember(Property\Member $member)
 * @method StadiumOrArena setMemberOf(Property\MemberOf $memberOf)
 * @method StadiumOrArena setNaics(Property\Naics $naics)
 * @method StadiumOrArena setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method StadiumOrArena setOpeningHours(Property\OpeningHours $openingHours)
 * @method StadiumOrArena setOwns(Property\Owns $owns)
 * @method StadiumOrArena setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method StadiumOrArena setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method StadiumOrArena setPriceRange(Property\PriceRange $priceRange)
 * @method StadiumOrArena setReview(Property\Review $review)
 * @method StadiumOrArena setSeeks(Property\Seeks $seeks)
 * @method StadiumOrArena setSponsor(Property\Sponsor $sponsor)
 * @method StadiumOrArena setSubOrganization(Property\SubOrganization $subOrganization)
 * @method StadiumOrArena setTaxID(Property\TaxID $taxID)
 * @method StadiumOrArena setTelephone(Property\Telephone $telephone)
 * @method StadiumOrArena setVatID(Property\VatID $vatID)
 */
class StadiumOrArena extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StadiumOrArena';
	}
}