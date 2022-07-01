<?php


namespace okv5;


class RubikApi extends Utils
{
    public function supportCoin(){
        $params = [

        ];

        return $this->request('/api/v5/rubik/stat/trading-data/support-coin', $params, 'GET');
    }

    public function takerVolume($ccy,$instType,$begin='',$end='',$period=''){
        $params = [
            'ccy' => $ccy,
            'instType' => $instType,
            'begin' => $begin,
            'end' => $end,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/taker-volume', $params, 'GET');
    }

    public function loanratio($ccy,$begin='',$end='',$period=''){
        $params = [
            'ccy' => $ccy,
            'begin' => $begin,
            'end' => $end,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/margin/loan-ratio', $params, 'GET');
    }

    public function accountRatio($ccy,$begin='',$end='',$period=''){
        $params = [
            'ccy' => $ccy,
            'begin' => $begin,
            'end' => $end,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/contracts/long-short-account-ratio', $params, 'GET');
    }

    public function openinterestvolume($ccy,$begin='',$end='',$period=''){
        $params = [
            'ccy' => $ccy,
            'begin' => $begin,
            'end' => $end,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/contracts/open-interest-volume', $params, 'GET');
    }

    public function optionOpenInterestVolume($ccy,$period=''){
        $params = [
            'ccy' => $ccy,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/option/open-interest-volume', $params, 'GET');
    }

    public function openinterestvolumeratio($ccy,$period=''){
        $params = [
            'ccy' => $ccy,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/option/open-interest-volume-ratio', $params, 'GET');
    }

    public function openInterestVolumeExpiry($ccy,$period=''){
        $params = [
            'ccy' => $ccy,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/option/open-interest-volume-expiry', $params, 'GET');
    }

    public function openInterestVolumeStrike($ccy,$expTime,$period=''){
        $params = [
            'ccy' => $ccy,
            'expTime' => $expTime,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/option/open-interest-volume-strike', $params, 'GET');
    }

    public function takerBlockVolume($ccy,$period=''){
        $params = [
            'ccy' => $ccy,
            'period' => $period,
        ];

        return $this->request('/api/v5/rubik/stat/option/taker-block-volume', $params, 'GET');
    }

}
