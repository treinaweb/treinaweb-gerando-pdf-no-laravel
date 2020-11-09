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

    public function cursos()
    {
        $cursos = [
            'php' => [
                'nome' => 'curso PHP',
                'versao' => 8
            ],
            'java' => [
                'nome' => 'curso de Java',
                'versao' => 12
            ]
        ];

        $domPdf = PDF::loadView('cursos', compact('cursos'));

        return $domPdf->stream();
    }

    public function wiki()
    {
        $domPdf = PDF::loadFile(public_path() . '/treinaweb-wiki.html');

        //return $domPdf->stream();
        return $domPdf->save(public_path() . '/treinaweb.pdf')->stream();
    }
}
