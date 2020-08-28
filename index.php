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

$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';
