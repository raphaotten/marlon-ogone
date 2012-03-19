<?php
$querystring = '';
$querystring .= $this->getOgoneUri();
$querystring .= '?';

foreach($this->getParameters() as $key => $value)
{
    if($value)
    {
     $querystring .= $key;
     $querystring .= '=';
     $querystring .= urlencode($value);
     $querystring .= '&';
    }
}
$querystring .= 'SHASIGN=';
$querystring .= $this->getShaSign();
$querystring .= '&submit=Submit';

echo $querystring;