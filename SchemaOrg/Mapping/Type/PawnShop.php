<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PawnShop.
 * 
 * @method PawnShop setAddress(Property\Address $address)
 * @method PawnShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PawnShop setAlumni(Property\Alumni $alumni)
 * @method PawnShop setAreaServed(Property\AreaServed $areaServed)
 * @method PawnShop setAward(Property\Award $award)
 * @method PawnShop setBrand(Property\Brand $brand)
 * @method PawnShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method PawnShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method PawnShop setDepartment(Property\Department $department)
 * @method PawnShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PawnShop setDuns(Property\Duns $duns)
 * @method PawnShop setEmail(Property\Email $email)
 * @method PawnShop setEmployee(Property\Employee $employee)
 * @method PawnShop setEvent(Property\Event $event)
 * @method PawnShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PawnShop setFounder(Property\Founder $founder)
 * @method PawnShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PawnShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PawnShop setFunder(Property\Funder $funder)
 * @method PawnShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PawnShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PawnShop setHasPOS(Property\HasPOS $hasPOS)
 * @method PawnShop setIsicV4(Property\IsicV4 $isicV4)
 * @method PawnShop setLegalName(Property\LegalName $legalName)
 * @method PawnShop setLeiCode(Property\LeiCode $leiCode)
 * @method PawnShop setLocation(Property\Location $location)
 * @method PawnShop setLogo(Property\Logo $logo)
 * @method PawnShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PawnShop setMember(Property\Member $member)
 * @method PawnShop setMemberOf(Property\MemberOf $memberOf)
 * @method PawnShop setNaics(Property\Naics $naics)
 * @method PawnShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PawnShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method PawnShop setOwns(Property\Owns $owns)
 * @method PawnShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PawnShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method PawnShop setPriceRange(Property\PriceRange $priceRange)
 * @method PawnShop setReview(Property\Review $review)
 * @method PawnShop setSeeks(Property\Seeks $seeks)
 * @method PawnShop setSponsor(Property\Sponsor $sponsor)
 * @method PawnShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PawnShop setTaxID(Property\TaxID $taxID)
 * @method PawnShop setTelephone(Property\Telephone $telephone)
 * @method PawnShop setVatID(Property\VatID $vatID)
 */
class PawnShop extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PawnShop';
	}
}