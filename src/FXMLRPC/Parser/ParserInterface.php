<?php
namespace FXMLRPC\Parser;

interface ParserInterface
{
    public function parse($xmlString, &$isFault);
}