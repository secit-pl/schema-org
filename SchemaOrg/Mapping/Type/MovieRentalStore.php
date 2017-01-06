<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovieRentalStore.
 * 
 * @method MovieRentalStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method MovieRentalStore setAddress(Property\Address $address)
 * @method MovieRentalStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MovieRentalStore setAlternateName(Property\AlternateName $alternateName)
 * @method MovieRentalStore setAlumni(Property\Alumni $alumni)
 * @method MovieRentalStore setAreaServed(Property\AreaServed $areaServed)
 * @method MovieRentalStore setAward(Property\Award $award)
 * @method MovieRentalStore setBrand(Property\Brand $brand)
 * @method MovieRentalStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method MovieRentalStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MovieRentalStore setDepartment(Property\Department $department)
 * @method MovieRentalStore setDescription(Property\Description $description)
 * @method MovieRentalStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MovieRentalStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MovieRentalStore setDuns(Property\Duns $duns)
 * @method MovieRentalStore setEmail(Property\Email $email)
 * @method MovieRentalStore setEmployee(Property\Employee $employee)
 * @method MovieRentalStore setEvent(Property\Event $event)
 * @method MovieRentalStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MovieRentalStore setFounder(Property\Founder $founder)
 * @method MovieRentalStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MovieRentalStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MovieRentalStore setFunder(Property\Funder $funder)
 * @method MovieRentalStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MovieRentalStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MovieRentalStore setHasPOS(Property\HasPOS $hasPOS)
 * @method MovieRentalStore setImage(Property\Image $image)
 * @method MovieRentalStore setIsicV4(Property\IsicV4 $isicV4)
 * @method MovieRentalStore setLegalName(Property\LegalName $legalName)
 * @method MovieRentalStore setLeiCode(Property\LeiCode $leiCode)
 * @method MovieRentalStore setLocation(Property\Location $location)
 * @method MovieRentalStore setLogo(Property\Logo $logo)
 * @method MovieRentalStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MovieRentalStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MovieRentalStore setMember(Property\Member $member)
 * @method MovieRentalStore setMemberOf(Property\MemberOf $memberOf)
 * @method MovieRentalStore setNaics(Property\Naics $naics)
 * @method MovieRentalStore setName(Property\Name $name)
 * @method MovieRentalStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MovieRentalStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method MovieRentalStore setOwns(Property\Owns $owns)
 * @method MovieRentalStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MovieRentalStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MovieRentalStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MovieRentalStore setPriceRange(Property\PriceRange $priceRange)
 * @method MovieRentalStore setReview(Property\Review $review)
 * @method MovieRentalStore setSameAs(Property\SameAs $sameAs)
 * @method MovieRentalStore setSeeks(Property\Seeks $seeks)
 * @method MovieRentalStore setSponsor(Property\Sponsor $sponsor)
 * @method MovieRentalStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MovieRentalStore setTaxID(Property\TaxID $taxID)
 * @method MovieRentalStore setTelephone(Property\Telephone $telephone)
 * @method MovieRentalStore setUrl(Property\Url $url)
 * @method MovieRentalStore setVatID(Property\VatID $vatID)
 */
class MovieRentalStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieRentalStore';
	}
}