# CSS Modules下使用classnames

### 情境

​	*CSS Modules下使用 classnames 无法将classname转化为 hash 格式*

### 解决方法

```
import classNames from 'classnames/bind';   //引用classnames/bind
import styles from './index.less';
let classStyles = classNames.bind(styles);	 //调用classNames


const tabItems = tabList.map((item, idx) => {
  const itemCls = classStyles({
    "item": !(idx === current),
    "active": idx === current
  });

  return (
    <div key={idx} path={item.path} className={[itemCls]}>{item.name}</div>
  )
```