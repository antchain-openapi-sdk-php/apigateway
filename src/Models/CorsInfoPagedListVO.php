<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\APIGATEWAY\Models;

use AlibabaCloud\Tea\Model;

class CorsInfoPagedListVO extends Model
{
    // cors列表
    /**
     * @example
     *
     * @var CorsInfoVO[]
     */
    public $list;

    // 分页信息
    /**
     * @example
     *
     * @var PageInfo
     */
    public $pageInfo;
    protected $_name = [
        'list'     => 'list',
        'pageInfo' => 'page_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CorsInfoPagedListVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? CorsInfoVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = PageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
