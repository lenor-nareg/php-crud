<?php 
//transitivité 

class A {
    public function test1(){
        return "test 1 ";
    }
}
class B extends A{
    public function test2(){
        return "test 2 ";
    }
}
class C extends B{
    public function test3(){
        return "test 3 ";
    }
}

$c = new C;
echo $c->test1() . '<br>';
/**
 * si C herite de B et que B herite de A alors C herite aussi de A.
 * Les methodes protected de A son accessibles ds le C grace à la transitivité.
 * Une class ne peut pas heriter d'elle mm ex : class Dextends D.
 * class F extends E // F heriite de E, E n'herite pas de F.
 * Pas d'heritage multiple : class G extends D, E, F
 */