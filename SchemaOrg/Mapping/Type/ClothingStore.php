<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ClothingStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ClothingStoreType instead.
 * 
 * @method ClothingStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ClothingStore setAddress(Property\Address $address)
 * @method ClothingStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ClothingStore setAlternateName(Property\AlternateName $alternateName)
 * @method ClothingStore setAlumni(Property\Alumni $alumni)
 * @method ClothingStore setAreaServed(Property\AreaServed $areaServed)
 * @method ClothingStore setAward(Property\Award $award)
 * @method ClothingStore setBrand(Property\Brand $brand)
 * @method ClothingStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ClothingStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ClothingStore setDepartment(Property\Department $department)
 * @method ClothingStore setDescription(Property\Description $description)
 * @method ClothingStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ClothingStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ClothingStore setDuns(Property\Duns $duns)
 * @method ClothingStore setEmail(Property\Email $email)
 * @method ClothingStore setEmployee(Property\Employee $employee)
 * @method ClothingStore setEvent(Property\Event $event)
 * @method ClothingStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ClothingStore setFounder(Property\Founder $founder)
 * @method ClothingStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ClothingStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ClothingStore setFunder(Property\Funder $funder)
 * @method ClothingStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ClothingStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ClothingStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ClothingStore setIdentifier(Property\Identifier $identifier)
 * @method ClothingStore setImage(Property\Image $image)
 * @method ClothingStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ClothingStore setLegalName(Property\LegalName $legalName)
 * @method ClothingStore setLeiCode(Property\LeiCode $leiCode)
 * @method ClothingStore setLocation(Property\Location $location)
 * @method ClothingStore setLogo(Property\Logo $logo)
 * @method ClothingStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ClothingStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ClothingStore setMember(Property\Member $member)
 * @method ClothingStore setMemberOf(Property\MemberOf $memberOf)
 * @method ClothingStore setNaics(Property\Naics $naics)
 * @method ClothingStore setName(Property\Name $name)
 * @method ClothingStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ClothingStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ClothingStore setOwns(Property\Owns $owns)
 * @method ClothingStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ClothingStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ClothingStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ClothingStore setPriceRange(Property\PriceRange $priceRange)
 * @method ClothingStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ClothingStore setReview(Property\Review $review)
 * @method ClothingStore setSameAs(Property\SameAs $sameAs)
 * @method ClothingStore setSeeks(Property\Seeks $seeks)
 * @method ClothingStore setSponsor(Property\Sponsor $sponsor)
 * @method ClothingStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ClothingStore setTaxID(Property\TaxID $taxID)
 * @method ClothingStore setTelephone(Property\Telephone $telephone)
 * @method ClothingStore setUrl(Property\Url $url)
 * @method ClothingStore setVatID(Property\VatID $vatID)
 */
class ClothingStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ClothingStore';
	}
}