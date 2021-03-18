<?php

namespace App\Services;

/**
 * Сервис для вычислений
 */
class Calculate
{
    /**
     * Вычисление факториала
     *
     * @param integer $number число
     *
     * @return integer факториал числа
     */
    public function factorial(int $number) : int
    {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }
}
