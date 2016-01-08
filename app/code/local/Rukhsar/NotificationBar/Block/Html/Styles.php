<!--
/**
 * @category   Rukhsar
 * @package    Rukhsar_NotificationBar
 * @author     Rukhsar Manzoor (rukhsar.man@gmail.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 -->
<?php
class Rukhsar_NotificationBar_Block_Html_Styles extends Mage_Core_Block_Template
{
    const XML_PATH_NOTIFICATIONBAR_DEFAULT_STYLE = 'design/notificationbar/default_style';
    const XML_PATH_NOTIFICATIONBAR_FIXED_MARGIN  = 'design/notificationbar/fixed_margin';
    const XML_NOTIFICATIONBAR_BLOCK_NAME         = 'notificationbar_notifications';

    /**
     * Return true if the default styling should be used
     *
     * @return boolean
     */
    public function useDefaultStyles()
    {
        return Mage::getStoreConfig(self::XML_PATH_NOTIFICATIONBAR_DEFAULT_STYLE);
    }

    /**
     * Return true if the notification bar should be fixed in place at the top
     *
     * @return boolean
     */
    public function isFixed() {
        return $this->_getNotificationBlock()->isFixed();
    }

    /**
     * Returns the top margin value to apply to the body element when the
     * notification bar is fixed in place
     *
     * @return string
     */
    public function getFixedMargin() {
        return Mage::getStoreConfig(self::XML_PATH_NOTIFICATIONBAR_FIXED_MARGIN);
    }

    /**
     * Check if the notifications bar should be displayed
     *
     * @return boolean
     */
    public function displayNotifications()
    {
        return $this->_getNotificationBlock()->displayNotifications();
    }

    /**
     * Return the notification bar block object, which is used to query the
     * state of the notification bar configurations
     *
     * @return Rukhsar_NotificationBar_Block_Html_Notifications
     */
    protected function _getNotificationBlock() {
        return $this->getLayout()->getBlock(self::XML_NOTIFICATIONBAR_BLOCK_NAME);
    }
}
