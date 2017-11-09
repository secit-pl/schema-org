<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ArtGallery.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ArtGalleryType instead.
 * 
 * @method ArtGallery setAdditionalType(Property\AdditionalType $additionalType)
 * @method ArtGallery setAddress(Property\Address $address)
 * @method ArtGallery setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ArtGallery setAlternateName(Property\AlternateName $alternateName)
 * @method ArtGallery setAlumni(Property\Alumni $alumni)
 * @method ArtGallery setAreaServed(Property\AreaServed $areaServed)
 * @method ArtGallery setAward(Property\Award $award)
 * @method ArtGallery setBrand(Property\Brand $brand)
 * @method ArtGallery setContactPoint(Property\ContactPoint $contactPoint)
 * @method ArtGallery setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ArtGallery setDepartment(Property\Department $department)
 * @method ArtGallery setDescription(Property\Description $description)
 * @method ArtGallery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ArtGallery setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ArtGallery setDuns(Property\Duns $duns)
 * @method ArtGallery setEmail(Property\Email $email)
 * @method ArtGallery setEmployee(Property\Employee $employee)
 * @method ArtGallery setEvent(Property\Event $event)
 * @method ArtGallery setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ArtGallery setFounder(Property\Founder $founder)
 * @method ArtGallery setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ArtGallery setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ArtGallery setFunder(Property\Funder $funder)
 * @method ArtGallery setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ArtGallery setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ArtGallery setHasPOS(Property\HasPOS $hasPOS)
 * @method ArtGallery setIdentifier(Property\Identifier $identifier)
 * @method ArtGallery setImage(Property\Image $image)
 * @method ArtGallery setIsicV4(Property\IsicV4 $isicV4)
 * @method ArtGallery setLegalName(Property\LegalName $legalName)
 * @method ArtGallery setLeiCode(Property\LeiCode $leiCode)
 * @method ArtGallery setLocation(Property\Location $location)
 * @method ArtGallery setLogo(Property\Logo $logo)
 * @method ArtGallery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ArtGallery setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ArtGallery setMember(Property\Member $member)
 * @method ArtGallery setMemberOf(Property\MemberOf $memberOf)
 * @method ArtGallery setNaics(Property\Naics $naics)
 * @method ArtGallery setName(Property\Name $name)
 * @method ArtGallery setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ArtGallery setOpeningHours(Property\OpeningHours $openingHours)
 * @method ArtGallery setOwns(Property\Owns $owns)
 * @method ArtGallery setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ArtGallery setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ArtGallery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ArtGallery setPriceRange(Property\PriceRange $priceRange)
 * @method ArtGallery setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ArtGallery setReview(Property\Review $review)
 * @method ArtGallery setSameAs(Property\SameAs $sameAs)
 * @method ArtGallery setSeeks(Property\Seeks $seeks)
 * @method ArtGallery setSponsor(Property\Sponsor $sponsor)
 * @method ArtGallery setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ArtGallery setTaxID(Property\TaxID $taxID)
 * @method ArtGallery setTelephone(Property\Telephone $telephone)
 * @method ArtGallery setUrl(Property\Url $url)
 * @method ArtGallery setVatID(Property\VatID $vatID)
 */
class ArtGallery extends EntertainmentBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArtGallery';
	}
}