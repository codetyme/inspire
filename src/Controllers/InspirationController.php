<?php

namespace Codetyme\Inspire\Controllers;

use Illuminate\Http\Request;
use Codetyme\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justQuote();

        return view('inspire::index', compact('quote'));
    }
}

?>
