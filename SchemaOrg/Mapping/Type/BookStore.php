<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookStore.
 * 
 * @method BookStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method BookStore setAddress(Property\Address $address)
 * @method BookStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BookStore setAlternateName(Property\AlternateName $alternateName)
 * @method BookStore setAlumni(Property\Alumni $alumni)
 * @method BookStore setAreaServed(Property\AreaServed $areaServed)
 * @method BookStore setAward(Property\Award $award)
 * @method BookStore setBrand(Property\Brand $brand)
 * @method BookStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method BookStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BookStore setDepartment(Property\Department $department)
 * @method BookStore setDescription(Property\Description $description)
 * @method BookStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BookStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BookStore setDuns(Property\Duns $duns)
 * @method BookStore setEmail(Property\Email $email)
 * @method BookStore setEmployee(Property\Employee $employee)
 * @method BookStore setEvent(Property\Event $event)
 * @method BookStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BookStore setFounder(Property\Founder $founder)
 * @method BookStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BookStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BookStore setFunder(Property\Funder $funder)
 * @method BookStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BookStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BookStore setHasPOS(Property\HasPOS $hasPOS)
 * @method BookStore setImage(Property\Image $image)
 * @method BookStore setIsicV4(Property\IsicV4 $isicV4)
 * @method BookStore setLegalName(Property\LegalName $legalName)
 * @method BookStore setLeiCode(Property\LeiCode $leiCode)
 * @method BookStore setLocation(Property\Location $location)
 * @method BookStore setLogo(Property\Logo $logo)
 * @method BookStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BookStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BookStore setMember(Property\Member $member)
 * @method BookStore setMemberOf(Property\MemberOf $memberOf)
 * @method BookStore setNaics(Property\Naics $naics)
 * @method BookStore setName(Property\Name $name)
 * @method BookStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BookStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method BookStore setOwns(Property\Owns $owns)
 * @method BookStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BookStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BookStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BookStore setPriceRange(Property\PriceRange $priceRange)
 * @method BookStore setReview(Property\Review $review)
 * @method BookStore setSameAs(Property\SameAs $sameAs)
 * @method BookStore setSeeks(Property\Seeks $seeks)
 * @method BookStore setSponsor(Property\Sponsor $sponsor)
 * @method BookStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BookStore setTaxID(Property\TaxID $taxID)
 * @method BookStore setTelephone(Property\Telephone $telephone)
 * @method BookStore setUrl(Property\Url $url)
 * @method BookStore setVatID(Property\VatID $vatID)
 */
class BookStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookStore';
	}
}