# git常用命令

## 初始化项目

```php
git init	//初始.git文件
git add README.md	//添加readme文档
git commit -m "first commit"	//递交
git remote add origin https://github.com/caigouzi1/haha.git	//关联远程仓库
git push -u origin master	//推送代码到master分支
```

## Git 分支管理

```php
git branch		//列出分支基本命令
git checkout -b dev		//本地新建一个本地的分支
git push origin panda	//代码推送到远端dev分支
```

## Git 推送（push）

> 格式 : git push <远程主机名> <本地分支名>  <远程分支名> 

```php
git push origin master	//如果远程分支被省略，如上则表示将本地分支推送到与之存在追踪关系的远程分支（通常两者同名），如果该远程分支不存在，则会被新建
git push origin:refs/for/master		//如果省略本地分支名，则表示删除指定的远程分支，因为这等同于推送一个空的本地分支到远程分支，等同于 git push origin --delete master
git push origin		//如果当前分支与远程分支存在追踪关系，则本地分支和远程分支都可以省略，将当前分支推送到origin主机的对应分支
git push	//如果当前分支只有一个远程分支，那么主机名都可以省略，形如 git push，可以使用git branch -r ，查看远程的分支名
```

