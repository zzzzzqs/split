<?php

namespace Zzzzzq\Split;

use Zzzzzq\Split\Exceptions\InvalidArgumentException;

class Split
{
    /**
     * 以指定的参数分割一个数字
     *
     * @param int $num 要分割的数字
     * @param int $param 分割的参数
     * @param array $arr 存储分割结果的数组（内部使用）
     * @return array 分割后的结果数组
     * @throws InvalidArgumentException 如果参数无效
     */
    public function __invoke(int $num, int $param, array $arr = []): array
    {
        if ($num <= 0 || $param <= 0) {
            throw new InvalidArgumentException('Both num and param must be non-zero integers.');
        }

        if ($num <= $param) {
            $arr[] = $num;
            return $arr;
        } else {
            $arr[] = $param;
            return $this->__invoke($num - $param, $param, $arr);
        }
    }
}