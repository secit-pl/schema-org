<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ToyStore.
 * 
 * @method ToyStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ToyStore setAddress(Property\Address $address)
 * @method ToyStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ToyStore setAlternateName(Property\AlternateName $alternateName)
 * @method ToyStore setAlumni(Property\Alumni $alumni)
 * @method ToyStore setAreaServed(Property\AreaServed $areaServed)
 * @method ToyStore setAward(Property\Award $award)
 * @method ToyStore setBrand(Property\Brand $brand)
 * @method ToyStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ToyStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ToyStore setDepartment(Property\Department $department)
 * @method ToyStore setDescription(Property\Description $description)
 * @method ToyStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ToyStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ToyStore setDuns(Property\Duns $duns)
 * @method ToyStore setEmail(Property\Email $email)
 * @method ToyStore setEmployee(Property\Employee $employee)
 * @method ToyStore setEvent(Property\Event $event)
 * @method ToyStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ToyStore setFounder(Property\Founder $founder)
 * @method ToyStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ToyStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ToyStore setFunder(Property\Funder $funder)
 * @method ToyStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ToyStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ToyStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ToyStore setImage(Property\Image $image)
 * @method ToyStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ToyStore setLegalName(Property\LegalName $legalName)
 * @method ToyStore setLeiCode(Property\LeiCode $leiCode)
 * @method ToyStore setLocation(Property\Location $location)
 * @method ToyStore setLogo(Property\Logo $logo)
 * @method ToyStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ToyStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ToyStore setMember(Property\Member $member)
 * @method ToyStore setMemberOf(Property\MemberOf $memberOf)
 * @method ToyStore setNaics(Property\Naics $naics)
 * @method ToyStore setName(Property\Name $name)
 * @method ToyStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ToyStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ToyStore setOwns(Property\Owns $owns)
 * @method ToyStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ToyStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ToyStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ToyStore setPriceRange(Property\PriceRange $priceRange)
 * @method ToyStore setReview(Property\Review $review)
 * @method ToyStore setSameAs(Property\SameAs $sameAs)
 * @method ToyStore setSeeks(Property\Seeks $seeks)
 * @method ToyStore setSponsor(Property\Sponsor $sponsor)
 * @method ToyStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ToyStore setTaxID(Property\TaxID $taxID)
 * @method ToyStore setTelephone(Property\Telephone $telephone)
 * @method ToyStore setUrl(Property\Url $url)
 * @method ToyStore setVatID(Property\VatID $vatID)
 */
class ToyStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ToyStore';
	}
}