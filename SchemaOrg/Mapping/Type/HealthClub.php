<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HealthClub.
 * 
 * @method HealthClub setAddress(Property\Address $address)
 * @method HealthClub setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HealthClub setAlumni(Property\Alumni $alumni)
 * @method HealthClub setAreaServed(Property\AreaServed $areaServed)
 * @method HealthClub setAward(Property\Award $award)
 * @method HealthClub setBrand(Property\Brand $brand)
 * @method HealthClub setContactPoint(Property\ContactPoint $contactPoint)
 * @method HealthClub setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HealthClub setDepartment(Property\Department $department)
 * @method HealthClub setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HealthClub setDuns(Property\Duns $duns)
 * @method HealthClub setEmail(Property\Email $email)
 * @method HealthClub setEmployee(Property\Employee $employee)
 * @method HealthClub setEvent(Property\Event $event)
 * @method HealthClub setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HealthClub setFounder(Property\Founder $founder)
 * @method HealthClub setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HealthClub setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HealthClub setFunder(Property\Funder $funder)
 * @method HealthClub setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HealthClub setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HealthClub setHasPOS(Property\HasPOS $hasPOS)
 * @method HealthClub setIsicV4(Property\IsicV4 $isicV4)
 * @method HealthClub setLegalName(Property\LegalName $legalName)
 * @method HealthClub setLeiCode(Property\LeiCode $leiCode)
 * @method HealthClub setLocation(Property\Location $location)
 * @method HealthClub setLogo(Property\Logo $logo)
 * @method HealthClub setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HealthClub setMember(Property\Member $member)
 * @method HealthClub setMemberOf(Property\MemberOf $memberOf)
 * @method HealthClub setNaics(Property\Naics $naics)
 * @method HealthClub setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HealthClub setOpeningHours(Property\OpeningHours $openingHours)
 * @method HealthClub setOwns(Property\Owns $owns)
 * @method HealthClub setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HealthClub setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HealthClub setPriceRange(Property\PriceRange $priceRange)
 * @method HealthClub setReview(Property\Review $review)
 * @method HealthClub setSeeks(Property\Seeks $seeks)
 * @method HealthClub setSponsor(Property\Sponsor $sponsor)
 * @method HealthClub setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HealthClub setTaxID(Property\TaxID $taxID)
 * @method HealthClub setTelephone(Property\Telephone $telephone)
 * @method HealthClub setVatID(Property\VatID $vatID)
 */
class HealthClub extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthClub';
	}
}