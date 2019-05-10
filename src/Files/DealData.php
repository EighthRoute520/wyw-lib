<?php

namespace LinkDoc\Files;


class DealData
{
   

    /**
     * dealMessage a debug message to the logs.
     *
     * @param  mixed    $message
     *
     * @return void
     */
    public static function dealMessage($message)
    {
        return "我已经处理完了：" . $message;
    }
}