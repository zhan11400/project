<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">商品评价</div>
                </div>
                <div class="widget-body am-fr">
             <!--       <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a class="am-btn am-btn-default am-btn-success am-radius"
                                       href="<?/*= url('goods.category/add') */?>">
                                        <span class="am-icon-plus"></span> 新增
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>内容名称</th>
                                <th>图片</th>
                                <th>评论者</th>
                                <th>商品信息</th>
                                <th>评论时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($list)): foreach ($list as $first): ?>
                                <tr>
                                    <td class="am-text-middle"><?= $first['id'] ?></td>
                                    <td class="am-text-middle"><?= $first['content'] ?></td>
                                    <td class="am-text-middle">   <?php if (!empty($first['images'])): foreach ($first['images'] as $v): ?>
                                            <a href="<?= $v['file_path'] ?>" target="_blank"><img src="<?= $v['file_path'] ?>" height="80"></a>
                                        <?php endforeach; endif; ?>
                                        </td>
                                    <td class="am-text-middle"> <?= $first['user']['nickName'] ?></td>
                                    <td class="am-text-middle"> <a title="查看商品详情" href="<?= url('goods/edit',
                                            ['goods_id' => $first['goods']['goods_id']]) ?>">
                                            <?= $first['goods']['goods_name'] ?>
                                        </a></td>
                                    <td class="am-text-middle"><?= $first['create_time'] ?></td>
                                    <td class="am-text-middle"><?= $first['status_str'] ?></td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                            <?php if ($first['status']==0): ?>
                                            <a class="am-check" data-url="<?= url('goods.comment/check', ['id' => $first['id']]) ?>" data-status="1"
                                               data-id="<?= $first['id'] ?>">
                                                <i class="am-icon-pencil"></i> 通过
                                            </a>
                                            <a class="am-check" data-url="<?= url('goods.comment/check',
                                                ['id' => $first['id']]) ?>" data-status="-1"  data-id="<?= $first['id'] ?>">
                                                <i class="am-icon-pencil"></i> 不通过
                                            </a>
                                            <?php endif; ?>
                                            <a href="javascript:;" class="item-delete tpl-table-black-operation-del"
                                               data-id="<?= $first['id'] ?>">
                                                <i class="am-icon-trash"></i> 删除
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                                <tr>
                                    <td colspan="5" class="am-text-center">暂无记录</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="am-u-lg-12 am-cf">
                        <div class="am-fr"><?= $list->render() ?> </div>
                        <div class="am-fr pagination-total am-margin-right">
                            <div class="am-vertical-align-middle">总记录：<?= $list->total() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        // 删除元素
        var url = "<?= url('goods.comment/delete') ?>";
        $('.item-delete').delete('id', url);


        $(".am-check").click(function () {
           var status= $(this).data('status');
            var id=$(this).data('id')
            var text=$(this).text();
            var url=$(this).data('url');
            layer.confirm('确定操作'+text+'吗？', {
                btn: ['确定', '取消']
            }, function () {
            $.ajax({
                type :"post",
                url : url,
                data : {'id':id,'status':status},
                dataType : "json",
                success : function(data) {
                    layer.msg(data.msg)
                    if(data.code==1){
                        location.reload();
                    }
                },
                error : function(err) {
                    layer.alert(err.info,8);
                }
            });
        })
        })
    });
</script>

