# This is a backstage management system based on Thinkphp5.0.12 and X-Admin1.0 #


----------



一个基于Thinkphp5.0.12和X-Admin1.0的后台管理系统。

演示地址：[http://admin.ferre.top/admin](http://admin.ferre.top/admin "Alexa-Admin")

登录用户名：root		  密码：1234

> 
> Because the Ferre's energy is limited, and now is the rudiment of the project, the author will update and maintain it regularly, or it will not update for a long time. I'm sorry to sacrifice your reading time.

## **为什么要重复造轮子?**




* 想基于一个精简的后台管理系统开始构建项目，但苦于开源项目中此类管理系统太少。



* 自造高可复用性后台管理系统。
* Alexa-Admin便捷，可扩展性更强。
 
* 方便，开箱即用。

<br />
> Why Thinkphp5.0.12?<br/>
> 在tp5.0.9后每次调用助手函数db时不必再重新连接数据库，达到和Db类一样的效果，不用过多的引用类库，精简代码。
> 
> 如果您有兴趣，也可加入开发组，qq群：101675621


## **如何使用**


1. 安装Alexa-Admin的两种方式:
	
    	- composer依赖  : composer create-project FreeSpider/Alexa-Admin your_project_name
    	
    	- 下载github源码 : git clone git@github.com:FreeSpider/Alexa-Admin.git



2. 导入sql(因时间关系，暂无图形引导安装界面)

3. 在database.php里修改您的数据库名和密码等配置

3. 配置Linux服务器下Alexa-Admin的写入权限

4. 如果您想使用邮件服务，请在邮件服务中自行配置

5. app/extra目录下为各项配置文件(如分页参数的配置在conf.php中)

## **Alexa-Admin有哪些特点?**

- 高安全，抛弃传统的sha1+md5的加密方式，采用password_hash+盐的方式，使用字典方式很难破解

- 文章发布,集成百度UEditor编辑器功能

- 栏目(内置无限级，考虑到易用性已删除，用户可自行二开)

- 内置百度ECharts，您可以基于Ferre的基础上扩展可视化数据

- 简单的权限管理；超级管理员和管理员两重角色；管理员仅可操作文章和分类，且生成管理员日志

- 系统设置和友链(考虑到安全性，系统表为单独的一张表)

- 基于PHPMailer的SMTP方式的集成邮件服务

- 缩略图上传集成了七牛云对象存储服务




## **特别鸣谢**

感谢以下项目，排名不分先后:

* Thinkphp：[http://www.thinkphp.cn/](http://www.thinkphp.cn/)

* X-Admin ：[http://x.xuebingsi.com/](http://x.xuebingsi.com/)

* Layui ：[http://www.layui.com/](http://www.layui.com/)

* jQuery ：[http://jquery.com](http://jquery.com)

* Bootstrap ：[http://getbootstrap.com](http://getbootstrap.com)

##  **版权信息**
由Ferre开发 请自行遵循以上项目的协议

##  **使用温馨提示**
金钱：
请尽量使用七牛云提供的原图保护功能，防止恶意盗链行为，以免给您带来不必要的财产损失,具体访问方式请参照七牛云官方文档,谢谢

账户及密码：
请勿在任何公共网络泄露您的邮箱账户和密码,谢谢