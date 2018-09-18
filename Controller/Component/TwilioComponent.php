<?php
App::import('Twilio.Lib', 'Twilio');
class TwilioComponent extends Component {
/**
 * Twilio Component
 *
 * @property Controller $_controller
 * @property Twilio $_twilioClient
 * @property boolean $_isTestMode
 *
 */

    protected $_controller = null;
    protected $_twilioClient = null;
    protected $_isTestMode = null;

/**
 *  Twilio component constructor
 *  
 *  @property ComponentCollection $collection
 *  @property array $settings
 * 
 */
    public function __construct(ComponentCollection $collection, $settings = array()) {
        $this->_twilioClient = new Twilio($settings['accountSid'], $settings['authToken']);
        parent::__construct($collection, $settings);
    }
/**
 * Send sms method
 * 
 * @property string $from    - from sms phone number
 * @property string $to      - to sms phone number
 * @property string $message - sms message
 * @property string $service_id - co-pilot service id
 * @return integer           - sms id
 * 
 */
    public function sendSMS($from, $to, $message, $service_id=false) {
        return $this->_twilioClient->sendSMS($from, $to, $message, $service_id);
    }
    


}