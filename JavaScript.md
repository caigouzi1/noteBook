# JavaScript

## 基础函数

### DOM

#### 鼠标右击（右键）

```javascript
// 绑定右击事件
bindEvent(divChess, 'mousedown', function (event){
    // 禁止鼠标右键(右击)弹出选项卡
    divChess.oncontextmenu = function(e){
        return false;
    } 
    let target = event.target
    // 判断是否为右击操作
    if(event.button==2){
        if(target.classList.contains('cell')){
            toggleClass(target, 'flag')
        }
    }

})
```





## 工具函数集合

### DOM操作

```javascript
// 获取页面元素
var e = function (element) {
    return document.querySelector(element)
}

// 给父元素的子节点添加内容
var appendHtml = function (element, html) {
    element.insertAdjacentHTML('beforeend', html)
}

// 绑定事件
var bindEvent = function (element, eventName, callback) {
    element.addEventListener(eventName, callback)
}

// 开关某一个类
var toggleClass = function (element, className) {
    if (element.classList.contains(className)) {
        element.classList.remove(className)
    } else {
        element.classList.add(className)
    }
}
```



### JavaScript功能块

```javascript
// 打印显示结果
var log = console.log.bind(console)

// 返回1 - num 之间的数字（ 包括 num ）
function getRandNum(num) {
    return Math.floor(Math.random() * num + 1)
}
```

