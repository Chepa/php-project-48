<?php

namespace SRc;

use Docopt;

function gendiff(): Docopt\Response
{
    $doc = <<<'DOCOPT'
Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)
DOCOPT;

    return Docopt::handle($doc);
}


