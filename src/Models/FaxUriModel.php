<?php 
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 04/03/2015
 */

namespace APIv3SandboxLib\Models;

use JsonSerializable;

class FaxUriModel implements JsonSerializable {
    /**
     * The identifier of the fax URI
     * @param int $faxUriId public property
     */
    protected $faxUriId;

    /**
     * The delivery method used by the fax URI
     * @param string $deliveryMethod public property
     */
    protected $deliveryMethod;

    /**
     * The file format used by the fax URI
     * @param string $faxFileFormat public property
     */
    protected $faxFileFormat;

    /**
     * The formatted URI
     * @param string $uri public property
     */
    protected $uri;

    /**
     * The csid used by the fax URI
     * @param string $csid public property
     */
    protected $csid;

    /**
     * The text to use as subject line
     * @param string $subject public property
     */
    protected $subject;

    /**
     * The text to use in the body
     * @param string $body public property
     */
    protected $body;

    /**
     * A flag indicating if the fax uses HTML
     * @param bool $useHtml public property
     */
    protected $useHtml;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   int               $faxUriId         Initialization value for the property $this->faxUriId      
	 * @param   string            $deliveryMethod   Initialization value for the property $this->deliveryMethod
	 * @param   string            $faxFileFormat    Initialization value for the property $this->faxFileFormat 
	 * @param   string            $uri              Initialization value for the property $this->uri           
	 * @param   string            $csid             Initialization value for the property $this->csid          
	 * @param   string            $subject          Initialization value for the property $this->subject       
	 * @param   string            $body             Initialization value for the property $this->body          
	 * @param   bool              $useHtml          Initialization value for the property $this->useHtml       
     */
    public function __construct()
    {
        if(8 == func_num_args())
        {
            $this->faxUriId       = func_get_arg(0);
            $this->deliveryMethod = func_get_arg(1);
            $this->faxFileFormat  = func_get_arg(2);
            $this->uri            = func_get_arg(3);
            $this->csid           = func_get_arg(4);
            $this->subject        = func_get_arg(5);
            $this->body           = func_get_arg(6);
            $this->useHtml        = func_get_arg(7);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['faxUriId']       = $this->faxUriId;
        $json['deliveryMethod'] = $this->deliveryMethod;
        $json['faxFileFormat']  = $this->faxFileFormat;
        $json['uri']            = $this->uri;
        $json['csid']           = $this->csid;
        $json['subject']        = $this->subject;
        $json['body']           = $this->body;
        $json['useHtml']        = $this->useHtml;
        return $json;
    }
}