<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoPartsStore.
 * 
 * @method AutoPartsStore setAddress(Property\Address $address)
 * @method AutoPartsStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoPartsStore setAlumni(Property\Alumni $alumni)
 * @method AutoPartsStore setAreaServed(Property\AreaServed $areaServed)
 * @method AutoPartsStore setAward(Property\Award $award)
 * @method AutoPartsStore setBrand(Property\Brand $brand)
 * @method AutoPartsStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoPartsStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoPartsStore setDepartment(Property\Department $department)
 * @method AutoPartsStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoPartsStore setDuns(Property\Duns $duns)
 * @method AutoPartsStore setEmail(Property\Email $email)
 * @method AutoPartsStore setEmployee(Property\Employee $employee)
 * @method AutoPartsStore setEvent(Property\Event $event)
 * @method AutoPartsStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoPartsStore setFounder(Property\Founder $founder)
 * @method AutoPartsStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoPartsStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoPartsStore setFunder(Property\Funder $funder)
 * @method AutoPartsStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoPartsStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoPartsStore setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoPartsStore setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoPartsStore setLegalName(Property\LegalName $legalName)
 * @method AutoPartsStore setLeiCode(Property\LeiCode $leiCode)
 * @method AutoPartsStore setLocation(Property\Location $location)
 * @method AutoPartsStore setLogo(Property\Logo $logo)
 * @method AutoPartsStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoPartsStore setMember(Property\Member $member)
 * @method AutoPartsStore setMemberOf(Property\MemberOf $memberOf)
 * @method AutoPartsStore setNaics(Property\Naics $naics)
 * @method AutoPartsStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoPartsStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoPartsStore setOwns(Property\Owns $owns)
 * @method AutoPartsStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoPartsStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoPartsStore setPriceRange(Property\PriceRange $priceRange)
 * @method AutoPartsStore setReview(Property\Review $review)
 * @method AutoPartsStore setSeeks(Property\Seeks $seeks)
 * @method AutoPartsStore setSponsor(Property\Sponsor $sponsor)
 * @method AutoPartsStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoPartsStore setTaxID(Property\TaxID $taxID)
 * @method AutoPartsStore setTelephone(Property\Telephone $telephone)
 * @method AutoPartsStore setVatID(Property\VatID $vatID)
 */
class AutoPartsStore extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoPartsStore';
	}
}