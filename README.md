Sakura: 樱花博客主题
===

![Sakura](http://cdn-md.littletrue.cn/picgo/screenshot.jpg)

![PHP version](https://img.shields.io/badge/PHP-7.1+-4F5B93.svg?style=flat-square&logo=php)
![WP version](https://img.shields.io/badge/WordPress-5.3-0073aa.svg?style=flat-square&logo=wordpress)
[![GitHub release](https://img.shields.io/github/v/release/mashirozx/Sakura.svg?style=flat-square&logo=github)](https://github.com/mashirozx/Sakura/releases/latest)
[![Github commits (since latest release)](https://img.shields.io/github/commits-since/mashirozx/Sakura/latest/dev.svg?style=flat-square&logo=git&color=important)](https://github.com/mashirozx/Sakura/commits/dev)
[![](https://gcore.jsdelivr.net/v1/package/gh/moezx/cdn/badge)](https://www.jsdelivr.com/package/gh/moezx/cdn)

基于sakura 3.x版本的博客主题进行二次开源: https://github.com/mashirozx/sakura/tree/3.x


主题使用说明：<https://2heng.xin/theme-sakura/>


### 建议安装的插件☆
Hermit X，基于 Aplayer 的播放器。

### 确认兼容的插件
Easy WP SMTP，邮件支持。
WP Statistics，统计插件，主题可选择其接口以作页面访问计数。
Login LockDown，登陆尝试限制，避免前端登陆爆破。
Wordfence Security，避免爆破和评论注入。提醒：该插件将在数据库中记录访客信息，数据库体积将略有增大。
Akismet Anti-Spam，垃圾评论过滤。
AMP，生成AMP 页面，效果就是这样，有利于提升 Google 排名。
Autoptimize，页面压缩。
Glue for Yoast SEO & AMP，AMP 增强，需配合 Yoast SEO 及 AMP 插件使用。
WP Super Cache，页面缓存，为访客自动生成缓存版网页，提升访问速度。
Yoast SEO，搜索引擎优化。

其他插件我没用过，不保证兼容性。

### CDN 优化和图床使用

使用了CDN后评论定位不正确？
如果使用了 CDN 请在 WordPress 根目录的配置文件 wp-config.php 最后加上这段：
```java
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $list[0];
}
```

图床建议使用CDN + 七牛云 上传图片后放置于md文章内。

### 功能使用示例
https://2heng.xin/theme-sakura/#toc-head-29

### 注意事项
重要★★：
主题下载后请把文件夹名字改回 Sakura，也即，保证主题路径为 wp-content/themes/Sakura/。

启用新主题/插件前备份数据库是一个良好的习惯。

### 写作规范
主题遵循 HTML5 规范，正文部分样式完全兼容标准 Markdown 语法，因此也建议配合 WP Editor.md 插件使用 Markdown 写作，可参考《Markdown 编辑器语法指南》。

主题演示站有一篇 Markdown 语法展示，文章源码在这里。

### API
下面是一些主题内已经带有的接口，无需重复构建：
Cookie：see https://2heng.xin/2018/05/12/add-a-version-control-for-cookies/

### 兼容性版本
#### 服务器端
WordPress 版本：4.8+
PHP 版本：7.1+

#### 前端

兼容主流 Chromium 内核浏览器、FireFox 浏览器。不兼容 IE （360、QQ 等双核浏览器请关闭 IE 模式）。