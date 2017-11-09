<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProgramMembershipType.
 * 
 * @method ProgramMembershipType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProgramMembershipType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProgramMembershipType setDescription(Property\DescriptionProperty $description)
 * @method ProgramMembershipType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProgramMembershipType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProgramMembershipType setImage(Property\ImageProperty $image)
 * @method ProgramMembershipType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProgramMembershipType setName(Property\NameProperty $name)
 * @method ProgramMembershipType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProgramMembershipType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProgramMembershipType setUrl(Property\UrlProperty $url)
 */
class ProgramMembershipType extends IntangibleType {

	/**
	 * @var Property\HostingOrganizationProperty
	 */
	private $hostingOrganization;

	/**
	 * @var Property\MemberProperty
	 */
	private $member;

	/**
	 * @var Property\MembershipNumberProperty
	 */
	private $membershipNumber;

	/**
	 * @var Property\ProgramNameProperty
	 */
	private $programName;

	/**
	 * Get hosting organization.
	 * 
	 * @return Property\HostingOrganizationProperty
	 */
	public function getHostingOrganization() {
		return $this->hostingOrganization;
	}

	/**
	 * Get member.
	 * 
	 * @return Property\MemberProperty
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Get membership number.
	 * 
	 * @return Property\MembershipNumberProperty
	 */
	public function getMembershipNumber() {
		return $this->membershipNumber;
	}

	/**
	 * Get program name.
	 * 
	 * @return Property\ProgramNameProperty
	 */
	public function getProgramName() {
		return $this->programName;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProgramMembership';
	}

	/**
	 * Set hosting organization.
	 * 
	 * @param Property\HostingOrganizationProperty $hostingOrganization
	 * @return ProgramMembershipType
	 */
	public function setHostingOrganization(Property\HostingOrganizationProperty $hostingOrganization) {
		$this->hostingOrganization = $hostingOrganization;

		return $this;
	}

	/**
	 * Set member.
	 * 
	 * @param Property\MemberProperty $member
	 * @return ProgramMembershipType
	 */
	public function setMember(Property\MemberProperty $member) {
		$this->member = $member;

		return $this;
	}

	/**
	 * Set membership number.
	 * 
	 * @param Property\MembershipNumberProperty $membershipNumber
	 * @return ProgramMembershipType
	 */
	public function setMembershipNumber(Property\MembershipNumberProperty $membershipNumber) {
		$this->membershipNumber = $membershipNumber;

		return $this;
	}

	/**
	 * Set program name.
	 * 
	 * @param Property\ProgramNameProperty $programName
	 * @return ProgramMembershipType
	 */
	public function setProgramName(Property\ProgramNameProperty $programName) {
		$this->programName = $programName;

		return $this;
	}
}