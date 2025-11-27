<?php

namespace App\Enums;

enum FreteStatus: string
{
    case EM_TRANSITO = 'Em Trânsito';
    case SAIU_PARA_ENTREGA = 'Saiu para Entrega';
    case ENTREGUE = 'Entregue';
    // Amanhã irei pesquisar como inplementar o a status

}
