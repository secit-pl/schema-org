<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DaySpa.
 * 
 * @method DaySpa setAddress(Property\Address $address)
 * @method DaySpa setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DaySpa setAlumni(Property\Alumni $alumni)
 * @method DaySpa setAreaServed(Property\AreaServed $areaServed)
 * @method DaySpa setAward(Property\Award $award)
 * @method DaySpa setBrand(Property\Brand $brand)
 * @method DaySpa setContactPoint(Property\ContactPoint $contactPoint)
 * @method DaySpa setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method DaySpa setDepartment(Property\Department $department)
 * @method DaySpa setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method DaySpa setDuns(Property\Duns $duns)
 * @method DaySpa setEmail(Property\Email $email)
 * @method DaySpa setEmployee(Property\Employee $employee)
 * @method DaySpa setEvent(Property\Event $event)
 * @method DaySpa setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DaySpa setFounder(Property\Founder $founder)
 * @method DaySpa setFoundingDate(Property\FoundingDate $foundingDate)
 * @method DaySpa setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method DaySpa setFunder(Property\Funder $funder)
 * @method DaySpa setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DaySpa setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DaySpa setHasPOS(Property\HasPOS $hasPOS)
 * @method DaySpa setIsicV4(Property\IsicV4 $isicV4)
 * @method DaySpa setLegalName(Property\LegalName $legalName)
 * @method DaySpa setLeiCode(Property\LeiCode $leiCode)
 * @method DaySpa setLocation(Property\Location $location)
 * @method DaySpa setLogo(Property\Logo $logo)
 * @method DaySpa setMakesOffer(Property\MakesOffer $makesOffer)
 * @method DaySpa setMember(Property\Member $member)
 * @method DaySpa setMemberOf(Property\MemberOf $memberOf)
 * @method DaySpa setNaics(Property\Naics $naics)
 * @method DaySpa setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method DaySpa setOpeningHours(Property\OpeningHours $openingHours)
 * @method DaySpa setOwns(Property\Owns $owns)
 * @method DaySpa setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method DaySpa setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method DaySpa setPriceRange(Property\PriceRange $priceRange)
 * @method DaySpa setReview(Property\Review $review)
 * @method DaySpa setSeeks(Property\Seeks $seeks)
 * @method DaySpa setSponsor(Property\Sponsor $sponsor)
 * @method DaySpa setSubOrganization(Property\SubOrganization $subOrganization)
 * @method DaySpa setTaxID(Property\TaxID $taxID)
 * @method DaySpa setTelephone(Property\Telephone $telephone)
 * @method DaySpa setVatID(Property\VatID $vatID)
 */
class DaySpa extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DaySpa';
	}
}