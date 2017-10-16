<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiquorStore.
 * 
 * @method LiquorStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method LiquorStore setAddress(Property\Address $address)
 * @method LiquorStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LiquorStore setAlternateName(Property\AlternateName $alternateName)
 * @method LiquorStore setAlumni(Property\Alumni $alumni)
 * @method LiquorStore setAreaServed(Property\AreaServed $areaServed)
 * @method LiquorStore setAward(Property\Award $award)
 * @method LiquorStore setBrand(Property\Brand $brand)
 * @method LiquorStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method LiquorStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method LiquorStore setDepartment(Property\Department $department)
 * @method LiquorStore setDescription(Property\Description $description)
 * @method LiquorStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LiquorStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method LiquorStore setDuns(Property\Duns $duns)
 * @method LiquorStore setEmail(Property\Email $email)
 * @method LiquorStore setEmployee(Property\Employee $employee)
 * @method LiquorStore setEvent(Property\Event $event)
 * @method LiquorStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LiquorStore setFounder(Property\Founder $founder)
 * @method LiquorStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method LiquorStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method LiquorStore setFunder(Property\Funder $funder)
 * @method LiquorStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LiquorStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method LiquorStore setHasPOS(Property\HasPOS $hasPOS)
 * @method LiquorStore setIdentifier(Property\Identifier $identifier)
 * @method LiquorStore setImage(Property\Image $image)
 * @method LiquorStore setIsicV4(Property\IsicV4 $isicV4)
 * @method LiquorStore setLegalName(Property\LegalName $legalName)
 * @method LiquorStore setLeiCode(Property\LeiCode $leiCode)
 * @method LiquorStore setLocation(Property\Location $location)
 * @method LiquorStore setLogo(Property\Logo $logo)
 * @method LiquorStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LiquorStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method LiquorStore setMember(Property\Member $member)
 * @method LiquorStore setMemberOf(Property\MemberOf $memberOf)
 * @method LiquorStore setNaics(Property\Naics $naics)
 * @method LiquorStore setName(Property\Name $name)
 * @method LiquorStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method LiquorStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method LiquorStore setOwns(Property\Owns $owns)
 * @method LiquorStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method LiquorStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method LiquorStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LiquorStore setPriceRange(Property\PriceRange $priceRange)
 * @method LiquorStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method LiquorStore setReview(Property\Review $review)
 * @method LiquorStore setSameAs(Property\SameAs $sameAs)
 * @method LiquorStore setSeeks(Property\Seeks $seeks)
 * @method LiquorStore setSponsor(Property\Sponsor $sponsor)
 * @method LiquorStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method LiquorStore setTaxID(Property\TaxID $taxID)
 * @method LiquorStore setTelephone(Property\Telephone $telephone)
 * @method LiquorStore setUrl(Property\Url $url)
 * @method LiquorStore setVatID(Property\VatID $vatID)
 */
class LiquorStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiquorStore';
	}
}