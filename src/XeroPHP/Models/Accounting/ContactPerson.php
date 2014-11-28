<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote\Object as RemoteObject;

class ContactPerson extends RemoteObject {

    /**
     * First name of person 
     *
     * @property string FirstName
     */

    /**
     * Last name of person 
     *
     * @property string LastName
     */

    /**
     * Email address of person 
     *
     * @property string EmailAddress
     */

    /**
     * boolean to indicate whether contact should be included on emails with invoices etc. 
     *
     * @property bool[] IncludeInEmails
     */

    /**
     * This is a read only identifier which is generated by Xero when a contact is created either in the application 
     * or via the API. i.e. You cannot specify this element when creating a new contact 
     *
     * @property string ContactID
     */

    /**
     * This can be updated via the API only i.e. This field is read only on the Xero contact screen 
     *
     * @property date ContactNumber
     */

    /**
     * This can be updated via API or in the contact record in Xero 
     *
     * @property date Name
     */


    /**
     * @return string
     */
    public function getFirstName(){
        return $this->_data['FirstName'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setFirstName($value){
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(){
        return $this->_data['LastName'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setLastName($value){
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(){
        return $this->_data['EmailAddress'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setEmailAddress($value){
        $this->_data['EmailAddress'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInEmails(){
        return $this->_data['IncludeInEmails'];
    }

    /**
     * @param bool[] $value
     * @return ContactPerson
     */
    public function addIncludeInEmail($value){
        $this->_data['IncludeInEmails'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactID(){
        return $this->_data['ContactID'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setContactID($value){
        $this->_data['ContactID'] = $value;
        return $this;
    }

    /**
     * @return date
     */
    public function getContactNumber(){
        return $this->_data['ContactNumber'];
    }

    /**
     * @param date $value
     * @return ContactPerson
     */
    public function setContactNumber($value){
        $this->_data['ContactNumber'] = $value;
        return $this;
    }

    /**
     * @return date
     */
    public function getName(){
        return $this->_data['Name'];
    }

    /**
     * @param date $value
     * @return ContactPerson
     */
    public function setName($value){
        $this->_data['Name'] = $value;
        return $this;
    }



}