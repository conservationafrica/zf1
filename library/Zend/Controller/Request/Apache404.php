<?php
class Zend_Controller_Request_Apache404 extends Zend_Controller_Request_Http
{
    public function setRequestUri($requestUri = null)
    {
        $parseUriGetVars = false;
        if ($requestUri === null) {
            if (isset($_SERVER['HTTP_X_REWRITE_URL'])) { // check this first so IIS will catch
                $requestUri = $_SERVER['HTTP_X_REWRITE_URL'];
            } elseif (isset($_SERVER['REDIRECT_URL'])) {  // Check if using mod_rewrite
                $requestUri = $_SERVER['REDIRECT_URL'];
                if (isset($_SERVER['REDIRECT_QUERY_STRING'])) {
                    $parseUriGetVars = $_SERVER['REDIRECT_QUERY_STRING'];
                }
            } elseif (isset($_SERVER['REQUEST_URI'])) {
                $requestUri = $_SERVER['REQUEST_URI'];
            } elseif (isset($_SERVER['ORIG_PATH_INFO'])) { // IIS 5.0, PHP as CGI
                $requestUri = $_SERVER['ORIG_PATH_INFO'];
                if (!empty($_SERVER['QUERY_STRING'])) {
                    $requestUri .= '?' . $_SERVER['QUERY_STRING'];
                }
            } else {
                return $this;
            }
        } elseif (!is_string($requestUri)) {
            return $this;
        } else {
            if (false !== ($pos = strpos($requestUri, '?'))) {
                $parseUriGetVars = substr($requestUri, $pos + 1);
            }
        }

        if ($parseUriGetVars) {
            // Set GET items, if available
            parse_str($parseUriGetVars, $_GET);
        }

        $this->_requestUri = $requestUri;
        return $this;
    }
}
