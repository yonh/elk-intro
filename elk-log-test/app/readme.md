# 推荐的日志记录以及索引方式

### 推销一种我认为比较高效的日志索引查询方式

1. 使用ELK去索引查询日志
2. 添加请求ID到每条日志里面
3. 添加日志写入顺序
4. 模块日志可以考虑添加一个模块字段


情景：
1. 有些时候发生bug了，需要调试看日志，但服务器我没有权限，这个时候有权限的人可能在忙其他事情
2. 看日志还得登录到服务器，去找日志可能在那里（因为我们日志有时真不知道在哪个文件）
3. 负载多台服务器的时候，日志可能分布在不同的服务器上面，一台台上去看太麻烦效率低，也不安全（我们应尽量少的ssh到服务器）
