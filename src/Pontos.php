<?php
// 1. Construa um algoritmo que, tendo como dados de entrada dois pontos quaisquer no plano, P(x1,y1) e P(x2,y2),
// escreva a distância entre eles. A fórmula que efetua tal cálculo é:
namespace Wouerner;

final class Pontos
{
    public function exec($x1, $x2, $y1, $y2) : float
    {

        if (empty($x1)
            || empty($x2)
            || empty($y1)
            || empty($y2)
        ) {
            throw new InvalidArgumentException(
                sprintf('Faltando variaveis')
            );
        }

        return sqrt(pow(($x2 - $x1 ), 2) + pow(($y2 - $y1), 2));
    }
}
