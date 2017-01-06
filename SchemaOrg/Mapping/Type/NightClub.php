<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NightClub.
 * 
 * @method NightClub setAdditionalType(Property\AdditionalType $additionalType)
 * @method NightClub setAddress(Property\Address $address)
 * @method NightClub setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method NightClub setAlternateName(Property\AlternateName $alternateName)
 * @method NightClub setAlumni(Property\Alumni $alumni)
 * @method NightClub setAreaServed(Property\AreaServed $areaServed)
 * @method NightClub setAward(Property\Award $award)
 * @method NightClub setBrand(Property\Brand $brand)
 * @method NightClub setContactPoint(Property\ContactPoint $contactPoint)
 * @method NightClub setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method NightClub setDepartment(Property\Department $department)
 * @method NightClub setDescription(Property\Description $description)
 * @method NightClub setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method NightClub setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method NightClub setDuns(Property\Duns $duns)
 * @method NightClub setEmail(Property\Email $email)
 * @method NightClub setEmployee(Property\Employee $employee)
 * @method NightClub setEvent(Property\Event $event)
 * @method NightClub setFaxNumber(Property\FaxNumber $faxNumber)
 * @method NightClub setFounder(Property\Founder $founder)
 * @method NightClub setFoundingDate(Property\FoundingDate $foundingDate)
 * @method NightClub setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method NightClub setFunder(Property\Funder $funder)
 * @method NightClub setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method NightClub setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method NightClub setHasPOS(Property\HasPOS $hasPOS)
 * @method NightClub setImage(Property\Image $image)
 * @method NightClub setIsicV4(Property\IsicV4 $isicV4)
 * @method NightClub setLegalName(Property\LegalName $legalName)
 * @method NightClub setLeiCode(Property\LeiCode $leiCode)
 * @method NightClub setLocation(Property\Location $location)
 * @method NightClub setLogo(Property\Logo $logo)
 * @method NightClub setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method NightClub setMakesOffer(Property\MakesOffer $makesOffer)
 * @method NightClub setMember(Property\Member $member)
 * @method NightClub setMemberOf(Property\MemberOf $memberOf)
 * @method NightClub setNaics(Property\Naics $naics)
 * @method NightClub setName(Property\Name $name)
 * @method NightClub setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method NightClub setOpeningHours(Property\OpeningHours $openingHours)
 * @method NightClub setOwns(Property\Owns $owns)
 * @method NightClub setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method NightClub setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method NightClub setPotentialAction(Property\PotentialAction $potentialAction)
 * @method NightClub setPriceRange(Property\PriceRange $priceRange)
 * @method NightClub setReview(Property\Review $review)
 * @method NightClub setSameAs(Property\SameAs $sameAs)
 * @method NightClub setSeeks(Property\Seeks $seeks)
 * @method NightClub setSponsor(Property\Sponsor $sponsor)
 * @method NightClub setSubOrganization(Property\SubOrganization $subOrganization)
 * @method NightClub setTaxID(Property\TaxID $taxID)
 * @method NightClub setTelephone(Property\Telephone $telephone)
 * @method NightClub setUrl(Property\Url $url)
 * @method NightClub setVatID(Property\VatID $vatID)
 */
class NightClub extends EntertainmentBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NightClub';
	}
}