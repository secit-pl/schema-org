<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HobbyShop.
 * 
 * @method HobbyShop setAddress(Property\Address $address)
 * @method HobbyShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HobbyShop setAlumni(Property\Alumni $alumni)
 * @method HobbyShop setAreaServed(Property\AreaServed $areaServed)
 * @method HobbyShop setAward(Property\Award $award)
 * @method HobbyShop setBrand(Property\Brand $brand)
 * @method HobbyShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method HobbyShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HobbyShop setDepartment(Property\Department $department)
 * @method HobbyShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HobbyShop setDuns(Property\Duns $duns)
 * @method HobbyShop setEmail(Property\Email $email)
 * @method HobbyShop setEmployee(Property\Employee $employee)
 * @method HobbyShop setEvent(Property\Event $event)
 * @method HobbyShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HobbyShop setFounder(Property\Founder $founder)
 * @method HobbyShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HobbyShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HobbyShop setFunder(Property\Funder $funder)
 * @method HobbyShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HobbyShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HobbyShop setHasPOS(Property\HasPOS $hasPOS)
 * @method HobbyShop setIsicV4(Property\IsicV4 $isicV4)
 * @method HobbyShop setLegalName(Property\LegalName $legalName)
 * @method HobbyShop setLeiCode(Property\LeiCode $leiCode)
 * @method HobbyShop setLocation(Property\Location $location)
 * @method HobbyShop setLogo(Property\Logo $logo)
 * @method HobbyShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HobbyShop setMember(Property\Member $member)
 * @method HobbyShop setMemberOf(Property\MemberOf $memberOf)
 * @method HobbyShop setNaics(Property\Naics $naics)
 * @method HobbyShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HobbyShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method HobbyShop setOwns(Property\Owns $owns)
 * @method HobbyShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HobbyShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HobbyShop setPriceRange(Property\PriceRange $priceRange)
 * @method HobbyShop setReview(Property\Review $review)
 * @method HobbyShop setSeeks(Property\Seeks $seeks)
 * @method HobbyShop setSponsor(Property\Sponsor $sponsor)
 * @method HobbyShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HobbyShop setTaxID(Property\TaxID $taxID)
 * @method HobbyShop setTelephone(Property\Telephone $telephone)
 * @method HobbyShop setVatID(Property\VatID $vatID)
 */
class HobbyShop extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HobbyShop';
	}
}