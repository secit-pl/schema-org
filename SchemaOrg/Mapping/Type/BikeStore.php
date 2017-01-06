<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BikeStore.
 * 
 * @method BikeStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method BikeStore setAddress(Property\Address $address)
 * @method BikeStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BikeStore setAlternateName(Property\AlternateName $alternateName)
 * @method BikeStore setAlumni(Property\Alumni $alumni)
 * @method BikeStore setAreaServed(Property\AreaServed $areaServed)
 * @method BikeStore setAward(Property\Award $award)
 * @method BikeStore setBrand(Property\Brand $brand)
 * @method BikeStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method BikeStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BikeStore setDepartment(Property\Department $department)
 * @method BikeStore setDescription(Property\Description $description)
 * @method BikeStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BikeStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BikeStore setDuns(Property\Duns $duns)
 * @method BikeStore setEmail(Property\Email $email)
 * @method BikeStore setEmployee(Property\Employee $employee)
 * @method BikeStore setEvent(Property\Event $event)
 * @method BikeStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BikeStore setFounder(Property\Founder $founder)
 * @method BikeStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BikeStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BikeStore setFunder(Property\Funder $funder)
 * @method BikeStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BikeStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BikeStore setHasPOS(Property\HasPOS $hasPOS)
 * @method BikeStore setImage(Property\Image $image)
 * @method BikeStore setIsicV4(Property\IsicV4 $isicV4)
 * @method BikeStore setLegalName(Property\LegalName $legalName)
 * @method BikeStore setLeiCode(Property\LeiCode $leiCode)
 * @method BikeStore setLocation(Property\Location $location)
 * @method BikeStore setLogo(Property\Logo $logo)
 * @method BikeStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BikeStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BikeStore setMember(Property\Member $member)
 * @method BikeStore setMemberOf(Property\MemberOf $memberOf)
 * @method BikeStore setNaics(Property\Naics $naics)
 * @method BikeStore setName(Property\Name $name)
 * @method BikeStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BikeStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method BikeStore setOwns(Property\Owns $owns)
 * @method BikeStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BikeStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BikeStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BikeStore setPriceRange(Property\PriceRange $priceRange)
 * @method BikeStore setReview(Property\Review $review)
 * @method BikeStore setSameAs(Property\SameAs $sameAs)
 * @method BikeStore setSeeks(Property\Seeks $seeks)
 * @method BikeStore setSponsor(Property\Sponsor $sponsor)
 * @method BikeStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BikeStore setTaxID(Property\TaxID $taxID)
 * @method BikeStore setTelephone(Property\Telephone $telephone)
 * @method BikeStore setUrl(Property\Url $url)
 * @method BikeStore setVatID(Property\VatID $vatID)
 */
class BikeStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BikeStore';
	}
}