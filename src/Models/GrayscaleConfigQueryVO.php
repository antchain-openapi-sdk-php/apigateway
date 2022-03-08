<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\APIGATEWAY\Models;

use AlibabaCloud\Tea\Model;

class GrayscaleConfigQueryVO extends Model
{
    // fuzzy_search
    /**
     * @example true, false
     *
     * @var bool
     */
    public $fuzzySearch;

    // page_info
    /**
     * @example page_info
     *
     * @var PageInfo
     */
    public $pageInfo;

    // query
    /**
     * @example
     *
     * @var GrayscaleConfigVO
     */
    public $query;
    protected $_name = [
        'fuzzySearch' => 'fuzzy_search',
        'pageInfo'    => 'page_info',
        'query'       => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzySearch) {
            $res['fuzzy_search'] = $this->fuzzySearch;
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->query) {
            $res['query'] = null !== $this->query ? $this->query->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrayscaleConfigQueryVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fuzzy_search'])) {
            $model->fuzzySearch = $map['fuzzy_search'];
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = PageInfo::fromMap($map['page_info']);
        }
        if (isset($map['query'])) {
            $model->query = GrayscaleConfigVO::fromMap($map['query']);
        }

        return $model;
    }
}
