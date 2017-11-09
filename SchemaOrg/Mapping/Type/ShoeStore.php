<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShoeStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ShoeStoreType instead.
 * 
 * @method ShoeStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ShoeStore setAddress(Property\Address $address)
 * @method ShoeStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ShoeStore setAlternateName(Property\AlternateName $alternateName)
 * @method ShoeStore setAlumni(Property\Alumni $alumni)
 * @method ShoeStore setAreaServed(Property\AreaServed $areaServed)
 * @method ShoeStore setAward(Property\Award $award)
 * @method ShoeStore setBrand(Property\Brand $brand)
 * @method ShoeStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ShoeStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ShoeStore setDepartment(Property\Department $department)
 * @method ShoeStore setDescription(Property\Description $description)
 * @method ShoeStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ShoeStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ShoeStore setDuns(Property\Duns $duns)
 * @method ShoeStore setEmail(Property\Email $email)
 * @method ShoeStore setEmployee(Property\Employee $employee)
 * @method ShoeStore setEvent(Property\Event $event)
 * @method ShoeStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ShoeStore setFounder(Property\Founder $founder)
 * @method ShoeStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ShoeStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ShoeStore setFunder(Property\Funder $funder)
 * @method ShoeStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ShoeStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ShoeStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ShoeStore setIdentifier(Property\Identifier $identifier)
 * @method ShoeStore setImage(Property\Image $image)
 * @method ShoeStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ShoeStore setLegalName(Property\LegalName $legalName)
 * @method ShoeStore setLeiCode(Property\LeiCode $leiCode)
 * @method ShoeStore setLocation(Property\Location $location)
 * @method ShoeStore setLogo(Property\Logo $logo)
 * @method ShoeStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ShoeStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ShoeStore setMember(Property\Member $member)
 * @method ShoeStore setMemberOf(Property\MemberOf $memberOf)
 * @method ShoeStore setNaics(Property\Naics $naics)
 * @method ShoeStore setName(Property\Name $name)
 * @method ShoeStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ShoeStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ShoeStore setOwns(Property\Owns $owns)
 * @method ShoeStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ShoeStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ShoeStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ShoeStore setPriceRange(Property\PriceRange $priceRange)
 * @method ShoeStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ShoeStore setReview(Property\Review $review)
 * @method ShoeStore setSameAs(Property\SameAs $sameAs)
 * @method ShoeStore setSeeks(Property\Seeks $seeks)
 * @method ShoeStore setSponsor(Property\Sponsor $sponsor)
 * @method ShoeStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ShoeStore setTaxID(Property\TaxID $taxID)
 * @method ShoeStore setTelephone(Property\Telephone $telephone)
 * @method ShoeStore setUrl(Property\Url $url)
 * @method ShoeStore setVatID(Property\VatID $vatID)
 */
class ShoeStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoeStore';
	}
}