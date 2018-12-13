<?php
/**
 * Created by PhpStorm.
 * user: trina
 * Date: 18-12-6
 * Time: 下午3:49
 */

namespace common\logic;

class GoodsLogic
{
    /**
     * 商品分类
     * @param $goods
     * @param int $id
     * @return array
     * user: trina
     */
    public function handleForGoods($goods, $id = 0)
    {
        $data = [];
        if (count($goods)) {
            foreach ($goods as $good) {
                if ($good['pid'] == $id) {
                    $list['id'] = $good['id'];
                    $list['title'] = $good['title'];
                    $list['son'] = $this->handleForGoods($goods, $good['id']);
                    $data[] = $list;
                }
            }
        }

        return $data;
    }
}