<?php

/**
 * 当参数的值只有两种情况时，值的判断
 * @param $name
 * @param $val
 * @return string
 * user: trina
 */
if (!function_exists('judge')) {
    function judge($name, $val) {
        $result = '';
        if (!empty($name) && is_numeric($val)) {
            $data = Yii::$app->params[$name][$val];
            if (!$val) {
                $result = '<span class="label label-danger">'.$data.'</span>';
            } else {
                $result = '<span class="label label-success">'.$data.'</span>';
            }
        }

        return $result;
    }
}