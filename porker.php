<?php
class Card//一張卡 是一張設計圖
{
    public $suit;
    public $point;
 
    public function __construct($suit, $point)
    {
        $this->suit = $suit;//$this->suit指的是public $suit;  = $suit是__construct($suit, $point)的
        $this->point = $point;
    }
}

class Deck // 一副牌
{  
    public $suits = ["s","h","d","c"];
    public $points = ["2","3","4","5","6","7","8","9","10","J","Q","K","A"];
    public $cards=[];

    public function __construct( )
    {
        foreach ($this->suits as $suit)
        {
            foreach($this->points as $value)
            {
                $card= new Card($suit, $value);// 依照 card class 的格式產生一張卡
                $this->cards[] = $card; //$this 指的是Deck class 將$card放在cards[]陣列裡
            }
        }
    }
    public function shuffle()//洗牌
    {
        shuffle($this->cards );//$this 指的是牌完成了 指的是public $cards=[];
    }

    public function show()
    {
        print_r( $this->cards );// $this 指的是牌完成了 指的是public $cards=[];
    }
}

//不要在這裡用print_r($deck) 會將＄deck裡所有的陣列（suit 與 point 陣列）也印出
//$deck = new Deck;
//$deck->shuffle();
//$deck->show();


class Player
{
    public $handCard = [];//手牌
    public $name = [];//人數

    public function takeCard()
    {
        
    }

    public function showPlayerCard()
    {
        
    }
}

class Game//只考慮一副牌發完
{
    public $players = ["AAA","BBB","CCC","DDD"];//玩家人數
    public $decks =[];//每個人的牌
    public $suits;
    public $points;

    public function sendCard()//決定一人有幾張牌(物件array 0~11 給AAA)
    { 
        $deck = new Deck;//產生牌組
        $deck -> shuffle();//洗牌
        for($i=1; $i<=4; $i++)//取出一個player
        {
            for ($j=1;$j<=11;$j++)//"AAA"下面有12張牌"
            {   
                $player = $this->players[$i];
                $this ->$deck = $player;
                //$this ->decks = ;//class Game的public $decks = $deck -> shuffle();
                
            }

        }
       
    }

    public function showAllCard()
    {
        print_r($this->decks);// $this 指的是Deck class
        
    }
}




?>