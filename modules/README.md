###模块间通讯 
===========
除了widget  layout 可以跨模块 外   

业务逻辑间的跨模块访问 最好通过 service|api  event lisentener   进行整合     这种东西 有时候也说不明白 只能凭直觉搞了

比如常见问题：  用户模块  某用户删除了  
那么所有的 内容模块 要做的事 就是 删除对应用户的内容 （日志 ，图片 ，评论。。。。）  
类似 机制 如 各个模块 监听用户删除事件

还有 内容模块 比如 日志发表了  那么用户模块的统计信息 也要实时或者通过任务队列 进行计算

这种机制是 日志模块 调用用户提供的统计api进行调用

这种模块间通讯的问题 怎么设计 就是比较不好弄的问题

模块 间解耦 
通过 事件    和监听器    可以用数据库做纽带  要满足高内聚 低耦合关系

所有模块间依赖 可以出现强依赖 跟松散依赖   强依赖关系 如用户模块 对应的内容模块：blog photo friend等   这些附属模块 都依赖user模块的

###模块前后台
==============
仿形设计，对应各个终端
https://github.com/samdark/yii2-cookbook/blob/master/book/structure-backend-frontend-modules.md
