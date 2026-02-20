## Build theme from scratch
## ESNext for JavaScript
## Babel
## Sass
## Webpack
## OOP
## Singleton
## PHP Classes
## Namespace
## Registering Custom Menus
## Editing the Default WordPress Menus
## Registering CPTs, Taxonomy
## Infinite Scroll
## Pagination
## Custom page templates
## Writing WP Queries
## Blog Page
## Archive
## Post Filters with load more
## Creating customizer options
## Working with user admin roles
## Creating Theme option page
## Using slick slider.
## Creating Custom Widgets
## Adding comment form
## Adding related posts
## Translation
## Making ajax request
## Using WordPress REST API
## PHP Namespace
- A way of encapsulating items
- Like a virtual folder or directory defined with namespace keyword at the top of the class file following by the name you like.
- Allow you to have two or more classes with the same name in different namespaced directories.
``` php
class Product{} //define
$product = new Product(); //use

namespace App
class Product{}

$product = new App\Product();
or use App;
```

## Autoloaders
### spl_autoload_register()
```php
spl_autoload_register( function( $class ) {
    include 'includes/' . $class . '.php'
} );

new Student()
new Person()
```
- Loading classes or interfaces automatically
- Registers any no. of autoloaders
- Enables classes and interfaces to be automatically loaded if they are currently not defined

## Traits
- Earlier we could only inherit properties and Functions from one class to another, by extending them.
- if we want the properties/methods of inherited class or into another, we need to extend it again creates chain of inheritance.
- PHP( 5.4+ ) introduced a mechanism for code reusability called traits.
```php
Teacher() ---> Person()
teach()   extend

Student() ------> Person()
learn()    trait
Student2() ------> Person()
           trait
Student3() ------> Person()
           trait
```
- Traits allow us to reuse sets of methods freely in several independent classes living in different class hierarchies.
- Share functionalities from multiple classes
- A trait is similar to a class, but only intended to group functioning in a fine-grained and consistent way.
``` php
trait Say_World {
    public function say_hello() {
        echo "Hello Trait";
    }
}

class Teacher{
    public function say_name() {
        echo 'Teacher';
    }
}

class Base extends Teacher {
    use Say_World;
    public function_construct() {
        //
    }
}

$base = new Base();
$base->say_hello();
$base->say_name();
```