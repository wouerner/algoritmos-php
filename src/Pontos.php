<?php
// 1. Construa um algoritmo que, tendo como dados de entrada dois pontos quaisquer no plano, P(x1,y1) e P(x2,y2),
// escreva a distância entre eles. A fórmula que efetua tal cálculo é:
namespace Wouerner;

final class Pontos
{
    public function exec($codx1, $codx2, $cody1, $cody2) : float
    {

        if (empty($codx1)
            || empty($codx2)
            || empty($cody1)
            || empty($cody2)
        ) {
            throw new InvalidArgumentException(
                sprintf('Faltando variaveis')
            );
        }

        return sqrt(pow(($codx2 - $codx1 ), 2) + pow(($cody2 - $cody1), 2));
    }
}
