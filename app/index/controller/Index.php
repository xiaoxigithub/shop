<?php

namespace app\index\controller;

class Index extends Base
{
    /**
     * 首页
     */
    public function index()
    {
        $this->template->assign([
            'title'   => 'shop世界顶级图书馆',
            'keyword' => '这里是最实惠的书城'
        ]);
        $this->template->fetch('index/index', [
            'list' => [
                [
                    'id'      => 1,
                    'title'   => '图书1',
                    'content' => 'wwwwww描述'
                ], [
                    'id'      => 2,
                    'title'   => '图书2',
                    'content' => 'wwwww描述22'
                ]
            ],
            'news' => [
                [
                    'id'    => 1,
                    'title' => '新闻11',
                ], [
                    'id'    => 2,
                    'title' => '新闻2',
                ]
            ]
        ]);
    }

    /**
     * 列表页，带分页
     */
    public function list()
    {
        $this->template->fetch('index/list');
    }

    /**
     * 详情页
     */
    public function view()
    {

    }
}
