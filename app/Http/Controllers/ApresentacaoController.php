<?php

namespace App\Http\Controllers;

use PDF;

class ApresentacaoController
{
    public function olaMundo()
    {
        $domPdf = PDF::loadHTML('<h1 style="color: red">Ola Treinaweb</h1>');

        return $domPdf->stream();
    }
}
