<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/17
 * Time: 09:57
 */

//$source = array(1,2,3,4);
//sort($source); //保证初始数组是有序的
//$last = count($source) - 1; //$source尾部元素下标
//$x = $last;
//$count = 1; //组合个数统计
//echo implode(',', $source), "<br>"; //输出第一种组合
//while (true) {
//    $y = $x--; //相邻的两个元素
//    if ($source[$x] < $source[$y]) { //如果前一个元素的值小于后一个元素的值
//        $z = $last;
//        while ($source[$x] > $source[$z]) { //从尾部开始，找到第一个大于 $x 元素的值
//            $z--;
//        }
//        /* 交换 $x 和 $z 元素的值 */
//        list($source[$x], $source[$z]) = array($source[$z], $source[$x]);
//        /* 将 $y 之后的元素全部逆向排列 */
//        for ($i = $last; $i > $y; $i--, $y++) {
//            list($source[$i], $source[$y]) = array($source[$y], $source[$i]);
//        }
//        echo implode(',', $source), "<br>"; //输出组合
//        $x = $last;
//        $count++;
//    }
//    if ($x == 0) { //全部组合完毕
//        break;
//    }
//}
//echo 'Total: ', $count, "\n";

$lottery=array('1','3','5','9','4');
$pos=array_search(max($lottery),$lottery);
echo $lottery[$pos];


unset($lottery[3]);
unset($lottery[4]);

print_r($lottery);