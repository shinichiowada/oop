<?php

class Car
{
    private $carName;   // 車名
    private $carNumber; // 車体番号
    private $carColor;  // カラー

    public function __construct($carName, $carNumber, $carColor)
    {
        $this->carName = $carName;
        $this->carNumber = $carNumber;
        $this->carColor = $carColor;
    }

    public function getName()
    {
        return $this->carName;
    }

    public function getNumber()
    {
        return $this->carNumber;
    }

    public function getColor()
    {
        return $this->carColor;
    }

    public function setName($carName)
    {
        $this->carName = $carName;
    }

    public function setNumber($carNumber)
    {
        $this->carNumber = $carNumber;
    }

    public function setColor($carColor)
    {
        $this->carColor = $carColor;
    }

    public function infomation()
    {
        echo '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() . '、カラー:' . $this->getColor() . 'です。';
    }
}

// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスの生成
class Taxi extends Car
{
    private $passenger;

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function pickUp($upNumber)
    {
        return $this->passenger += $upNumber;
    }

    public function infomation()
    {
        return '車の車種:' . $this->getName() . '、 ' . '車体番号:' . $this->getNumber() . '、 ' . 'カラー:' . $this->getColor() . '、乗車人数は' . $this->getPassenger() .
            '人です。';
    }

    public function lower($out_number)
    {
        if (($this->passenger - $out_number) >= 0) 
        {
            echo $out_number . '人降車しました。';
            $this->passenger -= $out_number;
        } else {
            echo '降車人数に誤りがあります';
        }
    }
}

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);
