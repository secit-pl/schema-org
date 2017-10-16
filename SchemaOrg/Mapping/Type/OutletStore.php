<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OutletStore.
 * 
 * @method OutletStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method OutletStore setAddress(Property\Address $address)
 * @method OutletStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method OutletStore setAlternateName(Property\AlternateName $alternateName)
 * @method OutletStore setAlumni(Property\Alumni $alumni)
 * @method OutletStore setAreaServed(Property\AreaServed $areaServed)
 * @method OutletStore setAward(Property\Award $award)
 * @method OutletStore setBrand(Property\Brand $brand)
 * @method OutletStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method OutletStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method OutletStore setDepartment(Property\Department $department)
 * @method OutletStore setDescription(Property\Description $description)
 * @method OutletStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OutletStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method OutletStore setDuns(Property\Duns $duns)
 * @method OutletStore setEmail(Property\Email $email)
 * @method OutletStore setEmployee(Property\Employee $employee)
 * @method OutletStore setEvent(Property\Event $event)
 * @method OutletStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method OutletStore setFounder(Property\Founder $founder)
 * @method OutletStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method OutletStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method OutletStore setFunder(Property\Funder $funder)
 * @method OutletStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method OutletStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method OutletStore setHasPOS(Property\HasPOS $hasPOS)
 * @method OutletStore setIdentifier(Property\Identifier $identifier)
 * @method OutletStore setImage(Property\Image $image)
 * @method OutletStore setIsicV4(Property\IsicV4 $isicV4)
 * @method OutletStore setLegalName(Property\LegalName $legalName)
 * @method OutletStore setLeiCode(Property\LeiCode $leiCode)
 * @method OutletStore setLocation(Property\Location $location)
 * @method OutletStore setLogo(Property\Logo $logo)
 * @method OutletStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OutletStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method OutletStore setMember(Property\Member $member)
 * @method OutletStore setMemberOf(Property\MemberOf $memberOf)
 * @method OutletStore setNaics(Property\Naics $naics)
 * @method OutletStore setName(Property\Name $name)
 * @method OutletStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method OutletStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method OutletStore setOwns(Property\Owns $owns)
 * @method OutletStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method OutletStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method OutletStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OutletStore setPriceRange(Property\PriceRange $priceRange)
 * @method OutletStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method OutletStore setReview(Property\Review $review)
 * @method OutletStore setSameAs(Property\SameAs $sameAs)
 * @method OutletStore setSeeks(Property\Seeks $seeks)
 * @method OutletStore setSponsor(Property\Sponsor $sponsor)
 * @method OutletStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method OutletStore setTaxID(Property\TaxID $taxID)
 * @method OutletStore setTelephone(Property\Telephone $telephone)
 * @method OutletStore setUrl(Property\Url $url)
 * @method OutletStore setVatID(Property\VatID $vatID)
 */
class OutletStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutletStore';
	}
}