<?php

namespace app\store\model;

use think\Cache;
use think\Db;
use think\Model;

/**
 * 店铺分类模型
 * Class Category
 * @package app\store\model
 */
class Shop extends Model
{
    public static $wxapp_id;
    /**
     * 添加店铺
     * @param array $data
     * @return bool
     */
    public function add(array $data)
    {
        if (!isset($data['images']) || empty($data['images'])) {
            $this->error = '请上传店铺图片';
            return false;
        }
        $data['content'] = isset($data['content']) ? $data['content'] : '';
        $data['shop_image']=serialize($data['images']);
        // 开启事务
        Db::startTrans();
        try {
            // 添加店铺
            $this->allowField(true)->save($data);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
        }
        return false;
    }

    /**
     * 获取商品列表
     * @param int $status
     * @param int $category_id
     * @param string $search
     * @param string $sortType
     * @param bool $sortPrice
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public function getList($status = null, $category_id = 0, $search = '', $sortType = 'all', $sortPrice = false)
    {
        // 筛选条件
        $filter = [];
        $category_id > 0 && $filter['shop_cate_id'] = $category_id;
        $status > 0 && $filter['shop_status'] = $status;
        !empty($search) && $filter['shop_name'] = ['like', '%' . trim($search) . '%'];
        $filter['is_delete']=0;
        // 排序规则
        $sort = [];
        if ($sortType === 'all') {
            $sort = ['shop_sort', 'shop_id' => 'desc'];
        } elseif ($sortType === 'sales') {
          //  $sort = ['goods_sales' => 'desc'];
        } elseif ($sortType === 'price') {
         //  $sort = $sortPrice ? ['goods_max_price' => 'desc'] : ['goods_min_price'];
        }

      return $this->alias("s")->join("shop_category sc","sc.category_id=s.shop_cate_id","LEFT")
          ->field("s.*,sc.name")
          ->where($filter)->order($sort)->paginate(15);

    }
    /**
     * 添加店铺
     * @param array $data
     * @return bool
     */
    public function edit(array $data)
    {
        if (!isset($data['images']) || empty($data['images'])) {
            $this->error = '请上传店铺图片';
            return false;
        }
        $data['content'] = isset($data['content']) ? $data['content'] : '';
        $data['shop_image']=serialize($data['images']);
        unset($data['images']);
        echo'<pre>';

        // 开启事务
        Db::startTrans();
        try {
            // 添加店铺\
            $this->where(['shop_id'=>$data['shop_id']])->update($data);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
        }
        return false;
    }
    /**
     * 删除店铺
     * @return bool
     */
    public function remove($shop_id)
    {
        // 开启事务处理
        Db::startTrans();
        try {

            // 删除当前商品
            $this->where(['shop_id'=>$shop_id])->update(['is_delete'=>1]);
            // 事务提交
            Db::commit();
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }
}
