<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Hostel.
 * 
 * @method Hostel setAdditionalType(Property\AdditionalType $additionalType)
 * @method Hostel setAddress(Property\Address $address)
 * @method Hostel setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Hostel setAlternateName(Property\AlternateName $alternateName)
 * @method Hostel setAlumni(Property\Alumni $alumni)
 * @method Hostel setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Hostel setAreaServed(Property\AreaServed $areaServed)
 * @method Hostel setAudience(Property\Audience $audience)
 * @method Hostel setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Hostel setAward(Property\Award $award)
 * @method Hostel setBrand(Property\Brand $brand)
 * @method Hostel setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Hostel setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Hostel setContactPoint(Property\ContactPoint $contactPoint)
 * @method Hostel setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Hostel setDepartment(Property\Department $department)
 * @method Hostel setDescription(Property\Description $description)
 * @method Hostel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Hostel setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Hostel setDuns(Property\Duns $duns)
 * @method Hostel setEmail(Property\Email $email)
 * @method Hostel setEmployee(Property\Employee $employee)
 * @method Hostel setEvent(Property\Event $event)
 * @method Hostel setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Hostel setFounder(Property\Founder $founder)
 * @method Hostel setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Hostel setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Hostel setFunder(Property\Funder $funder)
 * @method Hostel setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Hostel setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Hostel setHasPOS(Property\HasPOS $hasPOS)
 * @method Hostel setIdentifier(Property\Identifier $identifier)
 * @method Hostel setImage(Property\Image $image)
 * @method Hostel setIsicV4(Property\IsicV4 $isicV4)
 * @method Hostel setLegalName(Property\LegalName $legalName)
 * @method Hostel setLeiCode(Property\LeiCode $leiCode)
 * @method Hostel setLocation(Property\Location $location)
 * @method Hostel setLogo(Property\Logo $logo)
 * @method Hostel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Hostel setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Hostel setMember(Property\Member $member)
 * @method Hostel setMemberOf(Property\MemberOf $memberOf)
 * @method Hostel setNaics(Property\Naics $naics)
 * @method Hostel setName(Property\Name $name)
 * @method Hostel setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Hostel setOpeningHours(Property\OpeningHours $openingHours)
 * @method Hostel setOwns(Property\Owns $owns)
 * @method Hostel setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Hostel setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Hostel setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Hostel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Hostel setPriceRange(Property\PriceRange $priceRange)
 * @method Hostel setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Hostel setReview(Property\Review $review)
 * @method Hostel setSameAs(Property\SameAs $sameAs)
 * @method Hostel setSeeks(Property\Seeks $seeks)
 * @method Hostel setSponsor(Property\Sponsor $sponsor)
 * @method Hostel setStarRating(Property\StarRating $starRating)
 * @method Hostel setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Hostel setTaxID(Property\TaxID $taxID)
 * @method Hostel setTelephone(Property\Telephone $telephone)
 * @method Hostel setUrl(Property\Url $url)
 * @method Hostel setVatID(Property\VatID $vatID)
 */
class Hostel extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hostel';
	}
}