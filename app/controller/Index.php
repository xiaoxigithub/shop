<?php

namespace app\controller;

use app\common\model\Category;
use app\common\model\Goods;
use think\Request;

class Index extends Base
{
    /**
     * 首页
     */
    public function index()
    {
        $list = Goods::where('status', 1)->order([
            'update_time' => 'desc',
            'create_time' => 'desc',
        ])->field('id,name,`desc`')
            ->limit(10)
            ->select();
        $top = Goods::where('status', 1)->order('create_time', 'desc')->find();
        $this->template->fetch('index/index', [
            'list' => $list,
            'top'  => $top
        ]);
    }

    /**
     * 图书分类列表页，带分页
     * @param Request $request
     * @throws \think\db\exception\DbException
     */
    public function cateList(Request $request)
    {
        $limit = $request->param('limit', 10);
        $page = $request->param('page', 1);
        $cateList = Category::paginate([
            'list_rows' => $limit,
            'page'      => $page,
        ]);
        $this->template->fetch('index/cate_list',
            [
                'cate' => $cateList->items(),
                'page' => $cateList->render()
            ]);
    }

    /**
     * 书籍列表
     * @param Request $request
     * @return string
     * @throws \think\db\exception\DbException
     */
    public function list(Request $request)
    {
        $limit = $request->param('limit', 10);
        $page = $request->param('page', 1);
        $id = $request->param('id');
        $good = Goods::find($id);
        if (!$good) {
            return '有没有该分类，你玩蛇？';
        }
        $cateList = Goods::paginate([
            'list_rows' => $limit,
            'page'      => $page,
        ]);
        $this->template->fetch('index/cate_list',
            [
                'cate' => $cateList->items(),
                'page' => $cateList->render()
            ]);
    }

    /**
     * 详情页
     * @param $id
     */
    public function view($id)
    {
        $art = Goods::where('id', $id)->findOrEmpty();
        $this->template->assign([
            'title'   => $art['name'] ?? 'shop世界顶级图书馆',
            'keyword' => $art['desc'] ?? '这里是最实惠的书城',
            'art'     => $art
        ]);
        $this->template->fetch('index/view');
    }
}
