<?php

if (!defined('_PS_VERSION_')) {
    exit();
}

/**
 * For testing purposes we wrap the Configuration in a wrapper class 
 * so that we can easily mock it.
 */
class ConfigManager {

    public function addFields() {
        if(
            !Configuration::updateValue('COINBASE_API_KEY', null) ||
            !Configuration::updateValue('COINBASE_SANDBOX', null) ||
            !Configuration::updateValue('COINBASE_SHARED_SECRET', null)
        ) {
            return false;
        }

        return true;
    }

    public function deleteFields() {
        if(
            !Configuration::deleteByName('COINBASE_API_KEY') ||
            !Configuration::deleteByName('COINBASE_SANDBOX') ||
            !Configuration::deleteByName('COINBASE_SHARED_SECRET')
        ) {
            return false;
        }

        return true;
    }

}
