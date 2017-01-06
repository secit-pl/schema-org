<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CollegeOrUniversity.
 * 
 * @method CollegeOrUniversity setAdditionalType(Property\AdditionalType $additionalType)
 * @method CollegeOrUniversity setAddress(Property\Address $address)
 * @method CollegeOrUniversity setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CollegeOrUniversity setAlternateName(Property\AlternateName $alternateName)
 * @method CollegeOrUniversity setAlumni(Property\Alumni $alumni)
 * @method CollegeOrUniversity setAreaServed(Property\AreaServed $areaServed)
 * @method CollegeOrUniversity setAward(Property\Award $award)
 * @method CollegeOrUniversity setBrand(Property\Brand $brand)
 * @method CollegeOrUniversity setContactPoint(Property\ContactPoint $contactPoint)
 * @method CollegeOrUniversity setDepartment(Property\Department $department)
 * @method CollegeOrUniversity setDescription(Property\Description $description)
 * @method CollegeOrUniversity setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CollegeOrUniversity setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method CollegeOrUniversity setDuns(Property\Duns $duns)
 * @method CollegeOrUniversity setEmail(Property\Email $email)
 * @method CollegeOrUniversity setEmployee(Property\Employee $employee)
 * @method CollegeOrUniversity setEvent(Property\Event $event)
 * @method CollegeOrUniversity setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CollegeOrUniversity setFounder(Property\Founder $founder)
 * @method CollegeOrUniversity setFoundingDate(Property\FoundingDate $foundingDate)
 * @method CollegeOrUniversity setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method CollegeOrUniversity setFunder(Property\Funder $funder)
 * @method CollegeOrUniversity setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CollegeOrUniversity setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method CollegeOrUniversity setHasPOS(Property\HasPOS $hasPOS)
 * @method CollegeOrUniversity setImage(Property\Image $image)
 * @method CollegeOrUniversity setIsicV4(Property\IsicV4 $isicV4)
 * @method CollegeOrUniversity setLegalName(Property\LegalName $legalName)
 * @method CollegeOrUniversity setLeiCode(Property\LeiCode $leiCode)
 * @method CollegeOrUniversity setLocation(Property\Location $location)
 * @method CollegeOrUniversity setLogo(Property\Logo $logo)
 * @method CollegeOrUniversity setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CollegeOrUniversity setMakesOffer(Property\MakesOffer $makesOffer)
 * @method CollegeOrUniversity setMember(Property\Member $member)
 * @method CollegeOrUniversity setMemberOf(Property\MemberOf $memberOf)
 * @method CollegeOrUniversity setNaics(Property\Naics $naics)
 * @method CollegeOrUniversity setName(Property\Name $name)
 * @method CollegeOrUniversity setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method CollegeOrUniversity setOwns(Property\Owns $owns)
 * @method CollegeOrUniversity setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method CollegeOrUniversity setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CollegeOrUniversity setReview(Property\Review $review)
 * @method CollegeOrUniversity setSameAs(Property\SameAs $sameAs)
 * @method CollegeOrUniversity setSeeks(Property\Seeks $seeks)
 * @method CollegeOrUniversity setSponsor(Property\Sponsor $sponsor)
 * @method CollegeOrUniversity setSubOrganization(Property\SubOrganization $subOrganization)
 * @method CollegeOrUniversity setTaxID(Property\TaxID $taxID)
 * @method CollegeOrUniversity setTelephone(Property\Telephone $telephone)
 * @method CollegeOrUniversity setUrl(Property\Url $url)
 * @method CollegeOrUniversity setVatID(Property\VatID $vatID)
 */
class CollegeOrUniversity extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CollegeOrUniversity';
	}
}