<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class yobit extends \ccxt\async\Exchange {
    public function public_get_depth_pair($params = array()) {
        return $this->request('depth/{pair}', 'public', 'GET', $params);
    }
    public function public_get_info($params = array()) {
        return $this->request('info', 'public', 'GET', $params);
    }
    public function public_get_ticker_pair($params = array()) {
        return $this->request('ticker/{pair}', 'public', 'GET', $params);
    }
    public function public_get_trades_pair($params = array()) {
        return $this->request('trades/{pair}', 'public', 'GET', $params);
    }
    public function private_post_activeorders($params = array()) {
        return $this->request('ActiveOrders', 'private', 'POST', $params);
    }
    public function private_post_cancelorder($params = array()) {
        return $this->request('CancelOrder', 'private', 'POST', $params);
    }
    public function private_post_getdepositaddress($params = array()) {
        return $this->request('GetDepositAddress', 'private', 'POST', $params);
    }
    public function private_post_getinfo($params = array()) {
        return $this->request('getInfo', 'private', 'POST', $params);
    }
    public function private_post_orderinfo($params = array()) {
        return $this->request('OrderInfo', 'private', 'POST', $params);
    }
    public function private_post_trade($params = array()) {
        return $this->request('Trade', 'private', 'POST', $params);
    }
    public function private_post_tradehistory($params = array()) {
        return $this->request('TradeHistory', 'private', 'POST', $params);
    }
    public function private_post_withdrawcoinstoaddress($params = array()) {
        return $this->request('WithdrawCoinsToAddress', 'private', 'POST', $params);
    }
    public function publicGetDepthPair($params = array()) {
        return $this->request('depth/{pair}', 'public', 'GET', $params);
    }
    public function publicGetInfo($params = array()) {
        return $this->request('info', 'public', 'GET', $params);
    }
    public function publicGetTickerPair($params = array()) {
        return $this->request('ticker/{pair}', 'public', 'GET', $params);
    }
    public function publicGetTradesPair($params = array()) {
        return $this->request('trades/{pair}', 'public', 'GET', $params);
    }
    public function privatePostActiveOrders($params = array()) {
        return $this->request('ActiveOrders', 'private', 'POST', $params);
    }
    public function privatePostCancelOrder($params = array()) {
        return $this->request('CancelOrder', 'private', 'POST', $params);
    }
    public function privatePostGetDepositAddress($params = array()) {
        return $this->request('GetDepositAddress', 'private', 'POST', $params);
    }
    public function privatePostGetInfo($params = array()) {
        return $this->request('getInfo', 'private', 'POST', $params);
    }
    public function privatePostOrderInfo($params = array()) {
        return $this->request('OrderInfo', 'private', 'POST', $params);
    }
    public function privatePostTrade($params = array()) {
        return $this->request('Trade', 'private', 'POST', $params);
    }
    public function privatePostTradeHistory($params = array()) {
        return $this->request('TradeHistory', 'private', 'POST', $params);
    }
    public function privatePostWithdrawCoinsToAddress($params = array()) {
        return $this->request('WithdrawCoinsToAddress', 'private', 'POST', $params);
    }
}