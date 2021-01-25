# Отношения между объектами в ООП




## Ассоциация

```puml
class A{}
class B{}
A - B
```

```php
class A{
    public function do_work(B $b): void{
        $b->helper();
    }
}

class B{
    public function helper(): void{}
}
```


## Агрегация

```puml
class A{}
class B{}
A o- B
```

```php

```

## Композиция

```puml
class A{}
class B{}
A *- B
```

```php

```
