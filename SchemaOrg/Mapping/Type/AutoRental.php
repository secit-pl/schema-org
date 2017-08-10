<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoRental.
 * 
 * @method AutoRental setAddress(Property\Address $address)
 * @method AutoRental setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoRental setAlumni(Property\Alumni $alumni)
 * @method AutoRental setAreaServed(Property\AreaServed $areaServed)
 * @method AutoRental setAward(Property\Award $award)
 * @method AutoRental setBrand(Property\Brand $brand)
 * @method AutoRental setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoRental setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoRental setDepartment(Property\Department $department)
 * @method AutoRental setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoRental setDuns(Property\Duns $duns)
 * @method AutoRental setEmail(Property\Email $email)
 * @method AutoRental setEmployee(Property\Employee $employee)
 * @method AutoRental setEvent(Property\Event $event)
 * @method AutoRental setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoRental setFounder(Property\Founder $founder)
 * @method AutoRental setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoRental setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoRental setFunder(Property\Funder $funder)
 * @method AutoRental setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoRental setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoRental setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoRental setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoRental setLegalName(Property\LegalName $legalName)
 * @method AutoRental setLeiCode(Property\LeiCode $leiCode)
 * @method AutoRental setLocation(Property\Location $location)
 * @method AutoRental setLogo(Property\Logo $logo)
 * @method AutoRental setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoRental setMember(Property\Member $member)
 * @method AutoRental setMemberOf(Property\MemberOf $memberOf)
 * @method AutoRental setNaics(Property\Naics $naics)
 * @method AutoRental setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoRental setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoRental setOwns(Property\Owns $owns)
 * @method AutoRental setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoRental setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoRental setPriceRange(Property\PriceRange $priceRange)
 * @method AutoRental setReview(Property\Review $review)
 * @method AutoRental setSeeks(Property\Seeks $seeks)
 * @method AutoRental setSponsor(Property\Sponsor $sponsor)
 * @method AutoRental setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoRental setTaxID(Property\TaxID $taxID)
 * @method AutoRental setTelephone(Property\Telephone $telephone)
 * @method AutoRental setVatID(Property\VatID $vatID)
 */
class AutoRental extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRental';
	}
}