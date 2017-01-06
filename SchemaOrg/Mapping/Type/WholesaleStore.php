<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WholesaleStore.
 * 
 * @method WholesaleStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method WholesaleStore setAddress(Property\Address $address)
 * @method WholesaleStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method WholesaleStore setAlternateName(Property\AlternateName $alternateName)
 * @method WholesaleStore setAlumni(Property\Alumni $alumni)
 * @method WholesaleStore setAreaServed(Property\AreaServed $areaServed)
 * @method WholesaleStore setAward(Property\Award $award)
 * @method WholesaleStore setBrand(Property\Brand $brand)
 * @method WholesaleStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method WholesaleStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method WholesaleStore setDepartment(Property\Department $department)
 * @method WholesaleStore setDescription(Property\Description $description)
 * @method WholesaleStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WholesaleStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method WholesaleStore setDuns(Property\Duns $duns)
 * @method WholesaleStore setEmail(Property\Email $email)
 * @method WholesaleStore setEmployee(Property\Employee $employee)
 * @method WholesaleStore setEvent(Property\Event $event)
 * @method WholesaleStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method WholesaleStore setFounder(Property\Founder $founder)
 * @method WholesaleStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method WholesaleStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method WholesaleStore setFunder(Property\Funder $funder)
 * @method WholesaleStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method WholesaleStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method WholesaleStore setHasPOS(Property\HasPOS $hasPOS)
 * @method WholesaleStore setImage(Property\Image $image)
 * @method WholesaleStore setIsicV4(Property\IsicV4 $isicV4)
 * @method WholesaleStore setLegalName(Property\LegalName $legalName)
 * @method WholesaleStore setLeiCode(Property\LeiCode $leiCode)
 * @method WholesaleStore setLocation(Property\Location $location)
 * @method WholesaleStore setLogo(Property\Logo $logo)
 * @method WholesaleStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WholesaleStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method WholesaleStore setMember(Property\Member $member)
 * @method WholesaleStore setMemberOf(Property\MemberOf $memberOf)
 * @method WholesaleStore setNaics(Property\Naics $naics)
 * @method WholesaleStore setName(Property\Name $name)
 * @method WholesaleStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method WholesaleStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method WholesaleStore setOwns(Property\Owns $owns)
 * @method WholesaleStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method WholesaleStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method WholesaleStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WholesaleStore setPriceRange(Property\PriceRange $priceRange)
 * @method WholesaleStore setReview(Property\Review $review)
 * @method WholesaleStore setSameAs(Property\SameAs $sameAs)
 * @method WholesaleStore setSeeks(Property\Seeks $seeks)
 * @method WholesaleStore setSponsor(Property\Sponsor $sponsor)
 * @method WholesaleStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method WholesaleStore setTaxID(Property\TaxID $taxID)
 * @method WholesaleStore setTelephone(Property\Telephone $telephone)
 * @method WholesaleStore setUrl(Property\Url $url)
 * @method WholesaleStore setVatID(Property\VatID $vatID)
 */
class WholesaleStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WholesaleStore';
	}
}