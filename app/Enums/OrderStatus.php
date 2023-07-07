<?php
/**
 * User: Zura
 * Date: 9/17/2022
 * Time: 6:34 AM
 */

namespace App\Enums;


/**
 * Class OrderStatus
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package App\Enums
 */
enum OrderStatus: string
{
    case Unpaid = 'não pago';
    case Paid = 'pago';
    case Cancelled = 'cancelado';
    case Shipped = 'enviado';
    case Completed = 'concluído';

    public static function getStatuses()
    {
        return [
            self::Paid, self::Unpaid, self::Cancelled, self::Shipped, self::Completed
        ];
    }
}