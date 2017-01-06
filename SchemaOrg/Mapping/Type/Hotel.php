<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Hotel.
 * 
 * @method Hotel setAdditionalType(Property\AdditionalType $additionalType)
 * @method Hotel setAddress(Property\Address $address)
 * @method Hotel setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Hotel setAlternateName(Property\AlternateName $alternateName)
 * @method Hotel setAlumni(Property\Alumni $alumni)
 * @method Hotel setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Hotel setAreaServed(Property\AreaServed $areaServed)
 * @method Hotel setAudience(Property\Audience $audience)
 * @method Hotel setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Hotel setAward(Property\Award $award)
 * @method Hotel setBrand(Property\Brand $brand)
 * @method Hotel setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Hotel setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Hotel setContactPoint(Property\ContactPoint $contactPoint)
 * @method Hotel setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Hotel setDepartment(Property\Department $department)
 * @method Hotel setDescription(Property\Description $description)
 * @method Hotel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Hotel setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Hotel setDuns(Property\Duns $duns)
 * @method Hotel setEmail(Property\Email $email)
 * @method Hotel setEmployee(Property\Employee $employee)
 * @method Hotel setEvent(Property\Event $event)
 * @method Hotel setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Hotel setFounder(Property\Founder $founder)
 * @method Hotel setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Hotel setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Hotel setFunder(Property\Funder $funder)
 * @method Hotel setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Hotel setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Hotel setHasPOS(Property\HasPOS $hasPOS)
 * @method Hotel setImage(Property\Image $image)
 * @method Hotel setIsicV4(Property\IsicV4 $isicV4)
 * @method Hotel setLegalName(Property\LegalName $legalName)
 * @method Hotel setLeiCode(Property\LeiCode $leiCode)
 * @method Hotel setLocation(Property\Location $location)
 * @method Hotel setLogo(Property\Logo $logo)
 * @method Hotel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Hotel setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Hotel setMember(Property\Member $member)
 * @method Hotel setMemberOf(Property\MemberOf $memberOf)
 * @method Hotel setNaics(Property\Naics $naics)
 * @method Hotel setName(Property\Name $name)
 * @method Hotel setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Hotel setOpeningHours(Property\OpeningHours $openingHours)
 * @method Hotel setOwns(Property\Owns $owns)
 * @method Hotel setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Hotel setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Hotel setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Hotel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Hotel setPriceRange(Property\PriceRange $priceRange)
 * @method Hotel setReview(Property\Review $review)
 * @method Hotel setSameAs(Property\SameAs $sameAs)
 * @method Hotel setSeeks(Property\Seeks $seeks)
 * @method Hotel setSponsor(Property\Sponsor $sponsor)
 * @method Hotel setStarRating(Property\StarRating $starRating)
 * @method Hotel setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Hotel setTaxID(Property\TaxID $taxID)
 * @method Hotel setTelephone(Property\Telephone $telephone)
 * @method Hotel setUrl(Property\Url $url)
 * @method Hotel setVatID(Property\VatID $vatID)
 */
class Hotel extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hotel';
	}
}