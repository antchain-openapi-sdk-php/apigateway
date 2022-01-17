<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\APIGATEWAY\Models;

use AlibabaCloud\Tea\Model;

class ListAuthappApiRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 授权API标识
    /**
     * @var string
     */
    public $authAppInfoId;

    // param
    /**
     * @var ApiInfoQueryVO
     */
    public $param;

    // 租户标识
    /**
     * @var string
     */
    public $tenantId;

    // 工作空间标识
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'authAppInfoId'     => 'auth_app_info_id',
        'param'             => 'param',
        'tenantId'          => 'tenant_id',
        'workspaceId'       => 'workspace_id',
    ];

    public function validate()
    {
        Model::validateRequired('authAppInfoId', $this->authAppInfoId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->authAppInfoId) {
            $res['auth_app_info_id'] = $this->authAppInfoId;
        }
        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['workspace_id'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthappApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['auth_app_info_id'])) {
            $model->authAppInfoId = $map['auth_app_info_id'];
        }
        if (isset($map['param'])) {
            $model->param = ApiInfoQueryVO::fromMap($map['param']);
        }
        if (isset($map['tenant_id'])) {
            $model->tenantId = $map['tenant_id'];
        }
        if (isset($map['workspace_id'])) {
            $model->workspaceId = $map['workspace_id'];
        }

        return $model;
    }
}
